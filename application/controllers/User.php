<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model', 'userrole');
        $this->load->model('User_Model');
    }
    function index()
    {
        $data['judul'] = "Halaman Data User";
        $data['user'] = $this->userrole->getBy();
        $data['user1'] = $this->User_Model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_user", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user1'] = $this->User_Model->get();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('user/vw_tambah_user', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'admin.png',
                'role' => "Admin",
                'tgl_buat' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Admin Baru Berhasil Ditambahkan!</div>');
            redirect('User');
        }
    }
    function detail()
    {
        $id = $_GET['id'];
		$data['judul'] = "Halaman Detail User";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user1'] = $this->User_Model->getById2($id);
		$this->load->view("layout/header", $data);
		$this->load->view("user/vw_detail_user", $data);
		$this->load->view("layout/footer", $data);
    }
}