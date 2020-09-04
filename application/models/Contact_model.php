<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{

    function add_testimony(){
        $content = $this->input->post("content");
        $idClient = $this->session->userdata("userId");

        $data = array(
            "content" => $content,
            "idClient" => $idClient,
        );
        return $this->db->insert("temoignages",$data);
    }

    function get_testimonies(){
        $this->db->join("user","user.id = temoignages.idClient");
        $query = $this->db->get_where("temoignages",array("approval"=>1));
        return $query->result_array();
    }
    function get_all_testimonies(){
        $this->db->join("user","user.id = temoignages.idClient");
        $query = $this->db->get("temoignages");
        return $query->result_array();
    }

    function approve_testimonies($id){
        $data= array(
            "approval" => 1,
        );
        $this->db->where("content",$id);
        $this->db->update("temoignages",$data);
        return true;
    }
    function delete_testimonies($id){

        $this->db->where("content",$id);
        $this->db->delete("temoignages");
        return true;
    }

}