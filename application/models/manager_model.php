<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends CI_Model {

	function create_user($data1,$data2)
    {
        $this->db->trans_start();

        $sql1 = "INSERT INTO tbl_manager(Res_Name, Res_Address, Res_Email, Res_Contact, Zip, City, State, firstname, lastname, address, email, contactnumber)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql1, $data1);

        $id_user = $this->db->insert_id(); 

        $sql2 = "INSERT INTO tbl_pass(userID, username, password) 
            VALUES ($id_user, ?, ?)";
        $this->db->query($sql2, $data2);

         $this->db->trans_complete();
         $id_user = $this->db->insert_id();    
        //$this->db->insert('tbl_user',$data);
    }

	function view_restaurants()
	{
		//data is retrive from this query  
         $query = $this->db->get('tbl_manager');  
         return $query; 
	}
}