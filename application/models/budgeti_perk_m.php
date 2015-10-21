<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Budgeti_perk_m extends CI_Model {
	public function get_dept() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select * from master_dept order by id_dept asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){
			$rows[] = $row; //add the fetched result to the result array;
		}
		return $rows; // returning rows, not row
	}
	public function getBudgetPerk()
	{
		$sql="SELECT * from budget_perkiraan";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	
	
	public function insertAdv($data){
		
		$this->db->trans_begin();
		$model = $this->db->insert('master_advance', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	
	}
	function update($data,$kode_perk){
		$this->db->trans_begin();
		$query1 = $this->db->where('kode_perk', $kode_perk);
		$query2 = $this->db->update('budget_perkiraan', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	function deleteAdv($advId){
		$this->db->trans_begin();
		$query1	=	$this->db->where('id_advance',$advId);
		$query2	=   $this->db->delete('master_advance');
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