<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Konfigurasi_menu_status_user_m extends CI_Model {
	
	public function get_status_user() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select * from sec_usergroup order by usergroup_id asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){    
			$rows[] = $row; //add the fetched result to the result array;
		}
	   return $rows; // returning rows, not row
	}
	public function update_menu_status_user_m($data_menu,$status_user){
		$allowed_new 	=	'+'.$status_user;
		$sql 			=	"update sec_menu set menu_allowed = replace(menu_allowed,'".$allowed_new."','')"; // hilangkan semua
		$query			=	$this->db->query($sql);
		foreach($data_menu as $x=>$x_value){
			$data_menu2 =array();
	 		$data_menu2 = explode('_', $x_value);
			foreach($data_menu2 as $y=>$y_value){
				$sql0		=	"select menu_allowed from sec_menu where menu_id = '".$y_value."'";
				$query0		=	$this->db->query($sql0);
				$menu_alowed= 	$query0->result();
				$menu_alowed=	$menu_alowed[0]->menu_allowed;
				if(!strpos($menu_alowed,$status_user)){
					$sql = "update sec_menu set menu_allowed = concat(menu_allowed,'".$allowed_new."') where menu_id = '".$y_value."'";
					$query	=	$this->db->query($sql);
				}
			}
		}// end foreach($data_menu as $x=>$x_value){
	}
	public function get_menu_group_user_m($kd_group_user) {
		/* $this->db->select ( 'menu_id,parent' );
		$this->db->from('sec_menu');
		$this->db->where ( 'menu_uri', '#' );
		$this->db->like ( 'menu_allowed', $kd_group_user ); */
		$sql = "select menu_id,parent from sec_menu where menu_allowed like '%$kd_group_user%' and menu_uri <>'#' ";
		$query=$this->db->query($sql);
		//$query = $this->db->get ();
		
		$rows['data_menu'] = $query->result();
		return $rows; // returning rows, not row
	}
}

/* End of file Konfigurasi_menu_status_user_m.php */
/* Location: ./application/models/master_nasabahmodel.php */