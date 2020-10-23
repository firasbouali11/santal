<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coupons_model extends CI_Model
{

    function get_coupons()
    {
        $query = $this->db->get("coupons");
        return $query->result_array();
    }

    function add_coupons()
    {
        $insta = $this->input->post("insta");
        $code = $this->input->post("code");
        $reduction = $this->input->post("reduction");
        $expiration = $this->input->post("expiration");


        $data = array(
            "insta" => $insta,
            "couponsCle" => $code,
            "reduction" => $reduction,
            "expiration" => $expiration,

        );
        return $this->db->insert("coupons", $data);
    }
    function delete_coupons($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("coupons");
        // return true;
    }

    function use_coupons()
    {
        $cp = $this->input->post("coupon");
        $query = $this->db->get_where("coupons", array("couponsCle" => $cp))->row_array();
        // return  $query["expiration"] > Date("Y-m-d");
        if ($query["expiration"] < Date("Y-m-d")  || $query["expired"] == 1) {
            $data = array(
                "expired" => 1,
            );
            $this->db->where("id", $query["id"]);
            $this->db->update("coupons", $data);
            return false;
        } else {

            return $query;
        }
    }

    function coupons_owner(){
        $this->db->where("insta",$this->session->userdata("userId"));
        $query = $this->db->get("coupons");
        return $query->row_array();
    }

    function get_coupons_owners(){
        $this->db->join("user","user.id = coupons.insta");
        $query = $this->db->get("coupons");
        return $query->result_array();
    }

    function update_coupon()
    {
        $coupon = $this->input->post("couponn");
        $query = $this->db->get_where("coupons", array("couponsCle" => $coupon))->row_array();
        $x = $query["used"] + 1;
        $data = array(
            "used" => $x,
        );
        $this->db->where("id", $query["id"]);
        $this->db->update("coupons", $data);
    }

    function update_collab(){
        $lien_fb = $this->input->post("lien_fb");
        $lien_insta = $this->input->post("lien_insta");

        $data = array(
            "lien_fb" => $lien_fb,
            "lien_insta" => $lien_insta,
        );
        $this->db->where("id",$this->session->userdata("userId"));
        $this->db->update("user",$data);
    }
}
