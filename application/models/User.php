<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{
    function __construct()
	{
	   parent::__construct();
	   $this->load->database();
	}	

    public function get_login_info($username)
    {
        /*
            SELECT * FROM user WHERE username = ?;
        */
        $this->db->where('username',$username);
        $hasil = $this->db->get('user');

        return $hasil->result_array();
    }
}