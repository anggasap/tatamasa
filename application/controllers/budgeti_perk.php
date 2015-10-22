<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budgeti_perk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('budgeti_perk_m');
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
		$menuId = $this->home_m->get_menu_id('budgeti_perk/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
        $data['tahun'] = $this->budgeti_perk_m->getTahun();
        
        
		if(isset($_POST["btnSimpan"])){
			$this->entry();
		}else{
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
			$data['menu_all'] = $this->user_m->get_menu_all(0);
			
			$this->template->set ( 'title', $data['menu_nama'] );
			$this->template->load ( 'template/template3', 'budget/budgetpi_perk_v',$data );
		}
	}
	function entry(){
		$menuId = $this->home_m->get_menu_id('budgeti_perk/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
		//$data['dept'] = $this->master_advance_m->get_dept();
		
		$tahun			= trim($this->input->post('tahun'));
		$data['tahun'] =$tahun;
		$data['allBudgetPerk'] = $this->budgeti_perk_m->getBudgetPerk($tahun);
		
		$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
		$data['menu_all'] = $this->user_m->get_menu_all(0);
				
		$this->template->set ( 'title', $data['menu_nama'] );
		$this->template->load ( 'template/template3', 'budget/budgeti_perk_v',$data );
		
	}
	
	
    function ubah(){
    	$kode_perk			= trim($this->input->post('kode_perk'));
    	//$ket			= trim($this->input->post(''));
    	$data = array(
    			'jan'		        	=>str_replace(',', '', trim($this->input->post('jan'))),
    			'feb'		        	=>str_replace(',', '', trim($this->input->post('feb'))),
    			'mar'		        	=>str_replace(',', '', trim($this->input->post('mar'))),
    			'apr'		        	=>str_replace(',', '', trim($this->input->post('apr'))),
    			'mei'		    =>str_replace(',', '', trim($this->input->post('mei'))),
    			'jun'				=>str_replace(',', '', trim($this->input->post('jun'))),
    			'jul'		        	=>str_replace(',', '', trim($this->input->post('jul'))),
    			'agu'		        =>str_replace(',', '', trim($this->input->post('agt'))),
    			'sep'		        	=>str_replace(',', '', trim($this->input->post('sep'))),
    			'okt'		        	=>str_replace(',', '', trim($this->input->post('okt'))),
    			'nov'		        	=>str_replace(',', '', trim($this->input->post('nov'))),
    			'des'		        	=>str_replace(',', '', trim($this->input->post('des')))
    			//        		''		        	=>$,
    	);
    	$model = $this->budgeti_perk_m->update($data,$kode_perk);
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
    
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */