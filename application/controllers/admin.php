<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function view_users(){
		$this->load->model('admin_model');
		$data['tbl_user']=$this->admin_model->get_details();

		$this->load->view('admin/admin_userdetails',$data);		
		$details=$data['tbl_user'];	
		//echo"<pre>";print_r($details);echo"</pre>";

	}

	function view_restaurant(){
		$this->load->model('admin_model');
		$data['tbl_manager']=$this->admin_model->get_resdetails();

		$this->load->view('admin/admin_resdetails',$data);		
		$details=$data['tbl_manager'];	
		//echo"<pre>";print_r($details);echo"</pre>";

	}



}