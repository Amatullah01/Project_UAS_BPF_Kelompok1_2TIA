<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pakaian_Model');
        $this->load->model('User_Model');
        $this->load->model('keranjang');
        $this->load->model('Pemesanan_Model');
   
    }
    public function index(){
        $data['judul'] = "Halaman Data Pakaian";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
        $iduser;
        foreach($user as $a){
            $iduser = $a['id'];
        }
        

        $data['keranjang'] = $this->keranjang->pakaian($iduser);
    
        $this->load->view("layout/header", $data);
        $this->load->view("keranjang", $data);
        $this->load->view("layout/footer", $data);
    }
    public function pesan($idPakaian){
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
        $pakaian = $this->Pakaian_Model->getById($idPakaian);
        $id;
        $idPakaian;
        foreach($user as $a){
            $id= $a['id'];
        }
        foreach($pakaian as $a){
            $idPakaian = $a['id'];
        }
        $data = [
            'id_user' => $id,
            'id_pakaian' => $idPakaian
        ];
        $this->db->query("UPDATE pakaian SET stok = stok - 1 WHERE id =".$idPakaian);  

        $this->keranjang->insert($data);
        redirect('pemesanan');
    }
    public function hapus($id){
       
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
        $iduser;
        foreach($user as $a){
            $iduser = $a['id'];
        }
        $this->db->query("UPDATE pakaian SET stok = stok + 1 WHERE id =".$id);  
        $this->keranjang->delete($iduser,$id);
        redirect('pemesanan');
       
    }
    public function checkout(){
        $data['judul'] = "Halaman Data Pakaian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
        $iduser;
        foreach($user as $a){
            $iduser = $a['id'];
        }
        $data['keranjang'] = $this->keranjang->getbyuser($iduser);

        $this->load->view("layout/header", $data);
        $this->load->view("checkout",$data);
        $this->load->view("layout/footer", $data);
    }
    public function konfirmasi(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
        $iduser;
        foreach($user as $a){
            $iduser = $a['id'];
        }
        $data = [
            'id_user' => $iduser,
            'total_bayar' => $this->input->post('bayar'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
            'gambar' =>  $_FILES['gambar']['name']
        ];
        var_dump($data);
        $this->db->insert('pesanan', $data); 
        $this->keranjang->delete($iduser);
      
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/checkout/';
            $this->load->library('upload', $config);
           
        
    
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pakaian Berhasil Ditambah!</div>');
        redirect('Pakaian');
    }

}
?>