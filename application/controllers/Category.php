<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    function addCategory(){
        $this->category_model->create_category();
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