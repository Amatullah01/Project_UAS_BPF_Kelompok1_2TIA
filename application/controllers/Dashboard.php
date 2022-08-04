<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Pakaian_Model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_Model');
        //$this->load->model('Detail_model');
    }
    function index()
    {
        // $data['judul'] = "Halaman Penjualan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pakaian'] = $this->Pakaian_Model->tpakaian();
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        //$data['totalb'] = $this->Detail_model->charts();
        $data['user1'] = $this->User_Model->tuser();
        $this->load->view("layout/header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/footer");
    }
}
