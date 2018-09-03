<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Nilaicf extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Nilaicf_model');
	
}

	public function index(){
        $data['contents'] ='admin/nilaicf/list';  
        $data['get_nilaicf'] =$this->Nilaicf_model->get_nilaicf();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Nilaicf_model->insert_nilaicf();
			redirect('nilaicf/index');
		}
		$data['contents'] ='admin/nilaicf/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Nilaicf_model->edit();
			redirect('nilaicf/index');
		
		}

		$id = $this->uri->segment(3);
		$data['nilaicf'] = $this->Nilaicf_model->getById($id);
		$data['contents'] ='admin/nilaicf/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Nilaicf_model->hapus($id);
		redirect('nilaicf/index');

	}
}