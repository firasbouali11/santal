<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    function addComments($id)
    {

        $this->form_validation->set_rules("name", "name", "required");
        $this->form_validation->set_rules("email", "email", "required|valid_email");
        $this->form_validation->set_rules("rating", "rating", "required");
        $this->form_validation->set_rules("review", "review", "required");

        if ($this->form_validation->run()) {
            $this->product_model->add_comments($id);
            $this->session->set_flashdata("comment_sent", "votre commentaire a été envoyé avec succée");
            redirect(base_url() . "produits/$id");
        } else {
            $this->session->set_flashdata("comment_not_sent", "Les champs ne sont pas remplis ou le champ email n'est pas valide");
            redirect(base_url() . "produits/$id");
        }
    }

    function approveComment(){
        $id = $this->input->post("id");
        echo $id;
        $this->product_model->approve_comment($id);
    }
    function deleteComment(){
        $id = $this->input->post("id");
        echo $id;
        $this->product_model->delete_comment($id);
    }

    function addProduct()
    {
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        $images = "";

        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            $config['upload_path'] = "./assets/img/products/";
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 1000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                // $images = $_FILES["userfile"]["name"];
                $images .= $this->upload->data("file_name");
                if($i != $cpt-1) $images.=":";
            }
        }
        $this->product_model->add_product($images);

        redirect("/dashboard/ecommerce_products_list");
    }

    function deleteProduct($id)
    {
        $this->product_model->delete_product($id);
        redirect("/dashboard/ecommerce_products_list");
    }

    function editProduct($id)
    {
        $images = $this->input->post("imagess");
        $this->product_model->edit_product($id, $images);
        redirect("/dashboard/ecommerce_products_list");
    }

    function searchProduct(){
        $search = $this->input->post("search");
        // print_r($pro);
        $data['men_categories'] = $this->category_model->get_men_categories();
		$data['women_categories'] = $this->category_model->get_women_categories();
		$data['men_products'] = $this->product_model->search_product($search);
		$data["panier"] = $this->cart_model->get_cart();
        $data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
        $data["contact"] = $this->contact_model->get_contact();
        $data["user_info"] = $this->users_model->get_current_user($this->session->userdata("userId"));

        $this->load->view("produits",$data);
    }

    function updatePlan(){
        $config["upload_path"] = './assets/img/shop/';
        $config["allowed_types"] = "gif|png|jpg";
        $config["max_size"] = "204800";
        $config["max_width"] = "500000";
        $config["max_height"] = "500000";
        $this->load->library("upload",$config);
        if(!$this->upload->do_upload()){
            $errors = array("error" => $this->upload->display_errors());
        }else{
            $data = array("upload_data" => $this->upload->data());
            $cover = $_FILES["userfile"]["name"];
        }
        $backup =  $this->input->post("update_cover");

        if($cover) 
            $this->product_model->update_plan($cover);
        else
            $this->product_model->update_plan($backup);
        redirect(base_url()."dashboard/ecommerce_products_list");
    }
}
