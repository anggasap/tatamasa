<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_advance extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_advance_m');
		session_start ();
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
		$menuId = $this->home_m->get_menu_id('master_advance/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
        $data['proyek'] = $this->master_advance_m->getProyek();
        $data['kurs'] = $this->master_advance_m->getKurs();
       
		if(isset($_POST["btnSimpan"])){
			$this->simpan();
		}elseif(isset($_POST["btnUbah"])){
			$this->ubah();
		}elseif(isset($_POST["btnHapus"])){
			$this->hapus();
		}else{
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
			$data['menu_all'] = $this->user_m->get_menu_all(0);
			
			$this->template->set ( 'title', $data['menu_nama'] );
			$this->template->load ( 'template/template3', 'master/master_advance_v',$data );
		}
	}
	public function getKywAll(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->master_advance_m->getKywAll();
		$data['data'] = array();
		foreach( $rows as $row ) {
			$array = array(
					'idKyw' => trim($row->id_kyw),
					'namaKyw' => trim($row->nama_kyw),
					'deptKyw' =>  trim($row->nama_dept)
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
	public function getAdvAll(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->master_advance_m->getAdvAll();
		$data['data'] = array();
		foreach( $rows as $row ) {
			$jmlUang = number_format($row->jml_uang,2);
			$array = array(
					'idAdv' => trim($row->id_advance),
					'namaReq' => trim($row->nama_kyw),
					'jmlUang' =>  $jmlUang
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
    function getDescKurs(){
		$this->CI =& get_instance();
		$idKurs = $this->input->post ( 'idKurs', TRUE );
		$rows = $this->master_advance_m->getDescKurs( $idKurs );
		if($rows){
			foreach ( $rows as $row )
				$nilai_kurs = number_format($row->nilai_kurs,2);
				$array = array (
						'baris'=>1,
						'nilai_kurs'=>$nilai_kurs
				);
		}else{
			$array=array('baris'=>0);
		}
	
		$this->output->set_output(json_encode($array));
	}
	function getDescAdv(){
		$this->CI =& get_instance();
		$idAdv = $this->input->post ( 'idAdv', TRUE );
		$rows = $this->master_advance_m->getDescAdv( $idAdv );
		if($rows){
			foreach ( $rows as $row )
				$tgl_jt = date ( 'd-m-Y', strtotime ( $row->tgl_jt ) );
				$tglTrans = date ( 'd-m-Y', strtotime ( $row->tgl_trans ) );
				$jml_uang = number_format($row->jml_uang,2);
				$array = array (
						'baris'=>1,
						'id_kyw' => $row->id_kyw,
						'nama_kyw'=>$row->nama_kyw,
						'nama_dept'=>$row->nama_dept,
						'jml_uang' => $jml_uang,
                        'id_proyek' => $row->id_proyek,
                        'id_kurs' => $row->id_kurs,
                        'nilai_kurs' => $row->nilai_kurs,
						'tgl_trans'	=>$tglTrans,
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
						'dok_sbj' => $row->dok_sbj
						/* 'app_keuangan_id' => $row->app_keuangan_id,
						'app_hd_id' => $row->app_hd_id,
						'app_gm_id' => $row->app_gm_id,
						'app_keuangan_status' => $row->app_keuangan_status,
						'app_hd_status' => $row->app_hd_status,
						'app_gm_status' => $row->app_gm_status,
						'app_keuangan_tgl' => $row->app_keuangan_tgl,
						'app_hd_tgl' => $row->app_hd_tgl,
						'app_gm_tgl' => $row->app_gm_tgl,
						'app_keuangan_ket' => $row->app_keuangan_ket,
						'app_hd_ket' => $row->app_hd_ket,
						'app_gm_ket' => $row->app_gm_ket */
						//'' => $row->
						
				);
		}else{
			$array=array('baris'=>0);
		}
	
		$this->output->set_output(json_encode($array));
	}
	
    function simpan(){
        $idKyw			= trim($this->input->post('kywId'));
        $uangMuka		= str_replace(',', '', trim($this->input->post('uangMuka')));
        $idProyek			= trim($this->input->post('proyek'));
        $idKurs			= trim($this->input->post('kurs'));
        $nilaiKurs		= str_replace(',', '', trim($this->input->post('nilaiKurs')));
        $idKyw			= trim($this->input->post('kywId'));
        $tglTrans			= trim($this->input->post('tglTrans'));
        $tglTrans 			= date ( 'Y-m-d', strtotime ( $tglTrans ) );
        $tglJT			= trim($this->input->post('tglJT'));
        $tglJT 			= date ( 'Y-m-d', strtotime ( $tglJT ) );
        $payTo			= trim($this->input->post('payTo'));
        $namaPemilikAkunBank			= trim($this->input->post('namaPemilikAkunBank'));
        $noAkunBank			= trim($this->input->post('noAkunBank'));
        $namaBank			= trim($this->input->post('namaBank'));
        $ket			= trim($this->input->post('keterangan'));
        $dokPO			= trim($this->input->post('dokPO_in'));
        $dokSP			= trim($this->input->post('dokSP_in'));
        $dokSSP			= trim($this->input->post('dokSSP_in'));
        $dokSSPK			= trim($this->input->post('dokSSPK_in'));
        $dokSBJ			= trim($this->input->post('dokSBJ_in'));
        //$ket			= trim($this->input->post(''));
        
        $bulan = date ( 'm', strtotime ( $tglTrans ) );//$tglTrans->format("m");
        $tahun = date ( 'Y', strtotime ( $tglTrans ) ); //$tglTrans->format("Y");
                
        $modelidAdv = $this->master_advance_m->getIdAdv($bulan,$tahun);
        $data = array(
            'id_advance'		      	=>$modelidAdv,
            'id_kyw'		        	=>$idKyw,
            'jml_uang'		        	=>$uangMuka,
            'id_proyek'                 => $idProyek,
            'id_kurs'                   => $idKurs,
            'nilai_kurs'                => $nilaiKurs,
        	'tgl_trans'		        	=>$tglTrans,
        	'tgl_jt'		        	=>$tglJT,
        	'pay_to'		        	=>$payTo,
        	'nama_akun_bank'		    =>$namaPemilikAkunBank,
        	'no_akun_bank'				=>$noAkunBank,
        	'nama_bank'		        	=>$namaBank,
        	'keterangan'		        =>$ket,
        	'dok_po'		        	=>$dokPO,
        	'dok_sp'		        	=>$dokSP,
        	'dok_ssp'		        	=>$dokSSP,
        	'dok_sspk'		        	=>$dokSSPK,
        	'dok_sbj'		        	=>$dokSBJ
//        		''		        	=>$,
        );
        $model = $this->master_advance_m->insertAdv($data);
        if($model){
    		$array = array(
    			'act'	=>1,
    			'tipePesan'=>'success',
    			'pesan' =>'Data berhasil disimpan.'
    		);
    	}else{
    		$array = array(
    			'act'	=>0,
    			'tipePesan'=>'error',
    			'pesan' =>'Data gagal disimpan.'
    		);
    	}
        $this->output->set_output(json_encode($array));
    }
    function ubah(){
    	/* $kywId			= trim($this->input->post('kywId'));
    	$namaKyw			= trim($this->input->post('namaKyw'));
        $deptKyw		= trim($this->input->post('deptKyw'));
    	 
    	$data = array(
            'nama_kyw'		        	=>$namaKyw,
            'dept_kyw'		        	=>$deptKyw
        ); */
    	$idAdv			= trim($this->input->post('idAdvance'));
    	$idKyw			= trim($this->input->post('kywId'));
    	$uangMuka		= str_replace(',', '', trim($this->input->post('uangMuka')));
        $idProyek			= trim($this->input->post('proyek'));
        $idKurs			= trim($this->input->post('kurs'));
        $nilaiKurs		= str_replace(',', '', trim($this->input->post('nilaiKurs')));
    	$tglJT			= trim($this->input->post('tglJT'));
    	$tglJT 			= date ( 'Y-m-d', strtotime ( $tglJT ) );
    	$payTo			= trim($this->input->post('payTo'));
    	$namaPemilikAkunBank			= trim($this->input->post('namaPemilikAkunBank'));
    	$noAkunBank			= trim($this->input->post('noAkunBank'));
    	$namaBank			= trim($this->input->post('namaBank'));
    	$ket			= trim($this->input->post('keterangan'));
    	$dokPO			= trim($this->input->post('dokPO_in'));
        $dokSP			= trim($this->input->post('dokSP_in'));
        $dokSSP			= trim($this->input->post('dokSSP_in'));
        $dokSSPK			= trim($this->input->post('dokSSPK_in'));
        $dokSBJ			= trim($this->input->post('dokSBJ_in'));
    	//$ket			= trim($this->input->post(''));
    	$data = array(
    			'id_kyw'		        	=>$idKyw,
    			'jml_uang'		        	=>$uangMuka,
                'id_proyek'                 => $idProyek,
                'id_kurs'                   => $idKurs,
                'nilai_kurs'                => $nilaiKurs,
    			'tgl_jt'		        	=>$tglJT,
    			'pay_to'		        	=>$payTo,
    			'nama_akun_bank'		    =>$namaPemilikAkunBank,
    			'no_akun_bank'				=>$noAkunBank,
    			'nama_bank'		        	=>$namaBank,
    			'keterangan'		        =>$ket,
    			'dok_po'		        	=>$dokPO,
    			'dok_sp'		        	=>$dokSP,
    			'dok_ssp'		        	=>$dokSSP,
    			'dok_sspk'		        	=>$dokSSPK,
    			'dok_sbj'		        	=>$dokSBJ
    			//        		''		        	=>$,
    	);
    	$model = $this->master_advance_m->updateAdv($data,$idAdv);
    	if($model){
    		$array = array(
    			'act'	=>1,
    			'tipePesan'=>'success',
    			'pesan' =>'Data berhasil diubah.'
    		);
    	}else{
    		$array = array(
    			'act'	=>0,
    			'tipePesan'=>'error',
    			'pesan' =>'Data gagal diubah.'
    		);
    	}
    	$this->output->set_output(json_encode($array));
    }
    function hapus(){
    	$this->CI =& get_instance();
    	$idAdvance			= trim($this->input->post('idAdvance'));
    	$model = $this->master_advance_m->deleteAdv( $idAdvance);
    	if($model){
    		$array = array(
    			'act'	=>1,
    			'tipePesan'=>'success',
    			'pesan' =>'Data berhasil dihapus.'
    		);
    	}else{
    		$array = array(
    			'act'	=>0,
    			'tipePesan'=>'error',
    			'pesan' =>'Data gagal dihapus.'
    		);
    	}
    	$this->output->set_output(json_encode($array));
    }
	function cetak($idAdv)
    {
    	if($this->auth->is_logged_in() == false){
    		redirect('main/index');
    	}else{
    		$data['advance'] = $this->master_advance_m->getDescAdv($idAdv);
    		$this->load->view('cetak/cetak_advance',$data);
    	}
    }
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */