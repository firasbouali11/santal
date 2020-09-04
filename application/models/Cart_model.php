<?php 
defined('BASEPATH') or exit('No direct script access allowed');

    class Cart_model extends CI_Model{

        function add_to_cart($id){
            $idClient = $this->session->userdata("userId");
            $data = array(
                "idClient" => $idClient,
                "idProduit" => $id,
            );
            $this->db->insert("panier",$data);
            $this->user_model->update_sum_cart();
            return true;
        }

        function get_cart(){
            $this->db->join("produits","produits.id = panier.idProduit");
            $this->db->where("idClient",$this->session->userdata("userId"));
            $query = $this->db->get("panier");
            return $query->result_array();
        }

        function delete_product($id){
            $this->db->where("idProduit",$id);
            $this->db->where("idClient",$this->session->userdata("userId"));
            $this->db->delete("panier");
        }
        function clear_panier(){
            $this->db->where("idClient",$this->session->userdata("userId"));
            $this->db->delete("panier");
        }

        function add_single_product_to_cart($id){
            $idClient = $this->session->userdata("userId");
            $nb = $this->input->post("quantity");
            $data = array(
                "idClient" => $idClient,
                "idProduit" => $id,
                "nbrProduit" => $nb
            );
            $this->db->insert("panier",$data);
        }

        function update_cart(){
            $nb = $this->input->post("nb");
            $id = $this->input->post("id");
            $data = array(
                "nbrProduit" => $nb,
            );
            $this->db->where("idProduit",$id);
            $this->db->update("panier",$data);
        }
        function get_destinations(){
            $query = $this->db->get("livraison");
            return $query->result_array();
        }

        
    }