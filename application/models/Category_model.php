<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
  public function get_men_categories()
  {
    $this->db->order_by('nom_categorie');
    $this->db->where('categories.type = "homme"');
    $query = $this->db->get('categories');
    return $query->result();
  }

  public function get_women_categories()
  {
    $this->db->order_by('nom_categorie');
    $this->db->where('categories.type = "femme"');
    $query = $this->db->get('categories');
    return $query->result();
  }

  public function create_category($photo)
  {

    $data  = array(
      'nom_categorie' => $this->input->post('category'),
      'type' => $this->input->post('type'),
      "photo" => $photo
    );

    return $this->db->insert('categories', $data);
  }

  public function edit_category($id)
  {
    $data = array(
      'nom_categorie' => $this->input->post('category'),
      'type' =>$this->input->post('type')
    );
    $this->db->where('id', $id);
    $this->db->update('categories', $data);

    return true;
  }

  public function get_category($id)
  {
    $query = $this->db->get_where('categories', array('id' => $id));
    return $query->row();
  }

  public function get_products_by_categories($category_id)
  {
    $this->db->order_by('produits.category_id', 'DESC');
    $this->db->join('categories', 'categories.id = produits.category_id');
    $query = $this->db->get_where('produits', array('category_id' => $category_id));
    return $query->result();
  }

  public function delete_category($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('categories');
    return true;
  }
}
