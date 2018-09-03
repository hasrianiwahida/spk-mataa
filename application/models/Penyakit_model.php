<?php 
class Penyakit_model extends CI_Model {

	public function get_penyakit(){

		$query =$this->db->query("SELECT * FROM tbl_penyakit");
		return $query->result();  
		
	}

	public function insert_penyakit(){
		$kd_penyakit =$this->input->post('kd_penyakit');
		$nama_penyakit =$this->input->post('nama_penyakit');
		$definisi =$this->input->post('definisi');
		$solusi =$this->input->post('solusi');

		$query = $this->db->query("INSERT INTO tbl_penyakit (kd_penyakit,nama_penyakit,definisi,solusi)
									VALUES 
									('$kd_penyakit','$nama_penyakit','$definisi','$solusi')");
			return $query; 
	}

	public function getById($id_penyakit){
		return $query =$this->db->query("SELECT * FROM tbl_penyakit WHERE id_penyakit ='$id_penyakit' ")->row_array();
	}

	public function edit(){
		$id_penyakit =$this->input->post('id_penyakit');
		$kd_penyakit =$this->input->post('kd_penyakit');
		$nama_penyakit =$this->input->post('nama_penyakit');
		$definisi =$this->input->post('definisi');
		$solusi =$this->input->post('solusi');

		$data =array(
			'kd_penyakit'=>$kd_penyakit,
			'nama_penyakit'=>$nama_penyakit,
			'definisi'=>$definisi,
			'solusi'=>$solusi,

		);
		$this->db->where('id_penyakit',$id_penyakit);
		$this->db->update('tbl_penyakit',$data);
	}

	public function hapus($id){
		$this->db->where('id_penyakit',$id);
		$this->db->delete('tbl_penyakit');
		
	}
}
    
