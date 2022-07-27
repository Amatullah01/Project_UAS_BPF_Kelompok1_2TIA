<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Penjualan_Model');
    }

    public function index()
    {
        //$data['judul'] = "Halaman Data Pakaian";
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['pakaian'] = $this->Penjualan_Model->get();
        //$this->load->view("layout/header", $data);
        //$this->load->view("pakaian/vw_pakaian", $data);
        //$this->load->view("layout/footer", $data);
            $data['judul'] = "Halaman Data Penjualan";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['penjualan'] = $this->Penjualan_Model->get();
            $this->load->view("layout/header", $data);
            $this->load->view("penjualan/vw_penjualan", $data);
            $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pakaian";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Pakaian'] = $this->Penjualan_Model->get();
        $this->form_validation->set_rules('nama', 'Nama Pakaian', 'required', ['required' => 'Nama Pakaian Wajib di isi']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok Pakaian Wajib di isi']);
        $this->form_validation->set_rules('size', 'Size', 'required', ['required' => 'Size Wajib di isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Wajib di isi']);
        $this->form_validation->set_rules('detail', 'Detail', 'required', ['required' => 'Detail Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("penjualan/vw_tambah_penjualan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'size' => $this->input->post('size'),
                'harga' => $this->input->post('harga'),
                'detail' => $this->input->post('detail'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/pakaian/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Penjualan_Model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pakaian Berhasil Ditambah!</div>');
            redirect('Pakaian/?role=Admin');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit penjualan";
        $data['editpenjualan'] = $this->Penjualan_Model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'status', 'required', ['required' => 'Status Pakaian Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("penjualan/vw_ubah_penjualan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'total_bayar' => $this->input->post('total_bayar'),
                'tanggal' => $this->input->post('tanggal'),
                'alamat' => $this->input->post('alamat'),
                'pembayaran' => $this->input->post('pembayaran'),
                'keterangan' => $this->input->post('keterangan'),
                'status' => $this->input->post('status'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/checkout/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['penjualan']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/checkout/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Penjualan_Model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Penjualan Berhasil Di Ubah !</div>');
            redirect('Penjualan/');
        }
    }

    public function hapus($id)
    {
        $this->Penjualan_Model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Penjualan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fa fa-check-square"></i> Data Penjualan Berhasil Dihapus!</div>');
        }
        redirect('Penjualan/');
    }
}