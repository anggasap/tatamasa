<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Master_rumah_m extends CI_Model {
	
	public function getRumahAll()
	{
		$sql="SELECT r.*,p.nama_proyek from master_rumah r left join master_proyek p on r.id_proyek = p.id_proyek ";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
	public function getIdRumah(){
		$sql= "select id_rumah from master_rumah";
		$query = $this->db->query($sql);
		$jml = $query->num_rows();
		if($jml == 0){
			$id_rumah = "001";
			return $id_rumah;
		}else{
			$sql= "select max(right(id_rumah,3)) as id_rumah from master_rumah";
			$query = $this->db->query($sql);
			$hasil = $query->result();
			$id_rumah =  $hasil[0]->id_rumah;
			$id_rumah = sprintf('%03u',$id_rumah+1);
			return $id_rumah;
		}
	}
    public function getDescRumah($idRumah)
	{
		$this->db->select ( 'r.*,p.nama_proyek' );
		$this->db->from('master_rumah r');
		$this->db->join('master_proyek p', 'r.id_proyek=p.id_proyek', 'LEFT');
		$this->db->where ( 'r.id_rumah', $idRumah );
//		$this->db->where ( 'T.STATUS_AKTIF <>', 3 );
		$query = $this->db->get ();
		if($query->num_rows()== '1'){
			return $query->result ();
		}else{
			return false;
		}
		
	}
	public function simpan($data){
		
		$this->db->trans_begin();
		$model = $this->db->insert('master_rumah', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	
	}
	function ubah($data,$rumahId){
		$this->db->trans_begin();
		$query1 = $this->db->where('id_rumah', $rumahId);
		$query2 = $this->db->update('master_rumah', $data);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}
	
	function hapus($rumahId){
		$this->db->trans_begin();
		$query1	=	$this->db->where('id_rumah',$rumahId);
		$query2	=   $this->db->delete('master_rumah');
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