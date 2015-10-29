
<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Master_cflow_m extends CI_Model {
	public function getAllCflow()
    {
        $sql="SELECT kode_cflow,kode_alt,nama_cflow,level,type from master_cashflow order by kode_cflow asc";
        $query=$this->db->query($sql);
        return $query->result(); // returning rows, not row
    }
	public function getLastKdCflow($kdCflowRoot,$levelCflow){
		$sql="SELECT max(kode_cflow) as kdCflow from master_cashflow where kode_induk ='$kdCflowRoot' and level ='$levelCflow'";
		$query=$this->db->query($sql);
		$hasil = $query->result();
		if($hasil[0]->kdCflow == null){
			$kdCflow = $kdCflowRoot."01";
			return $kdCflow;
		}else{
			$kdCflow =  trim($hasil[0]->kdCflow)+1;
			return $kdCflow;
		}		 // returning rows, not row
	}
	
	
	public function insert($data){
		
		$this->db->trans_begin();
		$model = $this->db->insert('master_cashflow', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	
	}
	function updateTipe($data,$kodeCflow){
		$this->db->trans_begin();
		$query1 = $this->db->where('kode_cflow', $kodeCflow);
		$query2 = $this->db->update('master_cashflow', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	function update($data,$kdCflow){
		$this->db->trans_begin();
		$query1 = $this->db->where('kode_cflow', $kdCflow);
		$query2 = $this->db->update('master_cashflow', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	public function cekSaldoKodeCflow($kdCflow){
		$sql="SELECT saldo_akhir as saldo from master_cashflow where kode_cflow ='$kdCflow'";
		$query=$this->db->query($sql);
		$hasil = $query->result();
		return $hasil;
				 // returning rows, not row
	}
	public function cekTipeKodeCflow($kdCflow){
		$sql="SELECT type from master_cashflow where kode_cflow ='$kdCflow'";
		$query=$this->db->query($sql);
		$hasil = $query->result();
		return $hasil;
		// returning rows, not row
	}
	public function cekJmlKodeInduk($kodeCflowRoot){
		$sql="SELECT kode_cflow from master_cashflow where kode_induk ='$kodeCflowRoot'";
		$query=$this->db->query($sql);
		//$hasil = $query->result();
		$jml = $query->num_rows();
		return $jml;
		// returning rows, not row
	}
	
	function delete($kdCflow){
		$this->db->trans_begin();
		$query1	=	$this->db->where('kode_cflow',$kdCflow);
		$query2	=   $this->db->delete('master_cashflow');
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	function updatekodeinduk(){
		//substr($kdPerk,0,-2);
		$sql1 = "select kode_cflow from master_cashflow";
		$query=$this->db->query($sql1);
		foreach ($query->result() as $row){
			$kdCflow = $row->kode_cflow;
			$kode_induk = substr($kdCflow,0,-2);
			$sql="update master_cashflow set kode_induk = '$kode_induk' where kode_cflow ='$kdCflow'";
			$this->db->query($sql);
		}
		
	}
	
}

/* End of file sec_menu_user_m.php */
/* Location: ./application/models/sec_menu_user.php */