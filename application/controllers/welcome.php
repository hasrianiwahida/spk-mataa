<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model(array('Kelompok_gejala_model','Nilaicf_model','Gejala_model'));
	}

    public function index(){
    $data['contents'] ='user/home'; 
    $this->load->view('templates/user/index',$data);

	}

	public function admin(){
    $data['contents'] ='admin/dashboard'; 
    $this->load->view('templates/admin/index',$data);

	}

	// public function diagnosa(){
 //    $data['contents'] ='user/diagnosa'; 
 //    $this->load->view('templates/regis/index',$data);

	// }	

	public function diagnosa()
	{
		// if($this->session->userdata('is_login') == FALSE){redirect('login_user');}

		if (!$this->input->post('gejala')) {
			$data['contents'] = 'user/diagnosa'; //nama file yang akan jadi kontent di template
			$data['listKelompok'] = $this->Kelompok_gejala_model->get_kelompok_gejala();
			$this->load->view('templates/diagnosa/index', $data);


}else{
			$data["contents"]="user/hasil_diagnosa";
			$gejala = implode(",", $this->input->post("gejala"));
			$data["listGejala"] = $this->Gejala_model->get_list_by_id($gejala);
			//hitung
			$listPenyakit = $this->Nilaicf_model->get_by_gejala($gejala);
			$penyakit = array();
			$i=0;
			foreach($listPenyakit->result() as $value){
				$listGejala = $this->Nilaicf_model->get_gejala_by_penyakit($value->penyakit_id,$gejala);
				$combineCF=0;
				$CFBefore=0;
				$j=0;
				foreach($listGejala->result() as $value2){
					$j++;
					if($j==1)
						$combineCF=$value2->mb;
					else
					$combineCF =$combineCF + ($value2->mb * (1 - $combineCF));
				}
				if($combineCF>=0.5)
				{
					$penyakit[$i]=array('kd_penyakit'=>$value->kd_penyakit,
										'nama_penyakit'=>$value->nama_penyakit,
										'kepercayaan'=>$combineCF*100,
										'definisi'=>$value->definisi);
					$i++;
				}
			}
				function cmp($a, $b)
			{
				return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
			}
			usort($penyakit, "cmp");
			$data["listPenyakit"] = $penyakit;
			// $this->load->view('/user/diagnosa', $data);
			$this->load->view('templates/diagnosa/index', $data);
			
		}
	}
	

	public function dashboard(){
	
		// if($this->session->userdata('is_login') == FALSE || $this->session->userdata('level') != 'admin'){
			// redirect('welcome/admin');
		
		$data['contents'] = 'admin/dashboard'; //nama file yang akan jadi kontent di template
		$this->load->view('templates/admin/index', $data);
	}

}

			