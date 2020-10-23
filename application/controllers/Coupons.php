<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coupons extends CI_Controller
{
    function addCoupons()
    {
        $this->coupons_model->add_coupons();
        redirect(base_url() . "dashboard/ecommerce_coupons_list");
    }
    function deleteCoupons($id)
    {
        $this->coupons_model->delete_coupons($id);
    }
    function updateCoupon(){
        $this->coupons_model->update_coupon();
    }
    function useCoupons()
    {
        $query = $this->coupons_model->use_coupons();
        if ($query == false)
            echo "coupon est expiré";
        else{
            $this->session->set_flashdata("coupons_applique", "Le coupons ".$query["couponsCle"]." est appliqué avec succée");
            $data["coupon"] = $query;
            $data["panier"] = $this->cart_model->get_cart();
			$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
            $data["destinations"] = $this->cart_model->get_destinations();
            $data['women_categories'] = $this->category_model->get_women_categories();
			$this->load->view("templates_site/header",$data);
			$this->load->view("shop-checkout", $data);
			$this->load->view("templates_site/footer");

            // $data["coupon"] = $query;
            // $data['women_categories'] = $this->category_model->get_women_categories();
            // $data["panier"] = $this->cart_model->get_cart();
			// $data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
			// $data["destinations"] = $this->cart_model->get_destinations();
            // $this->load->view("templates_site/header",$data);
			// $this->load->view("shop-checkout", $data);
            // $this->load->view("templates_site/footer");
        }
    }
    function updateCollab(){
        $this->coupons_model->update_collab();
        redirect(base_url()."collab");
    }
}
