<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function register()
    {
        $this->form_validation->set_rules("name", "name", "required");
        $this->form_validation->set_rules("email", "email", "required|valid_email|callback_check_email");
        $this->form_validation->set_rules("username", "username", "required|callback_check_username");
        $this->form_validation->set_rules("password", "password", "required|min_length[6]|max_length[16]|alpha_numeric");
        $this->form_validation->set_rules("password2", "confirmation password", "matches[password]");
        $this->form_validation->set_rules("phone", "phone number", "required");

        if ($this->form_validation->run()) {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $username = $this->input->post("username");
            $phone = $this->input->post("phone");
            $encPassword = md5($this->input->post("password"));
            $verification_key = md5(rand());
            $data = array(
                "name" => $name,
                "email" => $email,
                "username" => $username,
                "password" => $encPassword,
                "phone" => $phone,
                "verification_key" => $verification_key,
            );
            $this->users_model->register_user($data);


            $this->load->library('email');

            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html';

            $this->email->initialize($config);

            $subject = "please verify email for login";
            $message = "
				<p>Hi" . $this->input->post('name') . "</p>
				<p>This is email verification.For complete registration process and login to system, first you want to click this <a href='".base_url()."users/verify_email/". $verification_key."'> link </a>.</p>
				<p>Once you click this link your email will be verified and you can login in to system.</p>
				<p>Thanks</p>";

            $this->email->from("santal.project10@gmail.com");
            $this->email->to($email);

            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                $this->session->set_flashdata("user_registred", "L'inscription a été effectué avec succée. Veuillez Verifier votre compte en clickant sur le lien envoyé par mail $email");
            } else {
                $this->session->set_flashdata("user_registred", "Une erreur a occuré pendant l'envoi de votre mail de vérification.");
            }
            redirect("shop-login");
        } else {
            $data["panier"] = $this->cart_model->get_cart();
            $data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
            $data['women_categories'] = $this->category_model->get_women_categories();
            $this->load->view("templates_site/header",$data);
            $this->load->view("shop-login");
            $this->load->view("templates_site/footer");
        }
    }

    public function verify_email($verification_key){
        if($verification_key){
            if($this->users_model->verify_email($verification_key)){
                echo "votre compte est bien verifée, vous pouvez vous connecter maintenant <br> redirection vers la page login ... ";
                echo "<script>
                        function redirect(){
                            setTimeout(()=>{window.location.replace('".base_url()."shop-login')},3000)
                        }
                        redirect()
                    </script>";
                // redirect(base_url()."shop-login");
            }
            else{
                echo "le lien est Invalide";
            }
        }
    }

    function login()
    {

        $this->form_validation->set_rules("email_login", "email", "required");
        $this->form_validation->set_rules("password_login", "password", "required");

        if ($this->form_validation->run()) {
            $email = $this->input->post("email_login");
            $password = md5($this->input->post("password_login"));
            $userId = $this->users_model->login_user($email, $password);

            if ($userId) {
                $userData = array(
                    "logged_in" => true,
                    "userId" => $userId,
                    "email" => $email,
                );

                $this->session->set_userdata($userData);
                $this->session->set_flashdata("user_in", "Vous avez connecté avec succée. Bienvenu $email");
                redirect("");
            } else {
                $this->session->set_flashdata("user_failed", "La combinaison email/mot de passe est incorrecte");
                redirect("shop-login");
            }
        } else {
            $this->load->view("templates_site/header");
            $this->load->view("shop-login");
            $this->load->view("templates_site/footer");
        }
    }
    function logout()
    {
        $this->session->unset_userdata("logged_in");
        $this->session->unset_userdata("userId");
        $this->session->unset_userdata("email");

        $this->session->set_flashdata("user_out", "Vous etes déconnecté");
    }

    // form_validation callbacks
    function check_email($email)
    {
        $this->form_validation->set_message("check_email", "L'email que vous avez saisie existe déjà");
        return $this->users_model->check_email_exists($email);
    }
    function check_username($username)
    {
        $this->form_validation->set_message("check_username", "Le nom d'utilisateur que vous avez saisie existe déjà");
        return $this->users_model->check_username_exists($username);
    }

    // -------------------------


    // Edit user info
    function edit()
    {
        // check login
        $id = $this->session->userdata("userId");

        $this->form_validation->set_rules("name", "name", "required");
        $this->form_validation->set_rules("email", "email", "required|valid_email|callback_check_email_twice");
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run()) {
            $this->users_model->update_user($id);
            // Set message
            $this->session->set_flashdata('user_updated', 'Compte mis à jour avec succès!');
            redirect(base_url()."user-dashboard");
        } else {
            $this->session->set_flashdata('user_failed', 'Mise à jour échouée! Email existant.');
            redirect(base_url()."user-dashboard");
        }
    }

    // email_check_twice_validation callbacks

    function check_email_twice($email, $id)
    {
        $this->form_validation->set_message("check_email", "L'email que vous avez saisie existe déjà");
        return $this->users_model->check_email_exists_twice($email, $id);
    }

    // password_validation callbacks
    function check_password($oldpassword)
    {
        $enc_password = md5($oldpassword);
        $id = $this->session->userdata("userId");
        $this->form_validation->set_message("check_password", "Mot de passe actuel incorrect!");
        return $this->users_model->check_current_password($id, $enc_password);
    }

    // Edit user password
    function edit_pass()
    {
        // check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $id = $this->session->userdata("userId");

        $this->load->library('form_validation');

        $this->form_validation->set_rules("oldpassword", "oldpassword", "required|callback_check_password");
        $this->form_validation->set_rules("password", "password", "required");
        $this->form_validation->set_rules("password2", "confirmation password", "required|matches[password]");

        if ($this->form_validation->run()) {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));
            $this->users_model->update_password($id, $enc_password);
            // Set message
            $this->session->set_flashdata('password_updated', 'Mot de passe mis à jour avec succès!');
            redirect('');
        } else {
            $this->session->set_flashdata('password_failed', 'Mise à jour du mot de passe échouée!');
            redirect('');
        }
    }

    function deleteUser(){
        $id = $this->input->post("id");
        $this->users_model->delete_user($id);
    }

}
