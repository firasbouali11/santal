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


    function edit_pass()
    {
        // check login
        $id = $this->session->userdata("adminId");

        $this->load->library('form_validation');

        $this->form_validation->set_rules("oldpassword", "oldpassword", "required|callback_check_password");
        $this->form_validation->set_rules("password", "password", "required");
        $this->form_validation->set_rules("password2", "confirmation password", "required|matches[password]");

        if ($this->form_validation->run()) {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));
            $this->users_model->update_password_admin($id, $enc_password);
            // Set message
            $this->session->set_flashdata('password_updated_admin', 'Mot de passe mis à jour avec succès!');
            redirect('dashboard/settings');
        } else {
            $this->session->set_flashdata('password_failed_admin', 'Mise à jour du mot de passe échouée!');
            redirect('dashboard/settings');
        }
    }

    // password_validation callbacks
    function check_password($oldpassword)
    {
        $enc_password = md5($oldpassword);
        $id = $this->session->userdata("adminId");
        $this->form_validation->set_message("check_password_admin", "Mot de passe actuel incorrect!");
        return $this->users_model->check_current_password_admin($id, $enc_password);
    }

    function qui_sommes_nous(){
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        $images = "";

        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            $config['upload_path'] = "./assets/img/authors/";
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 1000000;
            $config['max_width'] = 102400;
            $config['max_height'] = 76800;
            echo $i;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                // $images = $_FILES["userfile"]["name"];
                $images .= $this->upload->data("file_name");
                if($i != $cpt-1) $images.=":";
            }
        }
        $this->users_model->update_societe($images);

        redirect("/dashboard/settings");
    }

    function update_compare_and_reduction(){
        $this->users_model->update_compare_and_reduction();
        redirect("/dashboard/settings");
    }
    

}