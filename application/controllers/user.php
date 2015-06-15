<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('user_model');
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);
			$user=$this->user_model->login($username,$password);
			if(!$user){
				$data['error']=1;
			} else{
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url().'main');
			}
		}

		$this->load->view('navbar');
		//$this->load->view('header');
		$this->load->view('user/login_user',$data);
		//$this->load->view('footer');
		$this->load->helper('form');
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'main');
	}

	function register(){
		if($_POST){

			$config=array(
				array(
						'field'=>'firstname',
						'label'=>'First Name',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'lastname',
						'label'=>'Last Name',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'username',
						'label'=>'Username',
						'rules'=>'trim|required|min_length[3]|is_unique[tbl_pass.username]'
					),
				array(
						'field'=>'address',
						'label'=>'Address',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'contactnumber',
						'label'=>'Contact Number',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'password',
						'label'=>'Password',
						'rules'=>'trim|required|min_length[3]'
					),

				array(
						'field'=>'email',
						'label'=>'Email',
						'rules'=>'trim|required|is_unique[tbl_user.email]valid_email'
					)

				);

			$this->load->library('form_validation');
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() == FALSE){
				$data['errors']=validation_errors();
			} else{

			$data1=array(
				'firstname'=>$_POST['firstname'],
				'lastname'=>$_POST['lastname'],
				//'username'=>$_POST['username'],
				'address'=>$_POST['address'],
				'email'=>$_POST['email'],
				'contactnumber'=>$_POST['contactnumber'],
				//'password'=>md5($_POST['password']),	
				);

			$data2=array(
				'username'=>$_POST['username'],
				'password'=>md5($_POST['password']),

				);

			//$this->m_signup->create_user($data1, $data2);
			$this->load->model('user_model');
			$userid=$this->user_model->create_user($data1, $data2);
			$this->session->set_userdata('userID',$userid);
			redirect(base_url().'main');
			}
		}
		$this->load->view('navbar');
		$this->load->helper('form');
		//$this->load->view('header');
		$this->load->view('user/register_user');
		//$this->load->view('user/order');
		$this->load->view('footer');
		

	}


    


}