<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

public function index()
	{

		// check login
		if(!$this->session->userdata('admin_in')){
			redirect('users/admin_login');
		  }
		$this->load->view('dashboard/index');
	}

	public function comments()
	{
		// check login
		if(!$this->session->userdata('admin_in')){
			redirect("admin-login");
		  }
		
		$this->load->model('Comment_model');

		$data['all_comments']=$this->Comment_model->get_all_comments();
		
		$this->load->view('dashboard/commentaires', $data);
    }

    public function approve_comment($id)
	{
		// check login
		if(!$this->session->userdata('admin_in')){
			redirect("admin-login");
		  }
		
		$this->load->model('Comment_model');

        $this->Comment_model->approve($id);

        // set Message
        $this->session->set_flashdata('comment_approved' ,'Commentaire approuvé avec succés!');
		
		$data['all_comments']=$this->Comment_model->get_all_comments();
		
		redirect("dashboard/comments", $data);
    }

    public function edit_comment($id)
	{
		// check login
		if(!$this->session->userdata('admin_in')){
			redirect("admin-login");
		  }
    
        $this->load->model('Comment_model');
  
        $this->form_validation->set_rules('rate','Rate','required|numeric|greater_than[0]');
        $this->form_validation->set_rules('content','Content','required');
    
        if($this->form_validation->run()){
    
            $this->Comment_model->edit($id);
            // set Message
            $this->session->set_flashdata('comment_updated' ,'Commentaire modifié avec succés!');
    
        }    
        $data['all_comments']=$this->Comment_model->get_all_comments();
    
        redirect("dashboard/comments", $data);
    }

    public function delete_comment($id)
	{
		// check login
		if(!$this->session->userdata('admin_in')){
			redirect("admin-login");
		  }
		
		$this->load->model('Comment_model');

        $this->Comment_model->delete($id);

        // set Message
        $this->session->set_flashdata('comment_deleted' ,'Commentaire supprimé avec succés!');
		
		$data['all_comments']=$this->Comment_model->get_all_comments();
		
		redirect("dashboard/comments", $data);
    }
}