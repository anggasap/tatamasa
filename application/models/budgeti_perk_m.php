<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Budgeti_perk_m extends CI_Model {
	public function getTahun() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select distinct(tahun) as tahun from budget_perkiraan order by tahun asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){
			$rows[] = $row; //add the fetched result to the result array;
		}
		return $rows; // returning rows, not row
	}
    public function getProyek() {
		$rows 		=	array(); //will hold all results
		$sql		=	"select * from master_proyek order by id_proyek asc ";
		$query		=	$this->db->query($sql);
		foreach($query->result_array() as $row){
			$rows[] = $row; //add the fetched result to the result array;
		}
		return $rows; // returning rows, not row
	}
    public function getNamaProyek($proyek){
        $sql ="select nama_proyek from master_proyek where id_proyek='$proyek'";
        $query = $this->db->query($sql);
        return $query->result();
    }
	public function getBudgetPerk($tahun,$proyek)
	{
		$sql="SELECT b.*,p.nama_perk,p.type,p.level from budget_perkiraan b left join perkiraan p on b.kode_perk = p.kode_perk where b.tahun = '$tahun' and b.id_proyek='$proyek'";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	
	function update($data,$total,$kode_perk,$proyek){
		$this->db->trans_begin();
		//$query1 = $this->db->where('kode_perk', $kode_perk);
//		$query2 = $this->db->update('budget_perkiraan', $data);
        $sql1 = "select (jan+feb+mar+apr+mei+jun+jul+agu+sep+okt+nov+des) as saldo_sbl from budget_perkiraan where kode_perk = '$kode_perk' and id_proyek = '$proyek'";
        $query = $this->db->query($sql1);
        $row = $query->result();
        $saldo_sbl = $row[0]->saldo_sbl;
        $sql2  = "update budget_perkiraan set jan = '$data[jan]', feb = '$data[feb]', mar = $data[mar], apr = $data[apr], 
        mei = '$data[mei]', jun = '$data[jun]', jul = '$data[jul]', agu = '$data[agu]', sep = '$data[sep]', okt = '$data[okt]',
        nov = '$data[nov]', des = '$data[des]', saldo= (saldo + '$total' - terpakai - '$saldo_sbl') where kode_perk = '$kode_perk' and id_proyek = '$proyek'";
        $query = $this->db->query($sql2);
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