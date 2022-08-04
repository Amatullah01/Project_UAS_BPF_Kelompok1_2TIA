<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Penjualan_Model');
        $this->load->model('Detail_Model');
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

    function detail()
    {
        $id = $_GET['id'];
		$data['judul'] = "Halaman Detail Pembelian User";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pembelian'] = $this->Penjualan_Model->getById2($id);
		$this->load->view("layout/header", $data);
		$this->load->view("profil/detail_beli", $data);
		$this->load->view("layout/footer", $data);
    }

    function detail_admin()
    {
        $id = $_GET['id'];
		$data['judul'] = "Halaman Detail Pembelian User";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['penjualan'] = $this->Penjualan_Model->getById2($id);
        $data['detail'] = $this->Detail_Model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("penjualan/vw_detail_penjualan", $data);
		$this->load->view("layout/footer", $data);
    }


    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Penjualan_Model->get();
        $this->data['title'] = 'Laporan Data Penjualan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('penjualan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}