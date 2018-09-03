<?php 
class User_model extends CI_Model {

	public function get_user(){

		$query =$this->db->query("SELECT * FROM tbl_user");
		return $query->result();  
		
	}

	public function insert_user(){
		$nama =$this->input->post('nama');
		$jenis_kelamin =$this->input->post('jenis_kelamin');
		$umur =$this->input->post('umur');
		$alamat =$this->input->post('alamat');
		


		$query = $this->db->query("INSERT INTO tbl_user (nama,jenis_kelamin,umur,alamat)
									VALUES 
									('$nama','$jenis_kelamin','$umur','$alamat')");
			return $query; 
	}

	public function getById($id_user){
		return $query =$this->db->query("SELECT * FROM tbl_user WHERE id_user ='$id_user' ")->row_array();
	}

	public function edit(){
		$nama =$this->input->post('nama');
		$jenis_kelamin =$this->input->post('jenis_kelamin');
		$umur =$this->input->post('umur');
		$alamat =$this->input->post('alamat');
		
		$data =array(
			'nama'=>$nama,
			'jenis_kelamin'=>$jenis_kelamin,
			'umur'=>$umur,
			'alamat'=>$alamat,
		

		);
		$this->db->where('id_user',$id_user);
		$this->db->update('tbl_user',$data);
	}

	public function hapus($id){
		$this->db->where('id_user',$id);
		$this->db->delete('tbl_user');
		
	}
}
    
