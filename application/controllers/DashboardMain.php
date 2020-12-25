<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardMain extends CI_Controller
{

	function product($id)
	{
		if (!file_exists(APPPATH . "views/dashboard/ecommerce_edit_product.php")) {
			show_404();
		}
		$data['sum'] = $this->facturation_model->get_total_ammount();
		$data["product"] = $this->product_model->get_single_product($id);
		$data['women_categories'] = $this->category_model->get_women_categories();
		$data['men_categories'] = $this->category_model->get_men_categories();
		// $data["comments"] = $this->product_model->get_comments($id);
		// $data['women_categories'] = $this->category_model->get_women_categories();
		// $data["panier"] = $this->cart_model->get_cart();
		// $data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
		$this->load->view("dashboard/header",$data);
		$this->load->view("dashboard/ecommerce_edit_product", $data);
		$this->load->view("dashboard/footer");
	}

	function admin()
	{
		if($this->session->userdata("admin_in")){
			redirect(base_url("dashboard/dashboard_ecommerce"));
		}
		$this->load->view("dashboard/login-4");
	}

	public function home($page)
	{

		if (!file_exists(APPPATH . "views/dashboard/$page.php")) {
			show_404();
		}
		if($this->session->userdata("admin_in") == false){
			redirect(base_url("dashboard/admin"));
		}
		if ($page != "admin") {
			$data['sum'] = $this->facturation_model->get_total_ammount();
			$data['facturations'] = $this->facturation_model->get_facturation();
			$data['women_categories'] = $this->category_model->get_women_categories();
			$data['men_categories'] = $this->category_model->get_men_categories();
			$data['all_products'] = $this->product_model->get_all_products();
			$data['users'] = $this->users_model->get_users();
			$data['coupons'] = $this->coupons_model->get_coupons();
			$data['comments'] = $this->product_model->get_all_comments();
			$data['plan'] = $this->product_model->get_good_plan();
			$data['popular_products'] = $this->product_model->get_popular_products();
			$data['best_products'] = $this->product_model->get_best_selling_products();
			$data["testimonies"] = $this->contact_model->get_all_testimonies();
			$data["m1"] = $this->facturation_model->get_revenue_by_date(1);
			$data["m2"] = $this->facturation_model->get_revenue_by_date(2);
			$data["m3"] = $this->facturation_model->get_revenue_by_date(3);
			$data["m4"] = $this->facturation_model->get_revenue_by_date(4);
			$data["m5"] = $this->facturation_model->get_revenue_by_date(5);
			$data["m6"] = $this->facturation_model->get_revenue_by_date(6);
			$data["m7"] = $this->facturation_model->get_revenue_by_date(7);
			$data["m8"] = $this->facturation_model->get_revenue_by_date(8);
			$data["m9"] = $this->facturation_model->get_revenue_by_date(9);
			$data["m10"] = $this->facturation_model->get_revenue_by_date(10);
			$data["m11"] = $this->facturation_model->get_revenue_by_date(11);
			$data["m12"] = $this->facturation_model->get_revenue_by_date(12);
			$data["num_homme"] = $this->facturation_model->get_num_product_homme();
			$data["num_femme"] = $this->facturation_model->get_num_product_femme();
			$data["contact"] = $this->contact_model->get_contact();
			$data["collabs"] = $this->coupons_model->get_collabs();
			$data["collabss"] = $this->coupons_model->get_coupons_owners();
			$data["regions"] = $this->facturation_model->get_facturation_by_region();
			$data["cr"] = $this->facturation_model->get_compare_and_reduction();

			$this->load->view("dashboard/header",$data);
			$this->load->view("dashboard/$page", $data);
			$this->load->view("dashboard/footer");
		}
	}
	function order_details($id){
		if (!file_exists(APPPATH . "views/dashboard/ecommerce_edit_product.php")) {
			show_404();
		}
		$data['sum'] = $this->facturation_model->get_total_ammount();
		$data["order"] = $this->facturation_model->get_order_details($id); 
		$data["panier"] = $this->facturation_model->get_order_panier($id); 
		$this->load->view("dashboard/header",$data);
		$this->load->view("dashboard/ecommerce_order_details",$data);
		$this->load->view("dashboard/footer");
	}
	function profile_collaborator($id){
		if (!file_exists(APPPATH . "views/dashboard/profile_collaborator.php")) {
			show_404();
		}
		$data['sum'] = $this->facturation_model->get_total_ammount();
		$data["profile"] = $this->coupons_model->get_collab($id);
		$data["coupons"] = $this->coupons_model->get_coupons_of_collab($id);
		$this->load->view("dashboard/header",$data);
		$this->load->view("dashboard/profile_collaborator",$data);
		$this->load->view("dashboard/footer");
	}
	function edit_category($id){
		if (!file_exists(APPPATH . "views/dashboard/ecommerce_edit_product.php")) {
			show_404();
		}
		$data['sum'] = $this->facturation_model->get_total_ammount();
		$data["category"] = $this->category_model->get_category($id);
		$this->load->view("dashboard/header",$data);
		$this->load->view("dashboard/ecommerce_edit_category",$data);
		$this->load->view("dashboard/footer");
	}
}
