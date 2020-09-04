<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		if (!file_exists(APPPATH . "views/Home.php")) {
			show_404();
		}
		$data['women_categories'] = $this->category_model->get_women_categories();
		$data['all_products'] = $this->product_model->get_all_products();
		$data['new_products'] = $this->product_model->get_new_products();
		$data['top_products'] = $this->product_model->get_top_rated_products();
		$data['popular_products'] = $this->product_model->get_popular_products();
		$data['best_products'] = $this->product_model->get_best_selling_products();
		$data["testimonies"] = $this->contact_model->get_testimonies();
		$data["panier"] = $this->cart_model->get_cart();
		$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
		$this->load->view("templates_site/header",$data);
		$this->load->view('Home', $data);
		$this->load->view("templates_site/footer");
	}

	public function page($page)
	{

		if (!file_exists(APPPATH . "views/$page.php")) {
			show_404();
		}
		if ($page === "produits") {
			$data['men_categories'] = $this->category_model->get_men_categories();
			$data['women_categories'] = $this->category_model->get_women_categories();
			$data['men_products'] = $this->product_model->get_men_products();
			$data["panier"] = $this->cart_model->get_cart();
			$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
			$this->load->view($page, $data);
		} else {
			if ($page === "user-dashboard" && !$this->session->userdata("logged_in")) {
				redirect(base_url());
			}else if($page === "user-dashboard" && $this->session->userdata("logged_in") ){
				$data["user_info"] = $this->users_model->get_current_user($this->session->userdata("userId"));
				$data["user_orders"] = $this->users_model->get_user_orders( $this->session->userdata("userId"));
			}
			$data["testimonies"] = $this->contact_model->get_testimonies();
			$data['women_categories'] = $this->category_model->get_women_categories();
			$data['all_products'] = $this->product_model->get_all_products();
			$data['new_products'] = $this->product_model->get_new_products();
			$data['top_products'] = $this->product_model->get_top_rated_products();
			$data['popular_products'] = $this->product_model->get_popular_products();
			$data['best_products'] = $this->product_model->get_best_selling_products();
			$data["panier"] = $this->cart_model->get_cart();
			$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
			$data["destinations"] = $this->cart_model->get_destinations();
			$this->load->view("templates_site/header",$data);
			$this->load->view($page, $data);
			$this->load->view("templates_site/footer");
		}
	}

	function single_product($id){
		$data["product"] = $this->product_model->get_single_product($id);
		$data["comments"] = $this->product_model->get_comments($id);
		$data['women_categories'] = $this->category_model->get_women_categories();
		$data["panier"] = $this->cart_model->get_cart();
		$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
		$this->load->view("templates_site/header",$data);
		$this->load->view("produit-detail", $data);
		$this->load->view("templates_site/footer");
	}


	function filtred(){
		$data['men_categories'] = $this->category_model->get_men_categories();
		$data['women_categories'] = $this->category_model->get_women_categories();
		$data['men_products'] = $this->product_model->get_filtred_products();
		$data["panier"] = $this->cart_model->get_cart();
		$data["sum"] = $this->users_model->get_client_sum($this->session->userdata("userId"));
		$this->load->view("produits",$data);
	}
}
