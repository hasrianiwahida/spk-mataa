<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');

	}

        public function index(){

        if ($this->session->userdata('is_login') == TRUE ){redirect('welcome/admin');}
        // $data['contents'] ='user/login'; 
        $this->load->view('templates/login/index');

	}
		
	public function login(){
		if (isset($_POST['submit'])){
		$username =$this->input->post('username');
		$password = md5($this->input->post('password'));

		$check = $this->Login_model->checklogin($username,$password);

		 if (!$check){
		 	redirect('login');
		 }else{
		 $data = array(
		 	'username' => $username,
		 	'password' => $password,
		 	'is_login' => TRUE,
		 	// 'nama' =>$check->nama,
		 	);
		 $this->session->set_userdata($data);
		 redirect('welcome/admin'); 
       }
     }
  }
  public function logout(){
  	$data = array('username','password','is_login');
  	$this->session->unset_userdata($data);
  	redirect('login');
  }
}  