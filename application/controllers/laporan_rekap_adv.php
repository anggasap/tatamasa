<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_rekap_adv extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('laporan_rekap_adv_m');
		$this->load->library('fpdf');
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
		$menuId = $this->home_m->get_menu_id('laporan_rekap_adv/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
               
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
			$this->template->load ( 'template/template3', 'laporan/laporan_rekap_adv_v',$data );
		}
	}
	
	function cetak()
    {
    	if($this->auth->is_logged_in() == false){
    		redirect('main/index');
    	}else{
			$checkGroup = $this->session->userdata('usergroup_desc');
			$tanggal1 	= $this->uri->segment(3);
			$date1 = new DateTime($tanggal1);
			$tglAwal	= $date1->format('Y-m-d'); 
			$tanggal2 	= $this->uri->segment(4);
			$date2 = new DateTime($tanggal2);
			$tglAkhir	= $date2->format('Y-m-d');
			$idkyw 	= $this->session->userdata('id_kyw');
			if($checkGroup == "Admin"){
				$data['all'] = $this->laporan_rekap_adv_m->getAllRekapAdv($tglAwal,$tglAkhir);
				$data['datatanggal'] = 'Data Tanggal : '.$tanggal1.' s/d '.$tanggal2.', Semua Kelompok Advance';	
			}elseif($checkGroup == "Akutansi"){
				$data['all'] = $this->laporan_rekap_adv_m->getAllRekapAdv($tglAwal,$tglAkhir);
				$data['datatanggal'] = 'Data Tanggal : '.$tanggal1.' s/d '.$tanggal2.', Semua Kelompok Advance';	
			}else{
				if($idkyw == 0){
					$data['all'] = array();
				}else{
					$data['all'] = $this->laporan_rekap_adv_m->getAllRekapAdvByID($tglAwal,$tglAkhir,$idkyw);
					$data['datatanggal'] = 'Data Tanggal : '.$date1.' s/d '.$date2.', Kelompok Advance'.$idkyw;	
				}	
			}
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			$data['image1'] = base_url('metronic/img/tatamasa_logo.jpg');	
			$data['nama'] = 'PT BERKAH GRAHA MANDIRI';
			//$data['tower'] = 'Beltway Office Park Tower Lt. 5';
			//$data['alamat'] = 'Jl. TB Simatung No. 41 - Pasar Minggu - Jakarta Selatan';
			$data['laporan'] = 'Daftar Advance Request';
			$data['user'] = $this->session->userdata('username');
    		$this->load->view('cetak/cetak_laporan_rekap_adv',$data);
    	}
    }
	
	function cetak_excel(){
		if($this->auth->is_logged_in() == false){
    		redirect('main/index');
    	}else{
			$checkGroup = $this->session->userdata('usergroup_desc');
			$tanggal1 	= $this->uri->segment(3);
			$date1 = new DateTime($tanggal1);
			$tglAwal	= $date1->format('Y-m-d'); 
			$tanggal2 	= $this->uri->segment(4);
			$date2 = new DateTime($tanggal2);
			$tglAkhir	= $date2->format('Y-m-d');
			$idkyw 	= $this->session->userdata('id_kyw');
			if($checkGroup == "Admin"){
				$data ['all'] 	= $this->laporan_rekap_adv_m->getAllRekapAdvExcel($tglAwal,$tglAkhir);
				$data['datatanggal'] = 'Data Tanggal : '.$tanggal1.' s/d '.$tanggal2.', Semua Kelompok Advance';	
			}elseif($checkGroup == "Akutansi"){
				$data ['all'] 	= $this->laporan_rekap_adv_m->getAllRekapAdvExcel($tglAwal,$tglAkhir);
				$data['datatanggal'] = 'Data Tanggal : '.$tanggal1.' s/d '.$tanggal2.', Semua Kelompok Advance';	
			}else{
				if($idkyw == 0){
					$data['all'] = array();
				}else{
					$data['all'] = $this->laporan_rekap_adv_m->getAllRekapAdvByID_excel($tglAwal,$tglAkhir,$idkyw);
					$data['datatanggal'] = 'Data Tanggal : '.$date1.' s/d '.$date2.', Kelompok Advance'.$idkyw;	
				}	
			}
		}	
		$data ['field'] = array('No','Nama Karyawan','Departemen','Keterangan','Request','Jatuh Tempo','Total Request','Belum Dibayar');
		$this->load->view('cetak/cetak_laporan_rekap_adv_excel',$data);
	}
}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */