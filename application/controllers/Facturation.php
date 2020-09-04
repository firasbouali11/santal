<?php 
defined('BASEPATH') or exit('No direct script access allowed');

    class Facturation extends CI_Controller{

        function addFacturation(){
            $this->facturation_model->add_facturation();
            $this->coupons_model->update_coupon();
            $this->cart_model->clear_panier();
            $this->session->set_flashdata("success_sale", "Votre commande a été bien passé");
            redirect("");
        }

        function deleteFacturation(){
            $this->facturation_model->delete_facturation();
            redirect(base_url("dashboard/ecommerce_orders_list"));
        }
    }
