<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function index(){

		$this->load->view('user/loginview_user');
		echo "kasun blogs";
        
        $this->load->view('navbar');
       

                
	}

}