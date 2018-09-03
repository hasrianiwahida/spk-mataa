<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Bobot extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Bobot_model');
	
}

	public function index(){
        $data['contents'] ='admin/bobot/list';  
        $data['get_bobot'] =$this->Bobot_model->get_bobot();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Bobot_model->insert_bobot();
			redirect('bobot/index');
		}
		$data['contents'] ='admin/bobot/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Bobot_model->edit();
			redirect('bobot/index');
		
		}

		$id_bobot = $this->uri->segment(3);
		$data['bobot'] = $this->Bobot_model->getById($id_gejala);
		$data['contents'] ='admin/bobot/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Bobot_model->hapus($id);
		redirect('bobot/index');

	}
}