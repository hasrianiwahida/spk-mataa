<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelompok_gejala extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Kelompok_gejala_model');
	
}

	public function index(){
        $data['contents'] ='admin/kelompok_gejala/list';  
        $data['get_kelompok_gejala'] =$this->Kelompok_gejala_model->get_kelompok_gejala();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Kelompok_gejala_model->insert_kelompok_gejala();
			redirect('kelompok_gejala/index');
		}
		$data['contents'] ='admin/kelompok_gejala/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Kelompok_gejala_model->edit();
			redirect('kelompok_gejala/index');
		
		}

		$id = $this->uri->segment(3);
		$data['kelompok_gejala'] = $this->Kelompok_gejala_model->getById($id);
		$data['contents'] ='admin/kelompok_gejala/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Kelompok_gejala_model->hapus($id);
		redirect('kelompok_gejala/index');

	}
}