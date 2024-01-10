<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['judul'] =  "Halaman Admin";
    $data['admin'] = $this->Admin_model->get();
    $this->load->view("layout/header");
    $this->load->view("admin/vw_admin", $data);
    $this->load->view("layout/footer");
  }
  public function delete($id)
  {
      $this->db->where($this->id, $id);
      $this->db->delete($this->table);
      return $this->db->affected_rows();
  }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */