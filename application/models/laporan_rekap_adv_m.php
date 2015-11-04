<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Laporan_rekap_adv_m extends CI_Model {
	
	function getAllRekapAdv($tanggal1,$tanggal2)
	{
		$sql="select a.id_advance,a.id_kyw,a.jml_uang,a.tgl_trans,a.tgl_jt,a.keterangan,b.*,c.* from master_advance a 
			  left join master_karyawan b on a.id_kyw = b.id_kyw
			  left join master_dept c on  b.dept_kyw= c.id_dept
			  where tgl_jt between '".$tanggal1."' and '".$tanggal2."'";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	function getAllRekapAdvById($tanggal1,$tanggal2,$idKyw)
	{
		$sql="select a.id_advance,a.id_kyw,a.jml_uang,a.tgl_trans,a.tgl_jt,a.keterangan,b.*,c.* from master_advance a 
			  left join master_karyawan b on a.id_kyw = b.id_kyw
			  left join master_dept c on  b.dept_kyw= c.id_dept
			  where a.id_kyw = ".$idKyw." and tgl_jt between '".$tanggal1."' and '".$tanggal2."'";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	function getAllRekapAdvExcel($tanggal1,$tanggal2){
		$sql = "select b.nama_kyw,c.nama_dept,a.keterangan,a.tgl_trans,a.tgl_jt,a.jml_uang,a.sisa from master_advance a 
				left join master_karyawan b on a.id_kyw = b.id_kyw
				left join master_dept c on  b.dept_kyw= c.id_dept
				where tgl_jt between '".$tanggal1."' and '".$tanggal2."'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function getAllRekapAdvById_Excel($tanggal1,$tanggal2,$idKyw)
	{
		$sql="select b.nama_kyw,c.nama_dept,a.keterangan,a.tgl_trans,a.tgl_jt,a.jml_uang,a.sisa from master_advance a 
			  left join master_karyawan b on a.id_kyw = b.id_kyw
			  left join master_dept c on  b.dept_kyw= c.id_dept
			  where a.id_kyw = ".$idKyw." and tgl_jt between '".$tanggal1."' and '".$tanggal2."'";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
}

/* End of file sec_menu_user_m.php */
/* Location: ./application/models/sec_menu_user.php */