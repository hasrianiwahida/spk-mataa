<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Admin_model');
	
}

	public function index(){
        $data['contents'] ='admin/admin/list';  
        $data['get_admin'] =$this->Admin_model->get_admin();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Admin_model->insert_admin();
			redirect('admin/index');
		}
		$data['contents'] ='admin/admin/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Admin_model->edit();
			redirect('admin/index');
		
		}

		$id_admin = $this->uri->segment(3);
		$data['admin'] = $this->Admin_model->getById($id_admin);
		$data['contents'] ='admin/admin/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Admin_model->hapus($id);
		redirect('admin/index');

	}
}