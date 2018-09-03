<?php 
class Nilaicf_model extends CI_Model {

	public function get_nilaicf(){

		return $this->db->select('*, tbl_nilaicf.id')
						->from('tbl_nilaicf')
						->join('tbl_gejala', 'tbl_gejala.id_gejala = tbl_nilaicf.gejala_id' )
						->join('tbl_penyakit', 'tbl_penyakit.id_penyakit = tbl_nilaicf.penyakit_id' )
						->get()
						->result_array();
		// $query =$this->db->query("SELECT * FROM tbl_nilaicf");
		// return $query->result();  
		
	}

	public function insert_nilaicf(){
		// $id =$this->input->post('id');
		$gejala_id =$this->input->post('gejala_id');
		$penyakit_id =$this->input->post('penyakit_id');
		$mb =$this->input->post('mb');
		$md =$this->input->post('md');

		$data = array(
				'gejala_id' =>$gejala_id,
				'penyakit_id' =>$penyakit_id,
				'md' =>$md,
				'mb' =>$mb,

			);
		$this->db->INSERT('tbl_nilaicf', $data);
		// $query = $this->db->query("INSERT INTO tbl_nilaicf (gejala_id,penyakit_id,mb,md)
		// 							VALUES 
		// 							('$gejala_id','$penyakit_id','$mb','$md')");
		// 	return $query; 
	}
	public function getById($id){
		return $query =$this->db->query("SELECT * FROM tbl_nilaicf WHERE id ='$id' ")->row_array();
	}


public function edit(){
		// $id_gejala =$this->input->post('id_gejala');
		$id =$this->input->post('id');
		$gejala_id =$this->input->post('gejala_id');
		$penyakit_id =$this->input->post('penyakit_id');
		$mb =$this->input->post('mb');
		$md =$this->input->post('md');


		$data =array(
			'id'=>$id,
			'gejala_id'=>$gejala_id,
			'penyakit_id'=>$penyakit_id,
			'mb'=>$mb,
			'md'=>$md,

		);
		$this->db->where('id',$id);
		$this->db->update('tbl_nilaicf',$data);
	}

	public function hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_nilaicf');
		
	}
	public function getlistnilaicf()
	{
		// return $this->db->get('gejala');

		return $this->db->select('*, tbl_nilaicf.id')
						->from('tbl_nilaicf')
						->join('tbl_gejala', 'tbl_gejala.id_gejala = tbl_nilaicf.gejala_id' )
						->join('tbl_penyakit', 'tbl_penyakit.id_penyakit = tbl_nilaicf.penyakit_id' )
						->get()
						->result_array();
	}

	function get_by_gejala($gejala){
         $sql = "select distinct penyakit_id,p.kd_penyakit,p.nama_penyakit,p.definisi from tbl_nilaicf gp inner join tbl_penyakit p on gp.penyakit_id=p.id_penyakit where gejala_id in (".$gejala.") order by penyakit_id,gejala_id";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select distinct gejala_id,mb,md from tbl_nilaicf where penyakit_id=".$id;
         if($gejala!=null)
            $sql=$sql." and gejala_id in (".$gejala.")";
        $sql=$sql." order by gejala_id";
         return $this->db->query($sql);
     }
}


    
