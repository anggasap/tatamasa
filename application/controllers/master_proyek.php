<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_proyek extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_proyek_m');
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
		$menuId = $this->home_m->get_menu_id('master_proyek/home');
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
			$this->template->load ( 'template/template3', 'master/master_proyek_v',$data );
		}
	}
	public function getProyekAll(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->master_proyek_m->getProyekAll();
		$data['data'] = array();
		foreach( $rows as $row ) {
			$array = array(
					'idProyek' => trim($row->id_proyek),
					'namaProyek' => trim($row->nama_proyek)				
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
    function simpan(){
        $namaProyek			= trim($this->input->post('namaProyek'));
        //$deptProyek		= trim($this->input->post('deptProyek'));
       
        $modelidProyek = $this->master_proyek_m->getIdProyek();
        $data = array(
            'id_proyek'		      		=>$modelidProyek,
            'nama_proyek'		        	=>$namaProyek
        );
        $model = $this->master_proyek_m->simpan($data);
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
    	$proyekId			= trim($this->input->post('proyekId'));
    	$namaProyek			= trim($this->input->post('namaProyek'));
    	 
    	$data = array(
            'nama_proyek'		        	=>$namaProyek
        );
    	
    	$model = $this->master_proyek_m->ubah($data,$proyekId);
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
    	$proyekId			= trim($this->input->post('idProyek'));
        $model = $this->master_proyek_m->hapus( $proyekId);
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
        
    	//$cekMasterAdv	= $this->master_proyek_m->cekMasterAdvance($kywId);
//    	$cekMasterReqpay	= $this->master_proyek_m->cekMasterReqpay($kywId);
//    	$cekMasterReimpay	= $this->master_proyek_m->cekMasterReimpay($kywId);
    	/**
 * if($cekMasterAdv == true && $cekMasterReqpay ==true && $cekMasterReimpay ==true){
 *     		$model = $this->master_proyek_m->deleteProyek( $kywId);
 *     		if($model){
 *     			$array = array(
 *     					'act'	=>1,
 *     					'tipePesan'=>'success',
 *     					'pesan' =>'Data berhasil dihapus.'
 *     			);
 *     		}else{
 *     			$array = array(
 *     					'act'	=>0,
 *     					'tipePesan'=>'error',
 *     					'pesan' =>'Data gagal dihapus.'
 *     			);
 *     		}
 *     	}else{
 *     		$array = array(
 *     				'act'	=>0,
 *     				'tipePesan'=>'error',
 *     				'pesan' =>'Data digunakan pada data master yang lain.</br>Data gagal dihapus.'
 *     		);
 *     	}
 */
    	
    	$this->output->set_output(json_encode($array));
    }
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */