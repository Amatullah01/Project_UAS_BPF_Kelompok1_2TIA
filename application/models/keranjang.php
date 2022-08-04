<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keranjang extends CI_Model 
{
    public $table = 'keranjang';
    public $id = 'keranjang.id';
	public function _construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get(); 
        return $query->result_array();
    }
    public function getbyuser($id){
        $query = $this->db->query("SELECT pakaian.* FROM keranjang,pakaian WHERE keranjang.id_pakaian = pakaian.id AND keranjang.id_user = ".$id);
        return $query->result_array();
    }
    public function getBy($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
      
    }
    public function delete($id)
    {
        $this->db->where('id_user', $id);
       
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }   
    public function tuser()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
    public function pakaian($id){
        $query =$this->db->query("SELECT pakaian.* ,keranjang.id_keranjang from pakaian, keranjang where pakaian.id = keranjang.id_pakaian and keranjang.id_user =". $id);
        return $query->result_array();
    }
}
