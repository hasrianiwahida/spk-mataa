<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('User_model');
	
}

	public function index(){
        $data['contents'] ='admin/user/list';  
        $data['get_user'] =$this->User_model->get_user();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->User_model->insert_user();
			redirect('user/index');
		}
		$data['contents'] ='admin/user/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->User_model->edit();
			redirect('user/index');
		
		}

		$id_user = $this->uri->segment(3);
		$data['user'] = $this->User_model->getById($id_user);
		$data['contents'] ='admin/user/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->User_model->hapus($id);
		redirect('user/index');

	}
}