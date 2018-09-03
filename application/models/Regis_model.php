<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Regis_model extends CI_Model {
	public function insert(){
		$nama =$this->input->post('nama');
		$jenis_kelamin =$this->input->post('jenis_kelamin');
		$umur =$this->input->post('umur');
		$alamat =$this->input->post('alamat');
	

		$data = array(
			'nama' =>$nama,
			'jenis_kelamin' =>$jenis_kelamin,
			'umur' =>$umur,
			'alamat' =>$alamat,
			);
		$this->db->insert('tbl_user',$data);
	}
}