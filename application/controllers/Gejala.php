<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Gejala extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Gejala_model');
	
}

	public function index(){
        $data['contents'] ='admin/gejala/list';  
        $data['kelompok_data'] =$this->Gejala_model->get_gejala();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Gejala_model->insert_gejala();
			redirect('gejala/index');
		}
		$data['contents'] ='admin/gejala/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->edit();
			redirect('gejala/index');
		
		}

		$id_gejala = $this->uri->segment(3);
		$data['gejala'] = $this->Gejala_model->getById($id_gejala);
		$data['contents'] ='admin/gejala/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Gejala_model->hapus($id);
		redirect('gejala/index');

	}
}