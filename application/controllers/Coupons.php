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
    function updateCoupon()
    {
        $this->coupons_model->update_coupon();
    }
    function useCoupons()
    {
        $query = $this->coupons_model->use_coupons();
        if ($query === false) {
            $this->session->set_flashdata("coupons_expire", "Le coupon " . $query["couponsCle"] . " a été expiré");
            redirect(base_url()."shop-checkout");
        } else {
            $this->session->set_flashdata("coupons_applique", "Le coupon " . $query["couponsCle"] . " est appliqué avec succée");
            // $data["coupon"] = $query;
            // $data["panier"] = $this->cart_model->get_cart();
            // $data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
            // $data["destinations"] = $this->cart_model->get_destinations();
            // $data['women_categories'] = $this->category_model->get_women_categories();
            // $data["user_info"] = $this->users_model->get_current_user($this->session->userdata("userId"));
            // $data["contact"] = $this->contact_model->get_contact();
            redirect(base_url()."shop-checkout");
            // $this->load->view("templates_site/header", $data);
            // $this->load->view("shop-checkout", $data);
            // $this->load->view("templates_site/footer");
        }
    }
    function updateCollab()
    {
        $this->coupons_model->update_collab();
        redirect(base_url() . "collab");
    }
    function approveCollab($id)
    {
        $this->coupons_model->approve_collab($id);
        redirect(base_url() . "dashboard/ecommerce_collab");
    }
    function deleteCollab($id)
    {
        $this->coupons_model->delete_collab($id);
        redirect(base_url() . "dashboard/ecommerce_collab");
    }

    function expireCoupons($id){
        $this->coupons_model->expire_coupons($id);
        redirect(base_url()."dashboard/ecommerce_coupons_list");
    }
}
