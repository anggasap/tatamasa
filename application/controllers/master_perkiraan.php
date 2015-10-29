
<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_perkiraan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_perkiraan_m');
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
		$menuId = $this->home_m->get_menu_id('master_perkiraan/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$data['menu_nama'] = $menuId[0]->menu_nama;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
        //$data['dept'] = $this->master_perkiraan_m->get_dept();
       
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
			$this->template->load ( 'template/template3', 'master/master_perkiraan_v',$data );
		}
	}
	public function getAllPerkiraan(){
        $this->CI =& get_instance();//and a.kcab_id<>'1100'
        $rows = $this->master_perkiraan_m->getAllPerkiraan();
        $data['data'] = array();
        foreach( $rows as $row ) {
            $array = array(
                'kode_perk' => $row->kode_perk,
            	'kode_alt' => $row->kode_alt,
                'nama_perk' => $row->nama_perk,
            	'level' => $row->level,
                'type' => $row->type,
            	'dk'	=>	$row->dk
            );
            array_push($data['data'],$array);
        }
        //echo json_encode($data['data']);
        $this->output->set_output(json_encode($data));
    }
    
	public function getLastKdPerk(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$kdPerkRoot	= trim($this->input->post('kodePerkRoot'));
		$lvlPerkRoot	= trim($this->input->post('lvlPerkRoot'));
		$lvlPerk = $lvlPerkRoot+1; 
		/* $typePerkRoot	= trim($this->input->post('typePerkRoot')); */
		$mLastKdPerk = $this->master_perkiraan_m->getLastKdPerk($kdPerkRoot,$lvlPerk);
		/* if($mLastKdPerk){
			$kdPerk = trim($mLastKdPerk[0]->kdPerk)+1;
		}else{
			$kdPerk = $kdPerk.'01'; 
		} */
		$array = array(
				'kdPerk' => $mLastKdPerk
		);
		
		$this->output->set_output(json_encode($array));
	}
	
	
    function simpan(){
        $kdPerkRoot		= trim($this->input->post('kodePerkRoot'));
        $kdPerk			= trim($this->input->post('kodePerk'));
        $kdAlt			= trim($this->input->post('kodeAlt'));
        $namaPerk		= trim($this->input->post('namaPerk'));
        $lvlPerk		= trim($this->input->post('lvlPerk'));
        $typePerk		= trim($this->input->post('typePerk'));
        $dkPerk			= trim($this->input->post('dkPerk'));
        //$ket			= trim($this->input->post(''));
        
        $data = array(
            'kode_perk'		      		=>$kdPerk,
            'kode_alt'		        	=>$kdAlt,
            'nama_perk'		        	=>$namaPerk,
        	'kode_induk'		        =>$kdPerkRoot,
        	'level'		        		=>$lvlPerk,
        	'type'		    			=>$typePerk,
        	'dk'						=>$dkPerk
//        		''		        	=>$,
        );
        $model = $this->master_perkiraan_m->insert($data);
        
        $data = array(	
        		'type'		    			=>'G'
        		//        		''		        	=>$,
        );
        $model2 = $this->master_perkiraan_m->updateTipe($data,$kdPerkRoot);
        if($model && $model2){
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
    	$kdPerk			= trim($this->input->post('kodePerk'));
    	$kdAlt			= trim($this->input->post('kodeAlt'));
        $namaPerk		= trim($this->input->post('namaPerk'));
        
        $data = array(
        	'kode_alt'		        	=>$kdAlt,
            'nama_perk'		        	=>$namaPerk
        );
    	$model = $this->master_perkiraan_m->update($data,$kdPerk);
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
    	$kdPerk			= trim($this->input->post('idPerk'));
    	$cekSaldoKodePerk = $this->master_perkiraan_m->cekSaldoKodePerk( $kdPerk);
    	if($cekSaldoKodePerk[0]->saldo > 0){
    		$array = array(
    				'act'	=>0,
    				'tipePesan'=>'error',
    				'pesan' =>'Data gagal dihapus.<br/> Kode Perk mempunyai saldo.'
    		);
    	}else{
    		$cekTipeKodePerk = $this->master_perkiraan_m->cekTipeKodePerk( $kdPerk);
    		if($cekTipeKodePerk[0]->type == 'G'){
    			$array = array(
    					'act'	=>0,
    					'tipePesan'=>'error',
    					'pesan' =>'Data gagal dihapus.<br/> Kode Perk induk tidak dapat dihapus .'
    			);
    		}else if($cekTipeKodePerk[0]->type == 'D'){
    			$model = $this->master_perkiraan_m->delete( $kdPerk);
    			
    			if($model){
    				$kodePerkRoot = substr($kdPerk,0,-2);
    				$cekJmlKodeInduk = $this->master_perkiraan_m->cekJmlKodeInduk( $kodePerkRoot);// cek kode induk punya anak berapa buah
    				if($cekJmlKodeInduk== 0 ){
    					
    					 $data = array(
    					 'type'		    			=>'D'
    					 );
    					 $model2 = $this->master_perkiraan_m->updateTipe($data,$kodePerkRoot); 
    				}
    				$array = array(
    						'act'	=>1,
    						'tipePesan'=>'success',
    						'pesan' =>'Data berhasil dihapus. '//.$cekJmlKodeInduk
    				);
    			}else{
    				$array = array(
    						'act'	=>0,
    						'tipePesan'=>'error',
    						'pesan' =>'Data gagal dihapus.'
    				);
    			}	
    		}else{
    		  $array = array(
    						'act'	=>0,
    						'tipePesan'=>'error',
    						'pesan' =>'Data gagal dihapus.<br> Tipe kode perkiraan tidak ditemukan.'
    				);
    		}
    			
    	}  	
    	$this->output->set_output(json_encode($array));
    }
    function updatekodeinduk(){
    	$this->master_perkiraan_m->updatekodeinduk();
    }
    function cetak(){
		if($this->auth->is_logged_in() == false){
    		redirect('main/index');
    	}else{
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			$data['image1'] = base_url('metronic/img/tatamasa_logo.jpg');	
			$data['nama'] = 'PT BERKAH GRAHA MANDIRI';
			$data['tower'] = 'Beltway Office Park Tower Lt. 5';
			$data['alamat'] = 'Jl. TB Simatung No. 41 - Pasar Minggu - Jakarta Selatan';
			$data['laporan'] = 'Laporan Perkiraan';
			$data['user'] = $this->session->userdata('username');
			$data['all'] = $this->master_perkiraan_m->getAllPerkiraan();
			$this->load->view('cetak/cetak_perkiraan_b',$data);
    	}
	}
}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */