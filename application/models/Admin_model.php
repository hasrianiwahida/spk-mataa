<?php 
class admin_model extends CI_Model {

	public function get_admin(){

		$query =$this->db->query("SELECT * FROM tbl_admin");
		return $query->result();  
		
	}

	public function insert_admin(){
		$nama =$this->input->post('nama');
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$usia =$this->input->post('usia');
		$jenis_kelamin =$this->input->post('jenis_kelamin');
		$alamat =$this->input->post('alamat');


		$query = $this->db->query("INSERT INTO tbl_admin (nama,username,password,usia,jenis_kelamin,alamat)
									VALUES 
									('$nama','$username','$password','$usia','$jenis_kelamin','$alamat')");
			return $query; 
	}

	public function getById($id_admin){
		return $query =$this->db->query("SELECT * FROM tbl_admin WHERE id_admin ='$id_admin' ")->row_array();
	}

	public function edit(){
		$id_admin =$this->input->post('id_admin');
		$nama =$this->input->post('nama');
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		$usia =$this->input->post('usia');
		$jenis_kelamin =$this->input->post('jenis_kelamin');
		$alamat =$this->input->post('alamat');


		$data =array(
			'nama'=>$nama,
			'username'=>$username,
			'password'=>$password,
			'usia'=>$usia,
			'jenis_kelamin'=>$jenis_kelamin,
			'alamat'=>$alamat,


		);
		$this->db->where('id_admin',$id_admin);
		$this->db->update('tbl_admin',$data);
	}

	public function hapus($id){
		$this->db->where('id_admin',$id);
		$this->db->delete('tbl_admin');
		
	}
}
    
