<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function create_user($data)
    {
        $this->db->insert('tbl_user',$data);
    }

    function login($username,$password)
    {
        $where=array(
            'username'=>$username,
            'password'=>md5($password)
        );
        $this->db->select()->from('tbl_user')->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

}