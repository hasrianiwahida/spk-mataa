<?php 
class Gejala_model extends CI_Model {

	public function get_gejala(){

		// return $this->db->query("SELECT * FROM tbl_gejala JOIN tbl_kelompok_gejala on tbl_kelompok_gejala.id = tbl_gejala.id_klp_gejala")->result();



		return $this->db->select('*, tbl_gejala.id_gejala AS gid')
						->from ('tbl_gejala')
						->join ('tbl_kelompok_gejala','tbl_kelompok_gejala.id = tbl_gejala.id_klp_gejala')
						->get()
						->result_array();

		
	}

	public function insert_gejala(){
		$id_klp_gejala = $this->input->post('id_klp_gejala');
		$kd_gejala = $this->input->post('kd_gejala');
		$gejala = $this->input->post('gejala');

	$data = array(
					'id_klp_gejala'=>$id_klp_gejala,
					'kd_gejala'=>$kd_gejala,
					'gejala'=>$gejala,
			);
	$this->db->insert('tbl_gejala', $data);

	}

	public function getById($id_gejala){
		return $query =$this->db->query("SELECT * FROM tbl_gejala WHERE id_gejala ='$id_gejala' ")->row_array();
	}

	public function edit(){
		// $id_gejala =$this->input->post('id_gejala');
		$id_gejala =$this->input->post('id_gejala');
		$id_klp_gejala =$this->input->post('id_klp_gejala');
		$kd_gejala =$this->input->post('kd_gejala');
		$gejala =$this->input->post('gejala');

		$data =array(
			'id_klp_gejala'=>$id_klp_gejala,
			'kd_gejala'=>$kd_gejala,
			'gejala'=>$gejala,

		);
		$this->db->where('id_gejala',$id_gejala);
		$this->db->update('tbl_gejala',$data);
	}

	public function hapus($id){
		$this->db->where('id_gejala',$id);
		$this->db->delete('tbl_gejala');
		
	}

	public function getlistkelompokgejala()
	{
		return $this->db->get('tbl_kelompok_gejala');
	}

	function get_list_by_id($id){
         $sql = "select id_gejala,kd_gejala,gejala from tbl_gejala where id_gejala in (".$id.")";
         return $this->db->query($sql);
     }
     function get_by_kelompok($kelompok){
        $this->db->select('*');
        $this->db->from('tbl_gejala');
         $this->db->where('id_klp_gejala',$kelompok);
        return $this->db->get();
    }
}
    
