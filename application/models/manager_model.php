<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends CI_Model {

	function create_user($data)
    {
        $this->db->insert('tbl_manager',$data);
    }

    function login($username,$password)
    {
        $where=array(
            'username'=>$username,
            'password'=>$password
        );
        $this->db->select()->from('tbl_manager')->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

}