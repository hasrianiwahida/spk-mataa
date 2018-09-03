<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Penyakit extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('Penyakit_model');


	
}

	public function index(){
        $data['contents'] ='admin/penyakit/list';  
        $data['get_penyakit'] =$this->Penyakit_model->get_penyakit();
        $this->load->view('templates/admin/index',$data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Penyakit_model->insert_penyakit();
			redirect('penyakit/index');
		}
		$data['contents'] ='admin/penyakit/create';
		$this->load->view('templates/admin/index',$data);	

	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->edit();
			redirect('penyakit/index');
		
		}

		$id_penyakit = $this->uri->segment(3);
		$data['penyakit'] = $this->Penyakit_model->getById($id_penyakit);
		$data['contents'] ='admin/penyakit/edit';
		$this->load->view('templates/admin/index',$data);	

	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Penyakit_model->hapus($id);
		redirect('penyakit/index');

	}

}