
<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_cflow extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
		$this->load->model('master_cflow_m');
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
		$menuId = $this->home_m->get_menu_id('master_cflow/home');
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
			$this->template->load ( 'template/template3', 'master/master_cflow_v',$data );
		}
	}
	public function getAllCflow(){
        $this->CI =& get_instance();//and a.kcab_id<>'1100'
        $rows = $this->master_cflow_m->getAllCflow();
        $data['data'] = array();
        foreach( $rows as $row ) {
            $array = array(
                'kode_cflow' => $row->kode_cflow,
            	'kode_alt' => $row->kode_alt,
                'nama_cflow' => $row->nama_cflow,
            	'level' => $row->level,
                'type' => $row->type
            );
            array_push($data['data'],$array);
        }
        //echo json_encode($data['data']);
        $this->output->set_output(json_encode($data));
    }
    
	public function getLastKdCflow(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$kdCflowRoot	= trim($this->input->post('kodeCflowRoot'));
		$lvlCflowRoot	= trim($this->input->post('lvlCflowRoot'));
		$lvlCflow = $lvlCflowRoot+1; 
		/* $typePerkRoot	= trim($this->input->post('typePerkRoot')); */
		$mLastKdCflow = $this->master_cflow_m->getLastKdCflow($kdCflowRoot,$lvlCflow);
		
		$array = array(
				'kdCflow' => $mLastKdCflow
		);
		
		$this->output->set_output(json_encode($array));
	}
	
	
    function simpan(){
        $kdCflowRoot		= trim($this->input->post('kodeCflowRoot'));
        $kdCflow			= trim($this->input->post('kodeCflow'));
        $kdAlt			= trim($this->input->post('kodeAlt'));
        $namaCflow		= trim($this->input->post('namaCflow'));
        $lvlCflow		= trim($this->input->post('lvlCflow'));
        $typeCflow		= trim($this->input->post('typeCflow'));
        //$ket			= trim($this->input->post(''));
        
        $data = array(
            'kode_cflow'		      		=>$kdCflow,
            'kode_alt'		        	=>$kdAlt,
            'nama_cflow'		        	=>$namaCflow,
        	'kode_induk'		        =>$kdCflowRoot,
        	'level'		        		=>$lvlCflow,
        	'type'		    			=>$typeCflow
//        		''		        	=>$,
        );
        $model = $this->master_cflow_m->insert($data);
        
        $data = array(	
        		'type'		    			=>'G'
        		//        		''		        	=>$,
        );
        $model2 = $this->master_cflow_m->updateTipe($data,$kdCflowRoot);
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
    	$kdCflow		= trim($this->input->post('kodeCflow'));
    	$kdAlt			= trim($this->input->post('kodeAlt'));
        $namaCflow		= trim($this->input->post('namaCflow'));
        
        $data = array(
        	'kode_alt'		        	=>$kdAlt,
            'nama_cflow'		        =>$namaCflow
        );
    	$model = $this->master_cflow_m->update($data,$kdCflow);
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
    	$kdCflow			= trim($this->input->post('idCflow'));
    	$cekSaldoKodeCflow = $this->master_cflow_m->cekSaldoKodeCflow( $kdCflow);
    	if($cekSaldoKodeCflow[0]->saldo > 0){
    		$array = array(
    				'act'	=>0,
    				'tipePesan'=>'error',
    				'pesan' =>'Data gagal dihapus.<br/> Kode Perk mempunyai saldo.'
    		);
    	}else{
    		$cekTipeKodeCflow = $this->master_cflow_m->cekTipeKodeCflow( $kdCflow);
    		if($cekTipeKodeCflow[0]->type == 'G'){
    			$array = array(
    					'act'	=>0,
    					'tipePesan'=>'error',
    					'pesan' =>'Data gagal dihapus.<br/> Kode Perk induk tidak dapat dihapus .'
    			);
    		}else if($cekTipeKodeCflow[0]->type == 'D'){
    			$model = $this->master_cflow_m->delete( $kdCflow);
    			
    			if($model){
    				$kodeCflowRoot = substr($kdCflow,0,-2);
    				$cekJmlKodeInduk = $this->master_cflow_m->cekJmlKodeInduk( $kodeCflowRoot);// cek kode induk punya anak berapa buah
    				if($cekJmlKodeInduk== 0 ){
    					
    					 $data = array(
    					 'type'		    			=>'D'
    					 );
    					 $model2 = $this->master_cflow_m->updateTipe($data,$kodeCflowRoot); 
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
    						'pesan' =>'Data gagal dihapus.<br> Tipe kode cash flow tidak ditemukan.'
    				);
    		}
    			
    	}
    	
    	
    	$this->output->set_output(json_encode($array));
    }
    
    function updatekodeinduk(){
    	$this->master_cflow_m->updatekodeinduk();
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
			$data['laporan'] = 'Laporan Cash Flow';
			$data['user'] = $this->session->userdata('username');
			$data['all'] = $this->master_cflow_m->getAllCflow();
			$this->load->view('cetak/cetak_cashflow',$data);
    	}
	}
}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */