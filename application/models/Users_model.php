<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    function register_user($data)
    {
        return $this->db->insert("user", $data);
    }

    function login_user($email, $password)
    {
        if (strpos($email, "@") !== false)
            $this->db->where("email", $email);
        else
            $this->db->where("username", $email);
        $this->db->where("password", $password);
        $this->db->where("is_email_verified", "yes");

        $query = $this->db->get("user");
        if ($query->num_rows() == 1) {
            return $query->row(0)->id;
        } else {
            return false;
        }
    }

    function login_admin($email, $password)
    {
        if (strpos($email, "@") !== false)
            $this->db->where("email", $email);
        else
            $this->db->where("username", $email);
        $this->db->where("password", $password);

        $query = $this->db->get("admin");
        if ($query->num_rows() == 1) {
            return $query->row(0)->id;
        } else {
            return false;
        }
    }

    public function verify_email($key)
    {
        $this->db->where('verification_key', $key);
        $this->db->where('is_email_verified', 'no');
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $data = array(
                'is_email_verified' => 'yes'
            );
            $this->db->where('verification_key', $key);
            $this->db->update('user', $data);
            return true;
        } else {
            return false;
        }
    }

    function check_username_exists($username)
    {
        $query = $this->db->get_where("user", array("username" => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
    function check_email_exists($email)
    {
        $query = $this->db->get_where("user", array("email" => $email));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    function get_client_sum($id)
    {
        $this->update_sum_cart();
        $this->db->where("id", $id);
        $query = $this->db->get("user");
        if ($query->num_rows() == 1) {
            return $query->row(0)->cartSum;
        } else {
            return false;
        }
    }

    function update_sum_cart()
    {
        $products = $this->cart_model->get_cart();
        $sum = 0;
        foreach ($products as $product) {
            $sum += $product["price"] * $product["nbrProduit"];
        }
        $data = array("sumCart" => $sum);
        $this->db->where("id", $this->session->userdata("userId"));
        $this->db->update("user", array("cartSum" => $sum));
    }

    function check_email_exists_twice($email, $id)
    {
        $this->db->where('user.id !=', $id);
        $this->db->where('email', $email);
        $query = $this->db->get("user");

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    public function get_current_user($id)
    {

        $this->db->where('id', $id);

        $query = $this->db->get("user");

        return $query->result();
    }

    // Update user info
    public function update_user($id)
    {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        );

        // Update user
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        return true;
    }

    function check_current_password($id, $enc_password)
    {
        $this->db->where('id', $id);
        $this->db->where('password', $enc_password);
        $query = $this->db->get('user');

        if (empty($query->row_array())) {
            return false;
        } else {
            return true;
        }
    }

    function check_current_password_admin($id, $enc_password)
    {
        $this->db->where('id', $id);
        $this->db->where('password', $enc_password);
        $query = $this->db->get('admin');

        if (empty($query->row_array())) {
            return false;
        } else {
            return true;
        }
    }

    //update password
    public function update_password($id, $enc_password)
    {
        $data = array(
            'password' => $enc_password
        );

        // Update user
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        return true;
    }
    public function update_password_admin($id, $enc_password)
    {
        $data = array(
            'password' => $enc_password
        );

        // Update user
        $this->db->where('id', $id);
        $this->db->update('admin', $data);

        return true;
    }
    public function get_user_orders($id)
    {

        $this->db->order_by('facturation.created', 'DESC');
        $this->db->where('idClient', $id);
        $query = $this->db->get('facturation');

        return $query->result();
    }

    public function get_users(){
        $query = $this->db->get("user");
        return $query->result_array();
    }

    function delete_user($id){
        $this->db->where("id",$id);
        $this->db->delete("user");
        return true;
    }
}
