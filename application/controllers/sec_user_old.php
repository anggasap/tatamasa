<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sec_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('home_m');
        $this->load->model('konfigurasi_menu_status_user_m');
		$this->load->model('sec_user_m');
		session_start ();
	}
	public function index(){
		if($this->auth->is_logged_in () == false){
			$this->login();
		}else{
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
			
			//$data ['nama'] = $this->home_m->get_nama_kantor ();
			$this->template->set ( 'title', 'home' );
			$this->template->load ( 'template/template1', 'global/index',$data );
		}
		
	}
	
	function home(){
		$menuId = $this->home_m->get_menu_id('sec_user/home');
		$data['menu_id'] = $menuId[0]->menu_id;
		$data['menu_parent'] = $menuId[0]->parent;
		$this->auth->restrict ($data['menu_id']);
		$this->auth->cek_menu ( $data['menu_id'] );
        $data['status_user'] = $this->konfigurasi_menu_status_user_m->get_status_user();
        //$data['level_user'] = $this->sec_user_m->get_level_user();
		if(isset($_POST["btnSimpan"])){
			$this->simpan();
		}elseif(isset($_POST["btnUbah"])){
			$this->ubah();
		}elseif(isset($_POST["btnHapus"])){
			$this->hapus();
		}else{
			$data['multilevel'] = $this->user_m->get_data(0,$this->session->userdata('usergroup'));
			$data['menu_all'] = $this->user_m->get_menu_all(0);
			
			$this->template->set ( 'title', 'Konfigurasi User' );
			$this->template->load ( 'template/template3', 'admin/sec_user_v',$data );
		}
	}
	public function getUserInfo(){
		$this->CI =& get_instance();//and a.kcab_id<>'1100'
		$rows = $this->sec_user_m->getUserInfo();
		$data['data'] = array();
		foreach( $rows as $row ) {
			$passwd = base64_decode($row->password);
			$array = array(
					'userid' => trim($row->userid),
					'username' => trim($row->username),
					'userfullname' =>  trim($row->userfullname),
					'passwd'	=> $passwd,
					'usergroup'    => trim($row->usergroup)
			);
	
			array_push($data['data'],$array);
		}
		$this->output->set_output(json_encode($data));
	}
    function simpan(){
        $userName			= trim($this->input->post('userName'));
        $userFullName		= trim($this->input->post('userNameFull'));
        $password			= base64_encode(trim($this->input->post('kataKunci')));
        $groupUser			= trim($this->input->post('userGroup'));
       
        $data = array(
            'userid'		      		=>'0',
            'username'		        	=>$userName,
            'userfullname'		        =>$userFullName,
            'password'		        	=>$password,
            'status_password'		    =>0,
            'tgl_password'		    	=>'1970-01-01',
        	'usergroup'					=>$groupUser
        );
        $model = $this->sec_user_m->insertUser($data);
        if($model){
        	$array = array(
        			'act'	=>1,
        			'notif' =>'<div class="Metronic-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data berhasil disimpan.</div>'
        	);
        }else{
        	$array = array(
        			'act'	=>0,
        			'notif' =>'<div class="Metronic-alerts alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data gagal disimpan.</div>'
        	);
        }
        $this->output->set_output(json_encode($array));
    }
    function ubah(){
    	$userId			= trim($this->input->post('userId'));
    	$userName			= trim($this->input->post('userName'));
    	$userFullName		= trim($this->input->post('userNameFull'));
    	$password			= base64_encode(trim($this->input->post('kataKunci')));
    	$groupUser			= trim($this->input->post('userGroup'));
    	 
    	$data = array(
    			'username'		        	=>$userName,
    			'userfullname'		        =>$userFullName,
    			'password'		        	=>$password,
    			'status_password'		    =>0,
    			'tgl_password'		    	=>'1970-01-01',
    			'usergroup'					=>$groupUser
    	);
    	
    	$model = $this->sec_user_m->updateUser($data,$userId);
    	if($model){
    		$array = array(
    				'act'	=>1,
    				'notif' =>'<div class="Metronic-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data berhasil diubah.</div>'
    		);
    	}else{
    		$array = array(
    				'act'	=>0,
    				'notif' =>'<div class="Metronic-alerts alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data gagal diubah.</div>'
    		);
    	}
    	$this->output->set_output(json_encode($array));
    }
    function hapus(){
    	$this->CI =& get_instance();
    	$userId = $this->input->post ( 'userId', TRUE );
    	$model = $this->sec_user_m->deleteUser( $userId);
    	if($model){
    		$array = array(
    				'act'	=>1,
    				'notif' =>'<div class="Metronic-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data berhasil dihapus.</div>'
    		);
    	}else{
    		$array = array(
    				'act'	=>0,
    				'notif' =>'<div class="Metronic-alerts alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Data gagal dihapus.</div>'
    		);
    	}
    	$this->output->set_output(json_encode($array));
    }
	

}

/* End of file sec_user.php */
/* Location: ./application/controllers/sec_user.php */