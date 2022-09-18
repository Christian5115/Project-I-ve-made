<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesanan extends CI_Model{

    private $table = 'pemesanan';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->where('nama', $data['nama']);
        $cek = $this->db->get($this->table)->result_array();

        if(count($cek) > 0) return true;
        else
        {
            $result = $this->db->insert($this->table, $data);

            return($result)? true:false;
        }
    }
    public function update($data)
    {
        if(!empty($data['notelp']))$this->db->set('notelp', $data['notelp']);
        if(!empty($data['metode']))$this->db->set('metode', $data['metode']);
        if(!empty($data['alamat']))$this->db->set('alamat', $data['alamat']);
        if(!empty($data['tgl_peng']))$this->db->set('tgl_peng', $data['tgl_peng']);
        if(!empty($data['roti1']))$this->db->set('roti1', $data['roti1']);
        if(!empty($data['roti2']))$this->db->set('roti2', $data['roti2']);
        if(!empty($data['roti3']))$this->db->set('roti3', $data['roti3']);
        if(!empty($data['roti4']))$this->db->set('roti4', $data['roti4']);
        if(!empty($data['roti5']))$this->db->set('roti5', $data['roti5']);

        $this->db->where('nama', $data['nama']);
        $result = $this->db->update($this->table);

        return($result)? true:false;
    }
    public function delete($nama)
    {
        $this->db->where('nama', $nama);
        $result = $this->db->delete($this->table);

        return($result)? true:false;
    }
    public function getAll()
    {
        $this->db->order_by('nama');
        $result = $this->db->get($this->table)->result_array();

        return $result;
    }
    public function getByNama($nama)
    {
        $this->db->where('nama', $nama);
        $result = $this->db->get($this->table)->result_array();

        return $result;
    }
}