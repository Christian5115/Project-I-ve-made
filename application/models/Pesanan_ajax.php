<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesanan_ajax extends CI_Model{

    private $table = 'pemesanan';
    private $column_search = array('nama' , 'metode', 'alamat','notelp', 'tgl_peng', 'roti1', 'roti2','roti3','roti4','roti5');
    private $column_order = array(null,'nama' , 'metode', 'alamat','notelp', 'tgl_peng', 'roti1', 'roti2','roti3','roti4','roti5', null);
    private $order = array('nama' => 'asc');
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_query(){
        $this->db->select('*');
        $this->db->from($this->table);

        $i = 0;

        foreach($column_search as $item)
        {
            if($i == 0)
            {
                $this->db->group_start();
                $this->db->like($item, $_POST['search']['value']);
            }
            else
            {
                $this->db->like($item,$_POST['search']['value']);
            }
            /*if(count($column_search) == $1){
                $this->db->group_end();
            $i++;
            */} 
        }

        if($isset($_POST['order']))
        {
            $this->db->order_by($this->column_order)[$_POST['order']['0']['column']], $_POST['order']['0']['column'];

        }
        else if(isset($this->order))
        {
            $this->db->order_by(key($this->order), this->db->order[key($this->order)]);
        }

    }

    public function get_datatables()
    {
        $this->get_query();

        if($_POST['length'] != -1) $this->db->limit($_POST['length'], $_POST['start']);
    
        $result = $this->db->get();

        return $return -> result();

    }
    public function count_all()
    {
        $this->db->get($this->table);

        return $this->db->count_all_result();
    }
    public function count_filtered()
    {
        $this->get_query();
        $result = $this ->db->get();

        return result ->num_rows();
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
        if(!empty($data['nama']))$this->db->set('nama', $data['nama']);
        if(!empty($data['metode']))$this->db->set('metode', $data['metode']);
        if(!empty($data['tgl_peng']))$this->db->set('tgl_peng', $data['tgl_peng']);
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