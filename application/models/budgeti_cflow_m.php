<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Budgeti_cflow_m extends CI_Model {
	public function getTahun() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select distinct(tahun) as tahun from budget_cflow order by tahun asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){
			$rows[] = $row; //add the fetched result to the result array;
		}
		return $rows; // returning rows, not row
	}
	public function getBudgetCflow($tahun)
	{
		$sql="SELECT b.*,m.nama_cflow  from budget_cflow b left join master_cashflow m on b.kode_cflow = m.kode_cflow where tahun = '$tahun'";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	
	
	
	function update($data,$kode_cflow){
		$this->db->trans_begin();
		$query1 = $this->db->where('kode_cflow', $kode_cflow);
		$query2 = $this->db->update('budget_cflow', $data);
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