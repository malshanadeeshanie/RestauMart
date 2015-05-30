<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function index(){

		$this->load->view('navbar');
		//$this->load->view('loginout');
        $this->load->view('home');

       

                
	}
	function Nav_home() {
        $this->load->view('navbar');
        $this->load->view('home');
    }

    function Nav_about() {
        $this->load->view('navbar');
        $this->load->view('about');
    }
    function Nav_tips() {
        $this->load->view('navbar');
        $this->load->view('tips');
    }

	 function Nav_service() {
        $this->load->view('navbar');
        $this->load->view('services');
    }
    function Nav_gallery() {
        $this->load->view('navbar');
        $this->load->view('gallery');
    }
    function Nav_contact() {
        $this->load->view('navbar');
        $this->load->view('contact');
    }

}