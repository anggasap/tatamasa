<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Auth library
 */
class Auth{
   var $CI = NULL;
   function __construct(){
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk validasi login
   function do_login($username, $password,$tgl_d,$tgl_y,$nama_kantor){
		$password =base64_encode($password);
      // cek di database, ada ga?
	  $this->CI->db->select( 'p.userid,p.username,p.userfullname,p.usergroup,u.usergroup_desc' );
      $this->CI->db->from('sec_passwd p');
      $this->CI->db->join('sec_usergroup u','p.usergroup=u.usergroup_id');
      $this->CI->db->where('p.username',$username);
      $this->CI->db->where('p.password',$password);
      $result = $this->CI->db->get();
	  
      if($result->num_rows() == 0){
         // username dan password tsb tidak ada
         return false;
      }else{
         // ada, maka ambil informasi dari database
         $userdata = $result->row();
         $session_data = array(
            'id_user'   		=> $userdata->userid,
            'namaInisial'      => $userdata->username,
			'namaFull'      	=> $userdata->userfullname,
            'usergroup'     	=> $userdata->usergroup,
         	'usergroup_desc'     	=> $userdata->usergroup_desc,
			'tgl_y'     		=> $tgl_y,
			'tgl_d'     		=> $tgl_d
         );
         // buat session
         $this->CI->session->set_userdata($session_data);
         
         $sesJS = array(
         		'jqueryJS'  => '<script src="'.base_url('metronic/global/plugins/jquery.min.js').'"></script>',
         		'jquery-migrateJS'  => '<script src="'.base_url('metronic/global/plugins/jquery-migrate.min.js').'"></script>',
         		'jquery-uiJS'  => '<script src="'.base_url('metronic/global/plugins/jquery-ui/jquery-ui.min.js').'"></script>',
         		'bootstrapJS'  => '<script src="'.base_url('metronic/global/plugins/bootstrap/js/bootstrap.min.js').'"></script>',
         		'bootstrap-hover-dropdownJS'  => '<script src="'.base_url('metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js').'"></script>',
         		'jquery-slimscrollJS'  => '<script src="'.base_url('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js').'"></script>',
         		'jquery-blockuiJS'  => '<script src="'.base_url('metronic/global/plugins/jquery.blockui.min.js').'"></script>',
         		'jquery-cokieJS'  => '<script src="'.base_url('metronic/global/plugins/jquery.cokie.min.js').'"></script>',
         		'jquery-uniformJS'  => '<script src="'.base_url('metronic/global/plugins/uniform/jquery.uniform.min.js').'"></script>',
         		'bootstrap-switchJS'  => '<script src="'.base_url('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js').'"></script>',
         		'toastrJS'  => '<script src="'.base_url('metronic/global/plugins/bootstrap-toastr/toastr.min.js').'"></script>',
         		'select2JS'  => '<script src="'.base_url('metronic/global/plugins/select2/select2.min.js').'"></script>',
         		'jquery-dataTablesJS'  => '<script src="'.base_url('metronic/global/plugins/datatables/media/js/jquery.dataTables.min.js').'"></script>',
         		'dataTables-bootstrapJS'  => '<script src="'.base_url('metronic/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js').'"></script>',
         		'metronicJS'  => '<script src="'.base_url('metronic/global/scripts/metronic.js').'"></script>',
         		'layoutJS'  => '<script src="'.base_url('metronic/admin/layout4/scripts/layout.js').'"></script>',
         		'demoJS'  => '<script src="'.base_url('metronic/admin/layout4/scripts/demo.js').'"></script>',
                //'compPickersJS'  => '<script src="'.base_url('metronic/admin/pages/scripts/components-pickers.js').'"></script>'
         		
         		/* 'JS'  => '<script src="'.base_url('').'"></script>' */
         );
         
         $this->CI->session->set_userdata($sesJS);
         
         $sesCS = array(
         		'fontAwesomeCS'  => '<link href="'.base_url('metronic/global/plugins/font-awesome/css/font-awesome.min.css').'" rel="stylesheet" type="text/css">',
         		'simpleLineIconsCS'  => '<link href="'.base_url('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css').'" rel="stylesheet" type="text/css">',
         		'bootstrapCS'  => '<link href="'.base_url('metronic/global/plugins/bootstrap/css/bootstrap.min.css').'" rel="stylesheet" type="text/css">',
         		'uniformDefaultCS'  => '<link href="'.base_url('metronic/global/plugins/uniform/css/uniform.default.css').'" rel="stylesheet" type="text/css">',
         		'bootstrapSwitchCS'  => '<link href="'.base_url('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css').'" rel="stylesheet" type="text/css">',
         		'select2CS'  => '<link href="'.base_url('metronic/global/plugins/select2/select2.css').'" rel="stylesheet" type="text/css">',
         		'datepicker3CS'  => '<link href="'.base_url('metronic/global/plugins/bootstrap-datepicker/css/datepicker3.css').'" rel="stylesheet" type="text/css">',
         		'dataTablesCS'  => '<link href="'.base_url('metronic/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css').'" rel="stylesheet" type="text/css">',
         		'toastrCS'  => '<link href="'.base_url('metronic/global/plugins/bootstrap-toastr/toastr.min.css').'" rel="stylesheet" type="text/css">',
         		'componentsRoundedCS'  => '<link href="'.base_url('metronic/global/css/components-rounded.css').'" rel="stylesheet" type="text/css">',
         		'pluginsCS'  => '<link href="'.base_url('metronic/global/css/plugins.css').'" rel="stylesheet" type="text/css">',
         		'layoutCS'  => '<link href="'.base_url('metronic/admin/layout4/css/layout.css').'" rel="stylesheet" type="text/css">',
         		'lightCS'  => '<link href="'.base_url('metronic/admin/layout4/css/themes/light.css').'" rel="stylesheet" type="text/css">',
         		'customCS'  => '<link href="'.base_url('metronic/admin/layout4/css/custom.css').'" rel="stylesheet" type="text/css">'
         		
         );
         $this->CI->session->set_userdata($sesCS);
         return true;
      }
   }
   
   // untuk mengecek apakah user sudah login/belum
   function is_logged_in(){
      if($this->CI->session->userdata('id_user') == ''){
         return false;
      }
      return true;
   }
   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict(){
      if($this->is_logged_in() == false){
         redirect('main/login');
      }
   }
   
   // untuk mengecek menu
  function cek_menu($idmenu){
	 $this->CI->load->model('user_m');
	 $status_user = $this->CI->session->userdata('usergroup');
	 $allowed_level = $this->CI->user_m->get_array_menu($idmenu);
	 if(in_array($status_user,$allowed_level) == false){
		die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
	 }
  }
  
  // untuk logout
  function do_logout(){
	 $this->CI->session->sess_destroy();
	 session_destroy();
  }
}