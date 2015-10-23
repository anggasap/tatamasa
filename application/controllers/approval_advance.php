<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approval_advance extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
		$this->load->model('approval_advance_m');
		session_start();
	}
	
	public function index(){
		if($this->auth->is_logged_in () == false){
			$this->login();
		}else{
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));			
			$this->template->set ( 'title', 'Home' );
			$this->template->load ( 'template/template1', 'global/index',$data );
		}
	}
	
	function home(){
		if($this->auth->is_logged_in () == false){
			$this->login();
		}else{
			$menuId = $this->home_m->get_menu_id('approval_advance/home');
			$data['menu_id'] = $menuId[0]->menu_id;
			$data['menu_parent'] = $menuId[0]->parent;
			$data['menu_nama'] = $menuId[0]->menu_nama;
			$this->auth->restrict ($data['menu_id']);
			$this->auth->cek_menu ($data['menu_id']);
        	
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
			$data['menu_all'] = $this->user_m->get_menu_all(0);
			
			$this->template->set ( 'title', $data['menu_nama'] );
			$this->template->load ( 'template/template3', 'approval/approval_advance_v',$data );
		}
	}
	
    function approval(){
        $id	 				= trim($this->input->post('id'));
		$user 				= $this->session->userdata('id_user');
        $keuanganStatus		= trim($this->input->post('appKeuanganStatus'));
		$keuanganKeterangan = trim($this->input->post('appKeuanganKet'));
		$hdStatus			= trim($this->input->post('appHDStatus'));
		$hdKeterangan 		= trim($this->input->post('appHDKet'));
		$gmStatus			= trim($this->input->post('appGMStatus'));
		$gmKeterangan 		= trim($this->input->post('appGMKet'));
        $tanggal 			= $this->session->userdata('tgl_y');
		
        $hak 	= $this->session->userdata('usergroup_desc');
		
		if($hak == 'Head Department'){
			$data = array(
            'id_advance'	=> $id,
            'app_hd_id'		=> $user,
            'app_hd_status'	=> $hdStatus,
			'app_hd_tgl'	=> $tanggal,
			'app_hd_ket'	=> $hdKeterangan
			);
			$model = $this->approval_advance_m->updateAdvance($data,$id);
		}elseif($hak == 'General Manager'){
			$data = array(
            'id_advance'	=> $id,
            'app_gm_id'		=> $user,
            'app_gm_status'	=> $gmStatus,
			'app_gm_tgl'	=> $tanggal,
			'app_gm_ket'	=> $gmKeterangan
			);	
			$model = $this->approval_advance_m->updateAdvance($data,$id);
		}elseif($hak == 'Keuangan'){
			$data = array(
            'id_advance'			=> $id,
            'app_keuangan_id'		=> $user,
            'app_keuangan_status'	=> $keuanganStatus,
			'app_keuangan_tgl'		=> $tanggal,
			'app_keuangan_ket'		=> $keuanganKeterangan
			);
			$model = $this->approval_advance_m->updateAdvance($data,$id);
		}else{
			$model = false;
		}
		
        if($model){
        	$array = array(
        			'act'	=>1,
        			'notif' =>'Data Berhasil di Approve.'
        	);
        }else{
        	$array = array(
        			'act'	=>0,
        			'notif' =>'User ini tidak diperbolehkan.'
        	);
        }
        $this->output->set_output(json_encode($array));
    }
	
	public function getAllAdv(){
		$this->CI =& get_instance();
		$rows = $this->approval_advance_m->getAdvAll();
		$data['data'] = array();
		foreach( $rows as $row ){
			$query = $this->db->query("select nama_dept as nama from master_dept where id_dept=".$row->dept_kyw."");
			$g = $query->row()->nama;
			
			$array = array(
					'idAdv' 	=> trim($row->id_advance),
					'namaKyw' 	=> trim($row->nama_kyw),
					'deptKyw' 	=> trim($g),
					'jumlah' 	=> trim(number_format($row->jml_uang, 2, ',', '.')),
					'namaAcc' 	=> trim($row->nama_akun_bank),
					'namaBank' 	=> trim($row->nama_bank)
			);
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
	
	function getDescAdv(){
		$this->CI =& get_instance();
		$idAdv = $this->input->post ( 'idAdv', TRUE );
		$rows = $this->approval_advance_m->getDescAdv($idAdv);
		if($rows){
			foreach ( $rows as $row )
				$tgl_jt = date('d-m-Y',strtotime($row->tgl_jt));
				$jml_uang = number_format($row->jml_uang,2);
				
				$hd = $row->app_hd_id;
				if($hd == 0){
					$hdid = '';
				}else{
					$query = $this->db->query("select username as nama from sec_passwd where userid=".$hd."");
					$hdid = $query->row()->nama;
				}
				
				$keuangan = $row->app_keuangan_id;
				if($keuangan == 0){
					$keuanganid = '';
				}else{
					$query = $this->db->query("select username as nama from sec_passwd where userid=".$keuangan."");
					$keuanganid = $query->row()->nama;
				}
				
				$gm = $row->app_gm_id;
				if($gm == 0){
					$gmid = '';
				}else{
					$query = $this->db->query("select username as nama from sec_passwd where userid=".$gm."");
					$gmid = $query->row()->nama;
				}
				
				$keutgl = $row->app_keuangan_tgl;
				if($keutgl == '0000-00-00'){
					$keuangantgl = '';
				}else{
					$keuangantgl = date('d-m-Y',strtotime($row->app_keuangan_tgl));	
				}
				$hedtgl = $row->app_hd_tgl;
				if($hedtgl == '0000-00-00'){
					$hdtgl = '';
				}else{
					$hdtgl = date('d-m-Y',strtotime($row->app_keuangan_tgl));	
				}
				$gemtgl = $row->app_gm_tgl;
				if($gemtgl == '0000-00-00'){
					$gmtgl = '';
				}else{
					$gmtgl = date('d-m-Y',strtotime($row->app_gm_tgl));	
				}
				
				$keuangan = $row->app_keuangan_status;
				if($keuangan == '1'){
					$keuanganStatus = 'Approve';
				}elseif($keuangan == '2'){
					$keuanganStatus = 'Rejected';
				}elseif($keuangan == '3'){
					$keuanganStatus = 'Paid';
				}else{
					$keuanganStatus = '';
				}
				
				$hd = $row->app_hd_status;
				if($hd == '1'){
					$hdStatus = 'Approve';
				}elseif($hd == '2'){
					$hdStatus = 'Rejected';
				}elseif($hd == '3'){
					$hdStatus = 'Paid';
				}else{
					$hdStatus = '';
				}
				
				$gm = $row->app_gm_status;
				if($gm == '1'){
					$gmStatus = 'Approve';
				}elseif($gm == '2'){
					$gmStatus = 'Rejected';
				}elseif($gm == '3'){
					$gmStatus = 'Paid';
				}else{
					$gmStatus = '';
				}
				
				$array = array(
						'baris'=>1,
						'id_kyw' => $row->id_kyw,
						'nama_kyw'=>$row->nama_kyw,
						'nama_dept'=>$row->nama_dept,
						'jml_uang' => $jml_uang,
						'tgl_jt' => $tgl_jt,
						'pay_to' => $row->pay_to,
						'nama_akun_bank' => $row->nama_akun_bank,
						'no_akun_bank' => $row->no_akun_bank,
						'nama_bank' => $row->nama_bank,
						'keterangan' => $row->keterangan,
						'dok_po' => $row->dok_po,
						'dok_sp' => $row->dok_sp,
						'dok_ssp' => $row->dok_ssp,
						'dok_sspk' => $row->dok_sspk,
						'dok_sbj' => $row->dok_sbj,
						'app_keuangan_id' => $keuanganid,
						'app_hd_id' => $hdid,
						'app_gm_id' => $gmid,
						'app_keuangan_status' => $keuanganStatus,
						'app_hd_status' => $hdStatus,
						'app_gm_status' => $gmStatus,
						'app_keuangan_tgl' => $keuangantgl,
						'app_hd_tgl' => $hdtgl,
						'app_gm_tgl' => $gmtgl,
						'app_keuangan_ket' => $row->app_keuangan_ket,
						'app_hd_ket' => $row->app_hd_ket,
						'app_gm_ket' => $row->app_gm_ket 				
				);
		}else{
			$array=array('baris'=>0);
		}
		$this->output->set_output(json_encode($array));
	}
}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */