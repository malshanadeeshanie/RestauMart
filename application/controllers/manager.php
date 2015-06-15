<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {


	

	function Man_register(){
		if($_POST){

			$config=array(

				/*  restuarent Info*/
				array(
						'field'=>'resname',
						'label'=>'Restaurant Name',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'resaddress',
						'label'=>'Address',
						'rules'=>'trim|required|min_length[3]'
					),
					array(
						'field'=>'resemail',
						'label'=>'Restaurant Email',
						'rules'=>'trim|required|min_length[3]'
					),
					array(
						'field'=>'resnumber',
						'label'=>'Contact Number of the Restaurent',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'zip',
						'label'=>'Zip or Postal code',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'city',
						'label'=>'City',
						'rules'=>'trim|required|min_length[3]'
					),
				array(
						'field'=>'state',
						'label'=>'State or Province',
						'rules'=>'trim|required|min_length[3]'
					),

				/*array(
						'field'=>'email',
						'label'=>'Email',
						'rules'=>'trim|required|is_unique[tbl_user.email]valid_email'
						),*/
				
					/*manager Info*/
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
						'rules'=>'trim|required|is_unique[tbl_manager.email]valid_email'
					)


				);

			$this->load->library('form_validation');
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() == FALSE){
				$data['errors']=validation_errors();
			} else{

			$data1=array(
				'Res_Name'=>$_POST['resname'],
				'Res_Address'=>$_POST['resaddress'],
				'Res_Email'=>$_POST['resemail'],
				'Res_Contact'=>$_POST['resnumber'],
				'Zip'=>$_POST['zip'],
				'City'=>$_POST['city'],
				'State'=>$_POST['state'],

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


			$this->load->model('manager_model');
			$userid=$this->manager_model->create_user($data1,$data2);
			$this->session->set_userdata('managerID',$userid);
			redirect(base_url().'main');
			}
		}
		$this->load->view('navbar');
		$this->load->helper('form');
		//$this->load->view('header');
		$this->load->view('user/register_restaurant');
		$this->load->view('footer');
		

	}

	function view_restaurants()
	{
		$this->load->view('navbar');
		$this->load->view('header');
		//$this->load->view('restaurants',$data);
		$this->load->view('footer');
		//$this->load->database();  
         //load the model 
		$this->load->model('manager_model'); 		 
        $data['restaurants']=$this->manager_model->view_restaurants();  
         //load the method of model  
        // $data['rest']=$this->select->select();  
         //return the data in view  
         $this->load->view('restaurants', $data);  
	}
}