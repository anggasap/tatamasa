<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_jnsadvance extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_jnsadvance_m');
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
		$menuId = $this->home_m->get_menu_id('master_jnsadvance/home');
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
			$this->template->load ( 'template/template3', 'master/master_jnsadvance_v',$data );
		}
	}
	public function getJnsadvAll(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->master_jnsadvance_m->getJnsadvanceAll();
		$data['data'] = array();
		foreach( $rows as $row ) {
			$array = array(
					'idAccount' => trim($row->id_account),
					'namaAccount' => trim($row->nama_account),
                    'norekBank' => trim($row->norek_bank),
                    'kodePerk' => trim($row->kode_perk)				
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
    function getDescGL(){
		$this->CI =& get_instance();
		$idGL = $this->input->post ( 'idGL', TRUE );
		$rows = $this->master_jnsadvance_m->getDescGL( $idGL );
		if($rows){
			foreach ( $rows as $row )
				$array = array (
						'baris'=>1,
						'nama_perk' => $row->nama_perk
				);
		}else{
			$array=array('baris'=>0);
		}
	
		$this->output->set_output(json_encode($array));
	}
    function simpan(){
        $namaJnsadv			= trim($this->input->post('namaJnsadv'));
        $norekBank			= trim($this->input->post('norekBank'));
        $GL			        = trim($this->input->post('GL'));

        //$deptProyek		= trim($this->input->post('deptProyek'));
       
        $modelidJnsadv = $this->master_jnsadvance_m->getIdJnsadv();
        $data = array(
            'id_account'		      		=>$modelidJnsadv,
            'nama_account'		        	=>$namaJnsadv,
            'norek_bank'		        	=>$norekBank,
            'kode_perk'		        	    =>$GL
        );
        $model = $this->master_jnsadvance_m->simpan($data);
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
    	$jnsadvId			= trim($this->input->post('jnsadvId'));
    	$namaJnsadv			= trim($this->input->post('namaJnsadv'));
        $norekBank			= trim($this->input->post('norekBank'));
        $GL			        = trim($this->input->post('GL'));
    	 
    	$data = array(
            'nama_account'		        	=>$namaJnsadv,
            'norek_bank'		        	=>$norekBank,
            'kode_perk'		        	    =>$GL
        );
    	
    	$model = $this->master_jnsadvance_m->ubah($data,$jnsadvId);
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
    	$proyekId			= trim($this->input->post('idAcc'));
        $model = $this->master_jnsadvance_m->hapus( $proyekId);
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
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */