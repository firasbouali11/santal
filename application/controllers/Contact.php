<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    function sendEmail()
    {
        $this->form_validation->set_rules("name", "name", "required");
        $this->form_validation->set_rules("email", "email", "required|valid_email");
        $this->form_validation->set_rules("subject", "subject", "required");
        $this->form_validation->set_rules("message", "message", "required");

        if ($this->form_validation->run()) {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $subject = $this->input->post("subject");
            $message = $this->input->post("message");

            $this->load->library('email');

            $this->email->from($email);
            $this->email->to('firas.bouali11@gmail.com');

            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()){
                $this->session->set_flashdata("msg_sent","Votre message a été envoyé.");
                redirect("contact-us");
            }else{
                $this->session->set_flashdata("msg_not_sent","Une erreur a occuré pendant l'envoi de votre message.");
                redirect("contact-us");
            }

        }else{
            $data["user_info"] = $this->users_model->get_current_user($this->session->userdata("userId"));
			$data["testimonies"] = $this->contact_model->get_testimonies();
			$data['women_categories'] = $this->category_model->get_women_categories();
			$data['all_products'] = $this->product_model->get_all_products();
			$data['new_products'] = $this->product_model->get_new_products();
			$data['top_products'] = $this->product_model->get_top_rated_products();
			$data['popular_products'] = $this->product_model->get_popular_products();
			$data['best_products'] = $this->product_model->get_best_selling_products();
			$data["contact"] = $this->contact_model->get_contact();
			$data["panier"] = $this->cart_model->get_cart();
			$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
			$data["destinations"] = $this->cart_model->get_destinations();
            $this->load->view("templates_site/header",$data);
            $this->load->view("contact-us",$data);
            $this->load->view("templates_site/footer");
        }
    }

    function addTestimony(){
        $this->contact_model->add_testimony();
        $this->session->set_flashdata("testimony_sent","Votre message a été envoyé avec succée !");
        redirect("");
    }

    function approveTestimony(){
        $id = $this->input->post("id");
        $this->contact_model->approve_testimonies($id);
    }

    function deleteTestimony(){
        $id = $this->input->post("id");
        $this->contact_model->delete_testimonies($id);
    }

    function updateContact(){
        $this->contact_model->update_contact();
        redirect(base_url()."dashboard/settings");
    }
}
