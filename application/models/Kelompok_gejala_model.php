<?php 
class Kelompok_gejala_model extends CI_Model {

	public function get_Kelompok_gejala (){

		return $this->db->get('tbl_kelompok_gejala')->result();
		// return $query->result();  
		// $this->db->select('*');
		// $this->db->from('tbl_kelompok_gejala');
		// return $this->db->get();
		
	}

	public function insert_kelompok_gejala(){
		// $id =$this->input->post('id');
		$nama =$this->input->post('nama');
		$keterangan =$this->input->post('keterangan');
		
		$query = $this->db->query("INSERT INTO tbl_kelompok_gejala (id,nama,keterangan)
									VALUES 
									('$id','$nama','$keterangan')");
			return $query; 
	
}
	public function getById($id){
		return $query =$this->db->query("SELECT * FROM tbl_kelompok_gejala WHERE id ='$id' ")->row_array();
	}


public function edit(){
		// $id_gejala =$this->input->post('id_gejala');
		$id =$this->input->post('id');
		$nama =$this->input->post('nama');
		$keterangan =$this->input->post('keterangan');

		$data =array(
			'id'=>$id,
			'nama'=>$nama,
			'keterangan'=>$keterangan,

		);
		$this->db->where('id',$id);
		$this->db->update('tbl_kelompok_gejala',$data);
	}

	public function hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_kelompok_gejala');
		
	}
	function get_list_data(){
        $this->db->select('*');
        $this->db->from('kelompok_gejala_model');
        return $this->db->get();
    }
}
    
