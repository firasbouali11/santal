<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    function addCategory(){

        $config["upload_path"] = './assets/img/shop/';
        $config["allowed_types"] = "gif|png|jpg";
        $config["max_size"] = "204800";
        $config["max_width"] = "500000";
        $config["max_height"] = "500000";
        $this->load->library("upload",$config);
        if(!$this->upload->do_upload()){
            $errors = array("error" => $this->upload->display_errors());
            print_r($errors);
            return;
        }else{
            $data = array("upload_data" => $this->upload->data());
            $cover = $_FILES["userfile"]["name"];
            $this->category_model->create_category($cover);
        }   
        redirect(base_url()."dashboard/ecommerce_categories_list");
    }

    function deleteCategory($id){
        $this->category_model->delete_category($id);
        redirect(base_url()."dashboard/ecommerce_categories_list");
    }

    function editCategory($id){
        $this->category_model->edit_category($id);
        redirect(base_url()."dashboard/ecommerce_categories_list");

    }

}