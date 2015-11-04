<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Sec_user_m extends CI_Model {
	public function get_level_user() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select * from sec_level order by level_id asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){
			$rows[] = $row; //add the fetched result to the result array;
		}
		return $rows; // returning rows, not row
	}
	public function insertUser($data){
		$this->db->trans_begin();
		$model = $this->db->insert('sec_passwd', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
		
	}
	function updateUser($data,$userId){
		$this->db->trans_begin();
		$query1 = $this->db->where('userid', $userId);
		$query2 = $this->db->update('sec_passwd', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	function deleteUser($userId){
		$this->db->trans_begin();
		$query1	=	$this->db->where('userid',$userId);
		$query2	=   $this->db->delete('sec_passwd');
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	public function getUserInfo()
	{
		$sql="SELECT * from sec_passwd ";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	
}

/* End of file sec_menu_user_m.php */
/* Location: ./application/models/sec_menu_user.php */