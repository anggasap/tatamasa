<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_rumah extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_rumah_m');
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
		$menuId = $this->home_m->get_menu_id('master_rumah/home');
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
			$this->template->load ( 'template/template3', 'master/master_rumah_v',$data );
		}
	}
	public function getRumahAll(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->master_rumah_m->getRumahAll();
		$data['data'] = array();
		foreach( $rows as $row ) {
		  $harga = number_format(trim($row->harga),2);
			$array = array(
					'id_rumah' => trim($row->id_rumah),
					'nama_proyek' => trim($row->nama_proyek),
                    'nama_rumah' => trim($row->nama_rumah),
                    'luas' => trim($row->luas),
                    'harga' => $harga				
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
    function getDescRumah(){
		$this->CI =& get_instance();
		$idRumah = $this->input->post ( 'idRumah', TRUE );
		$rows = $this->master_rumah_m->getDescRumah( $idRumah );
		if($rows){
			foreach ( $rows as $row )
				$luas = number_format($row->luas,2);
                $harga = number_format($row->harga,2);
				$array = array (
						'baris'=>1,
						//'id_rumah' => $row->id_rumah,
                        'id_proyek' => $row->id_proyek,
						'nama_proyek'=>$row->nama_proyek,
						'nama_rumah'=>$row->nama_rumah,
						'luas' => $luas,
                        'harga' =>$harga
						//'' => $row->
				);
		}else{
			$array=array('baris'=>0);
		}
	
		$this->output->set_output(json_encode($array));
	}
    function simpan(){
        $idProyek			= trim($this->input->post('proyekId'));
        $namaRumah		    = trim($this->input->post('namaRumah'));
        $luasRumah		    = str_replace(',', '', trim($this->input->post('luasRumah')));
        $hargaRumah		    = str_replace(',', '', trim($this->input->post('hargaRumah')));
               
        $modelidrumah = $this->master_rumah_m->getIdRumah();
        $data = array(
            'id_rumah'		      		=>$modelidrumah,
            'id_proyek'		      		=>$idProyek,
            'nama_rumah'		        =>$namaRumah,
            'luas'		        =>$luasRumah,
            'harga'		        =>$hargaRumah
        );
        $model = $this->master_rumah_m->simpan($data);
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
    	$rumahId			= trim($this->input->post('rumahId'));
    	$idProyek			= trim($this->input->post('proyekId'));
        $namaRumah		    = trim($this->input->post('namaRumah'));
        $luasRumah		    = str_replace(',', '', trim($this->input->post('luasRumah')));
        $hargaRumah		    = str_replace(',', '', trim($this->input->post('hargaRumah')));
    	 
    	$data = array(
            'id_proyek'		      		=>$idProyek,
            'nama_rumah'		        =>$namaRumah,
            'luas'		        =>$luasRumah,
            'harga'		        =>$hargaRumah
        );
    	
    	$model = $this->master_rumah_m->ubah($data,$rumahId);
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
    	$rumahId			= trim($this->input->post('idRumah'));
        $model = $this->master_rumah_m->hapus( $rumahId);
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
        
    	//$cekMasterAdv	= $this->master_rumah_m->cekMasterAdvance($kywId);
//    	$cekMasterReqpay	= $this->master_rumah_m->cekMasterReqpay($kywId);
//    	$cekMasterReimpay	= $this->master_rumah_m->cekMasterReimpay($kywId);
    	/**
 * if($cekMasterAdv == true && $cekMasterReqpay ==true && $cekMasterReimpay ==true){
 *     		$model = $this->master_rumah_m->deleteProyek( $kywId);
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