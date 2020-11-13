<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function loginAdmin()
    {

        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("password", "password", "required");

        if ($this->form_validation->run()) {
            $email = $this->input->post("email");
            $password = md5($this->input->post("password"));
            $adminId = $this->users_model->login_admin($email, $password);

            if ($adminId) {
                $adminData = array(
                    "admin_in" => true,
                    "adminId" => $adminId,
                    "emailAdmin" => $email,
                );

                $this->session->set_userdata($adminData);
                $this->session->set_flashdata("admin_success", "Vous avez connecté avec succée. Bienvenu $email");
                redirect(base_url()."dashboard/dashboard_ecommerce");
            } else {
                $this->session->set_flashdata("admin_failed", "La combinaison email/mot de passe est incorrecte");
                redirect(base_url()."dashboard/admin");
            }
        } else {
            $this->load->view("dashboard/login-4");
        }
    }
    function logoutAdmin()
    {
        $this->session->unset_userdata("admin_in");
        $this->session->unset_userdata("adminId");
        $this->session->unset_userdata("emailAdmin");

        $this->session->set_flashdata("admin_out", "Vous etes déconnecté");
    }

}