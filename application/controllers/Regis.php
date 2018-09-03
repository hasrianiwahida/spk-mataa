<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Regis extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Regis_model');
}

	public function index(){
        $data['contents'] ='user/regis';  
        $this->load->view('templates/regis/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Regis_model->insert();
			redirect('welcome/diagnosa');
		}
		$data['contents'] ='user/regis';
		$this->load->view('templates/user/index',$data);	

	}
}