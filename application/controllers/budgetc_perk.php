<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budgetc_perk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('budgetc_perk_m');
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
		$menuId = $this->home_m->get_menu_id('budgetc_perk/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
        //$data['dept'] = $this->master_advance_m->get_dept();
       
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
			$this->template->load ( 'template/template3', 'budget/budgetc_perk_v',$data );
		}
	}
	
	
    function simpan(){
        $tahun			= trim($this->input->post('tahun'));
        //$ket			= trim($this->input->post(''));
        $cek_tahun		= $this->budgetc_perk_m->cekTahun($tahun);
        if($cek_tahun == 0){
        	$get_kodeperk = $this->budgetc_perk_m->getKodePerk();
        	foreach ($get_kodeperk as $kodeperk){
        		$data = array(
        				'tahun'		        =>$tahun,
        				'kode_perk'		    =>$kodeperk[0]->kode_perk,
        				'jan'				=>0,
        				'feb'				=>
        		);
        		$model = $this->budgetc_perk_m->insertKodePerk($data);
        	}	
        	if($model){
        		$array = array(
        				'act'	=>1,
        				'tipePesan'=>'success',
        				'pesan' =>'Data berhasil disimpan.'
        		);
        	}
        	$this->output->set_output(json_encode($array));
        }else{
        	
        }
        
    }
    
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */