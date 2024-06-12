<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_Model extends CI_Model
{
    public $table = 'detail_pesanan';
    public $id = 'detail_pesanan.id';

    public function __construct()
    {
        parent::__construct();
    }
    // public function get()
    // {
    //     $this->db->select('k.*,s.nama as nama, s.harga as harga');
    //     $this->db->from('keranjang k');
    //     $this->db->join('sembako s', 'k.id_buku = s.id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function getById($id)
    {
        $this->db->select('dp.*,r.nama as nama, p.nama as pakaian');
        $this->db->from('detail_pesanan dp');
        $this->db->join('user r', 'dp.id_user = r.id');
        $this->db->join('pakaian p', 'dp.id_pakaian = p.id');
        $this->db->where('dp.id_pesanan', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByUser($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->select('dp.*,p.nama as nama_pakaian');
        $this->db->from('detail_pesanan dp');
        $this->db->join('pakaian p', 'dp.id_pakaian = p.id');
        $this->db->where('dp.id', $id, 'AND dp.id_user=' . $idu);
        $this->db->where('dp.id_user' . $idu);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }
    // function charts()
    // {
    //     $this->db->select('d.*, s.nama as sembako, sum(d.jumlah) as jum');
    //     $this->db->from('detail_penjualan d');
    //     $this->db->join('sembako s', 'd.id_sembako = s.id');
    //     $this->db->group_by('d.id_sembako');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
}
