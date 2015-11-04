<!-- BEGIN PAGE BREADCRUMB -->
<!--

-->
<!-- END PAGE BREADCRUMB -->
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<!-- KONTEN DI SINI YA -->
<div class="row">
    <div class="col-md-6">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs  font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Daftar Advance Request</span>
                </div>
                <div class="actions">
					<a class="btn btn-icon-only btn-default btn-sm fullscreen" href="javascript:;" data-original-title="" title="">
					</a>
				</div>
                
            </div>
            <div class="portlet-body">
                <div>
                	<span id="event_result">
                    
                    </span>
                </div>
                <form role="form" method="post" id="id_laporanRkp_adv">
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Awal</label>
									<input id="id_tanggalAwal" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" class="form-control date-picker input-sm" type="text" name="tanggalAwal" />                                                   
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Akhir</label>
									<input id="id_tanggalAkhir" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" class="form-control date-picker input-sm" type="text" name="tanggalAkhir" />                                                   
                                </div>
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                            	
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                <a href="javascript:;" class="btn blue btn-medium" onclick="cetak();">
								<i class="fa fa-print"></i> Cetak </a>
								<a href="javascript:;" class="btn blue btn-medium" onclick="save();">
								<i class="fa fa-print"></i> Save Excel</a>
								<button id="id_btnBatal" type="button" class="btn default">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end <div class="portlet green-meadow box"> -->
    </div>
    <!-- end <div class="col-md-6"> -->
    <!--
    <div class="col-md-6">
    </div>
    -->
    <!-- end <div class="col-md-6"> -->
</div>
<div class="row">
    <div class="col-md-6">

    </div>
</div>

<!-- END PAGE CONTENT-->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('metronic/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<?php echo  $this->session->userdata('jqueryJS'); ?>
<?php echo  $this->session->userdata('jquery-migrateJS'); ?>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo  $this->session->userdata('jquery-uiJS'); ?>
<?php echo  $this->session->userdata('bootstrapJS'); ?>
<?php echo  $this->session->userdata('bootstrap-hover-dropdownJS'); ?>
<?php echo  $this->session->userdata('jquery-slimscrollJS'); ?>
<?php echo  $this->session->userdata('jquery-blockuiJS'); ?>
<?php echo  $this->session->userdata('jquery-cokieJS'); ?>
<?php echo  $this->session->userdata('jquery-uniformJS'); ?>
<?php echo  $this->session->userdata('bootstrap-switchJS'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo  $this->session->userdata('toastrJS'); ?>
<?php echo  $this->session->userdata('select2JS'); ?>
<?php echo  $this->session->userdata('jquery-dataTablesJS'); ?>
<?php echo  $this->session->userdata('dataTables-bootstrapJS'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END CORE PLUGINS -->
<?php echo  $this->session->userdata('metronicJS'); ?>
<?php echo  $this->session->userdata('layoutJS'); ?>
<?php echo  $this->session->userdata('demoJS'); ?>
<script src="<?php echo base_url('metronic/additional/start.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        //UITree.init();
        //TableManaged.init();
        //UIToastr.init();
    });
    //$(function () {
    var judul_menu = $('#id_a_menu_<?php echo $menu_id; ?>').text();
    $('#id_judul_menu').text(judul_menu);
    // MENU OPEN
    $(".menu_root").removeClass('start active open');
    $("#menu_root_<?php echo $menu_parent; ?>").addClass('start active open');
    // END MENU OPEN   
    $('.date-picker').datepicker({
                rtl: Metronic.isRTL(),
                orientation: "left",
                autoclose: true
    });
    //Ready Doc
    btnStart();
 	$( "#id_btnSimpan" ).click(function() {
		$('#idTmpAksiBtn').val('1');
	});
	    
	$('#id_btnBatal').click(function(){
		btnStart();
		resetForm();
	});
		
	function cetak(){
		var tglAwal = $('#id_tanggalAwal').val();
		var tglAkhir = $('#id_tanggalAkhir').val();
		if(tglAwal == ''){
			alert('Silahkan pilih tanggal awal');
			return false;
		}
		if(tglAkhir == ''){
			alert('Silahkan pilih tanggal akhir');
			return false;
		}else{
			window.open("<?php echo base_url('laporan_rekap_adv/cetak/'); ?>/"+tglAwal+"/"+tglAkhir, '_blank');	
		}
	}
    
	function save(){
		var tglAwal = $('#id_tanggalAwal').val();
		var tglAkhir = $('#id_tanggalAkhir').val();
		if(tglAwal == ''){
			alert('Silahkan pilih tanggal awal');
			return false;
		}
		if(tglAkhir == ''){
			alert('Silahkan pilih tanggal akhir');
			return false;
		}else{
			window.open("<?php echo base_url('laporan_rekap_adv/cetak_excel/'); ?>/"+tglAwal+"/"+tglAkhir, '');	
		}
	}	
    
</script>


<!-- END JAVASCRIPTS -->