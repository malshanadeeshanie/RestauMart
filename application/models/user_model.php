<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function create_user($data1,$data2)
    {
        $this->db->trans_start();

        $sql1 = "INSERT INTO tbl_user(firstname, lastname, address, email, contactnumber)
            VALUES (?, ?, ?, ?, ?)";
        $this->db->query($sql1, $data1);

        $id_user = $this->db->insert_id(); 

        $sql2 = "INSERT INTO tbl_pass(userID, username, password) 
            VALUES ($id_user, ?, ?)";
        $this->db->query($sql2, $data2);

         $this->db->trans_complete();
         $id_user = $this->db->insert_id();    
        //$this->db->insert('tbl_user',$data);
    }



    function login($username,$password)
    {
        $where=array(
            'username'=>$username,
            'password'=>md5($password)
        );
        $this->db->select()->from('tbl_pass')->where($where) ;
        $query = $this->db->get();
        return $query->first_row('array');
    }

}