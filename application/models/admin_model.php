<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function get_details($num=1000,$start=0){
		$this->db->select('userID,firstname,lastname,address,email,contactnumber,active,date_added')->from('tbl_user')->where('active',1)->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();
	}

	function get_resdetails($num=1000,$start=0){
		$this->db->select('managerID,firstname,lastname,address,email,contactnumber,Res_Name,Res_Address,Res_Email,Res_Contact,Zip,City,State,active,date_added')->from('tbl_manager')->where('active',1)->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();
	}

}
