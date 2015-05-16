<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {


	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('manager_model');
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);
			$user=$this->manager_model->login($username,$password);
			if(!$user){
				$data['error']=1;
			} else{
				$this->session->set_userdata('managerID',$user['managerID']);
				redirect(base_url().'main');
			}
		}

		
		$this->load->view('header');
		$this->load->view('user/login_user',$data);
		$this->load->view('footer');
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
						'label'=>'Firstname',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'lastname',
						'label'=>'Lastname',
						'rules'=>'trim|required|min_length[3]'
					),
					array(
						'field'=>'restaurantname',
						'label'=>'restaurantname',
						'rules'=>'trim|required|min_length[3]'
					),
					array(
						'field'=>'location',
						'label'=>'location',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'username',
						'label'=>'Username',
						'rules'=>'trim|required|min_length[3]|is_unique[tbl_user.username]'
					),
				array(
						'field'=>'address',
						'label'=>'Address',
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

			$data=array(
				'firstname'=>$_POST['firstname'],
				'lastname'=>$_POST['lastname'],
				'lastname'=>$_POST['lastname'],
				'restaurantname'=>$_POST['restaurantname'],
				'location'=>$_POST['location'],
				'username'=>$_POST['username'],
				'address'=>$_POST['address'],
				'email'=>$_POST['email'],
				'password'=>sha1($_POST['password']),

					
				);


			$this->load->model('manager_model');
			$userid=$this->manager_model->create_user($data);
			$this->session->set_userdata('managerID',$userid);
			redirect(base_url().'main');
			}
		}
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('user/register_manager');
		$this->load->view('footer');
		

	}


}