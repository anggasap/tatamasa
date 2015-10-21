<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Budgetc_perk_m extends CI_Model {
	
	public function getKodePerk(){
		
		$sql = "select kode_perk from perkiraan";
		$query=$this->db->query($sql);
		return $query->result();
	
	}
	public function cekTahun($tahun){
		$sql="SELECT tahun from budget_perkiraan where tahun ='$tahun'";
		$query=$this->db->query($sql);
		//$hasil = $query->result();
		$jml = $query->num_rows();
		return $jml;
		// returning rows, not row
	}
	public function insertKodePerk($data){
		$this->db->trans_begin();
		$model = $this->db->insert('budget_perkiraan', $data);
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