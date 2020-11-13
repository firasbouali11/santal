<?php 
defined('BASEPATH') or exit('No direct script access allowed');

    class Cart extends CI_Controller{

        function addToCart($id){
            $this->cart_model->add_to_cart($id);
            echo $id;
        }

        function deleteFromCart($id){
            $this->cart_model->delete_product($id);
            echo "ok";
        }

        function addSingleToCart($id){
            $this->cart_model->add_single_product_to_cart($id);
            redirect(base_url()."produits/$id");
        }

        function updateCart(){
            $this->cart_model->update_cart();
            echo "ok";
        }

        function updateLivraison(){
            $price = $this->input->post("destination");
            echo $price;
        }
    }

?>