<?php 
defined('BASEPATH') or exit('No direct script access allowed');

    class Facturation_model extends CI_Model{

        function sum_per_coupon($coupon){
            $query = $this->db->get_where("facturation",array("coupon" => $coupon));
            $tab = $query->result_array();
            $sum = 0;
            foreach($tab as $x){
                $sum+=(float)$x["prixTotale"];
            }
            return $sum;
        }

        function add_facturation(){
            $method = $this->input->post("paymentMethod");
            $id = $this->session->userdata("userId");
            $price =$this->input->post("price");
            $firstName =$this->input->post("billing_name");
            $lastName =$this->input->post("billing_last_name");
            $company =$this->input->post("billing_company");
            $address =$this->input->post("billing_address");
            $city =$this->input->post("billing_city");
            $phone =$this->input->post("billing_phone");
            $email =$this->input->post("billing_email");
            $orders =$this->input->post("orders");
            $nbr =$this->input->post("nbr");
            $coupon = $this->input->post("couponn");
            // if($method === "en ligne"){
            //     $price*=(1-0.05);
            // }
            $compare = $this->db->get("societe")->result_array()[0]["compare"];
            $reduction = $this->db->get("societe")->result_array()[0]["reduction"];
            if($compare != NULL){
                if($price > $compare){
                    $price=$price*(1-$reduction/100);
                }
            }
            
            $data = array(
                "prixTotale" => $price,
                "idClient" => $id,
                "typePaiement" => $method,
                "first_name" => $firstName,
                "last_name" => $lastName,
                "company_name" => $company,
                "address" => $address,
                "city" => $city,
                "billing_phone" => $phone,
                "billing_email" => $email,
                "products" => $orders,
                "quantities" => $nbr,
                "coupon"=>$coupon,
            );
            if(isset($coupon)){
                $sum = $this->facturation_model->sum_per_coupon($coupon) + $price;
                $this->db->where("couponsCle",$coupon);
                $this->db->update("coupons",array("sum" => $sum));
            }
            $this->db->insert("facturation",$data);
            
        }

        function get_sales_by_client($id){
            $this->db->where("idClient",$id);
            $query = $this->db->get("facturation");
            $total = 0;
            foreach($query->result_array() as $row){
                $total+=$row["prixTotale"];
            }
            return $total;
        }
        
        function get_total_ammount(){
            $query = $this->db->get("facturation");
            $sum = 0;
            foreach($query->result() as $row){
                $sum += $row->prixTotale;
            }
            return $sum;
        }

        function get_facturation(){
            $this->db->join("facturation","user.id = facturation.idClient");
            $this->db->order_by("facturation.id","DESC");
            $query = $this->db->get("user");
            return $query->result_array();
        }

        function get_revenue_by_date($m1){
            $this->db->where(array("created <=" => date("Y")."-$m1-30","created >= " => date("Y")."-$m1-00"));
            $query = $this->db->get("facturation");
            $sum = 0;
            foreach($query->result_array() as $row){
                $sum += $row["prixTotale"];
            }

            return $sum;
        }

        function get_num_product_homme(){
            $this->db->where("type","homme");
            $query = $this->db->get("produits");
            $totale = 0;
            foreach($query->result_array() as $row){
                $totale += $row["price"]*($row["quatityTotale"] - $row["quantity"]);
            }
            return $totale;
        }
        function get_num_product_femme(){
            $this->db->where("type","femme");
            $query = $this->db->get("produits");
            $totale = 0;
            foreach($query->result_array() as $row){
                $totale += $row["price"]*($row["quatityTotale"] - $row["quantity"]);
            }
            return $totale;
        }


        function delete_facturation($id){
            $this->db->where("id",$id);
            $this->db->delete("facturation");
            return false;
        }

        function get_order_details($id){
            $this->db->join("facturation","user.id = facturation.idClient");
            $this->db->where("facturation.id",$id);
            $query = $this->db->get("user");
            return $query->row_array();
        }
        function get_order_panier($id){
            $tab = array();
            $this->db->where("id",$id);
            $query = $this->db->get("facturation")->row_array();
            $x = explode(":",$query["products"]);
            foreach($x as $i){
                array_push($tab,$this->product_model->get_single_product($i));
            }
            return $tab;
        }

        function get_facturation_by_region(){
            $this->db->group_by("city");
            $this->db->select("city");
            $this->db->select_sum("prixTotale");
            // $this->db->sum("prixTotale");
            $query = $this->db->get("facturation");
            return $query->result_array();
        }

        function get_compare_and_reduction(){
            $query = $this->db->get("societe");
            return $query->result_array();
        }
       
    }
