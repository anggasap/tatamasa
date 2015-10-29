<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Master_proyek_m extends CI_Model {
	
	public function getProyekAll()
	{
		$sql="SELECT * from master_proyek ";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	public function getIdProyek(){
		$sql= "select id_proyek from master_proyek";
		$query = $this->db->query($sql);
		$jml = $query->num_rows();
		if($jml == 0){
			$id_proyek = "001";
			return $id_proyek;
		}else{
			$sql= "select max(right(id_proyek,3)) as id_proyek from master_proyek";
			$query = $this->db->query($sql);
			$hasil = $query->result();
			$id_proyek =  $hasil[0]->id_proyek;
			$id_proyek = sprintf('%03u',$id_proyek+1);
			return $id_proyek;
		}
	}
	public function simpan($data){
		
		$this->db->trans_begin();
		$model = $this->db->insert('master_proyek', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	
	}
	function ubah($data,$proyekId){
		$this->db->trans_begin();
		$query1 = $this->db->where('id_proyek', $proyekId);
		$query2 = $this->db->update('master_proyek', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	
	function hapus($proyekId){
		$this->db->trans_begin();
		$query1	=	$this->db->where('id_proyek',$proyekId);
		$query2	=   $this->db->delete('master_proyek');
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	
}

/* End of file sec_menu_user_m.php */
/* Location: ./application/models/sec_menu_user.php */