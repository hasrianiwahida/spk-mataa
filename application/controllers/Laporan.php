<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {

function __construct(){
	parent::__construct();
	require_once APPPATH.'dompdfbundle-master/third_party/dompdf/dompdf_config.inc.php';
	
}

public function cetakLaporan()
{
		$data['user'] = $this->db->query("SELECT * FROM tbl_user ORDER BY id_user DESC")->result();
		
		

		$dompdf = new Dompdf();
			 

	  	$html =$this->load->view('welcome_message',$data,true);

		$dompdf->load_html($html);

		$dompdf->set_paper('A4','potrait');

		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream('laporanku.pdf',array("Attachment" => false));



}
}