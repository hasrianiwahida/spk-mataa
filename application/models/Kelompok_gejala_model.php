<?php 
class Kelompok_gejala_model extends CI_Model {

	public function get_kelompok_gejala (){
		return $this->db->get('tbl_kelompok_gejala')->result();

		// $query =$this->db->query("SELECT * FROM tbl_kelompok_gejala");
		// return $query->result();		
	}

	public function insert_kelompok_gejala(){
		// $id =$this->input->post('id');
		$nama_klp =$this->input->post('nama_klp');
		$keterangan =$this->input->post('keterangan');
		
		$query = $this->db->query("INSERT INTO tbl_kelompok_gejala (id,nama_klp,keterangan)
									VALUES 
									('$id','$nama_klp','$keterangan')");
			return $query; 
	
}
	public function getById($id){
		return $query =$this->db->query("SELECT * FROM tbl_kelompok_gejala WHERE id ='$id' ")->row_array();
	}


public function edit(){
		// $id_gejala =$this->input->post('id_gejala');
		$id =$this->input->post('id');
		$nama_klp =$this->input->post('nama_klp');
		$keterangan =$this->input->post('keterangan');

		$data =array(
			'id'=>$id,
			'nama_klp'=>$nama_klp,
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
        $this->db->from('tbl_kelompok_gejala');
        return $this->db->get();
    }
}
    
