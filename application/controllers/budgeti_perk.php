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
        //$data['dept'] = $this->master_advance_m->get_dept();
       $data['allBudgetPerk'] = $this->budgeti_perk_m->getBudgetPerk();
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
			$this->template->load ( 'template/template3', 'budget/budgeti_perk_v',$data );
		}
	}
	
	public function getAdvAll(){
		
		$rows = $this->budgeti_perk_m->getBudgetPerk();
		$data['data'] = array();
		foreach( $rows as $row ) {
			//$jmlUang = number_format($row->jml_uang,2);
			$array = array(
					'idAdv' => trim($row->id_advance),
					'namaReq' => trim($row->nama_kyw),
					'jmlUang' =>  $jmlUang
			);
	
			array_push($data['data'],$array);
		}
		
	}
	
	
    function simpan(){
        $idKyw			= trim($this->input->post('kywId'));
        $uangMuka		= str_replace(',', '', trim($this->input->post('uangMuka')));
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
                
        $modelidAdv = $this->master_advance_m->getIdAdv();
        $data = array(
            'id_advance'		      	=>$modelidAdv,
            'id_kyw'		        	=>$idKyw,
            'jml_uang'		        	=>$uangMuka,
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
    		//$id = $this->uri->segment(3);
    		$data ['advance'] = $this->master_advance_m->getDescAdv($idAdv);
    		$this->load->view('cetak/cetak_advance',$data);
    	}
    }
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */