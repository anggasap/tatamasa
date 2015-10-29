
<!-- BEGIN PAGE BREADCRUMB -->
<!--

-->
<!-- END PAGE BREADCRUMB -->
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<!-- KONTEN DI SINI YA -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs  font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Master Cash Flow </span>
                </div>
                <div class="actions">
                    <a href="javascript:;" class="btn btn-default btn-sm" onclick="cetak();">
					<i class="fa fa-print"></i> Cetak </a>
					<a class="btn btn-icon-only btn-default btn-sm fullscreen" href="javascript:;" data-original-title="" title="">
					</a>
				</div>
                
            </div>
            <div class="portlet-body">
                <div>
                	<span id="event_result">
                    
                    </span>
                </div>
                <form role="form" method="post" 
                      action="<?php echo base_url('master_cflow/home'); ?>" id="id_formCflow">
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-4">
								<div class="form-group">
                                    <label>Sub cflow </label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_kodeCflowRoot" required="required" class="form-control"
                                                   type="text" name="kodeCflowRoot" readonly/>
                                        </div>
                                    	<span class="input-group-btn">
                                        	<a href="#" class="btn btn-success" data-target="#idDivTabelPerk"
                                           id="id_btnModal" data-toggle="modal">
                                            <i class="fa fa-search fa-fw"/></i>
                                            
                                        	</a>
                                    	</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kode Cash Flow Alternatif</label>
                                            <input id="id_kodeAltRoot" required="required" class="form-control"
                                                   type="text" name="kodeAltRoot" readonly/>
                                </div>
                                <div class="form-group">
                                	<label>Nama Cash flow</label>
									<input id="id_namaCflowRoot" required="required" class="form-control"
                                                   type="text" name="namaCflowRoot" readonly/>
                                </div>
                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-md-4">
                                			<label>Level Perk</label>
                                			<input id="id_lvlCflowRoot" required="required" class="form-control"
                                                   type="text" name="lvlCflowRoot" readonly/>
                                		</div>
                                		<div class="col-md-4">
                                			<label>Type Cflow </label>
                                			<input id="id_typeCflowRoot" required="required" class="form-control"
                                                   type="text" name="typeCflowRoot" readonly/>
                                		</div>
                                		<div class="col-md-4">
                                			<!-- <label>DK Perk </label>
                                			<input id="id_dkPerkRoot" required="required" class="form-control"
                                                   type="text" name="typePerkRoot" readonly/> -->
                                		</div>
                                	</div>
                                </div>
                                
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kode Cflow</label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_kodeCflow" required="required" class="form-control"
                                                   type="text" name="kodeCflow"/>
                                        </div>
                                    	<span class="input-group-btn">
                                        	<a href="#" class="btn btn-success" data-target="#idDivTabelPerk"
                                           id="id_btnModal2" data-toggle="modal">
                                            <i class="fa fa-search fa-fw"/></i>
                                            
                                        	</a>
                                    	</span>
                                    </div>
                                            
                                </div>
                                <div class="form-group">
                                    <label>Kode Cflow Alternatif</label>
                                            <input id="id_kodeAlt" required="required" class="form-control"
                                                   type="text" name="kodeAlt" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <label>Nama Cflow</label>
                                            <input id="id_namaCflow" required="required" class="form-control"
                                                   type="text" name="namaCflow" placeholder=""/>
                                </div>
                                
                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-md-4">
                                			<label>Level Cflow</label>
                                			<input id="id_lvlCflow" required="required" class="form-control"
                                                   type="text" name="lvlCflow" readonly/>
                                		</div>
                                		<div class="col-md-4">
                                			<label>Type Cflow</label>
                                			<input id="id_typeCflow" required="required" class="form-control"
                                                   type="text" name="typeCflow" value="D" readonly/>
                                		</div>
                                		<div class="col-md-4">
                                			<!-- <label>DK Perk</label>
                                			<input id="id_dkPerk" required="required" class="form-control"
                                                   type="text" name="dkPerk" readonly/> -->
                                		</div>
                                	</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
						<!-- HIDDEN INPUT -->
						<input type="text" id="idTmpAksiBtn" class="hidden">
						<input type="text" id="idTmpModalBtn" class="hidden">
						<!-- END HIDDEN INPUT -->

                    </div>
                    <!--END ROW 1 -->
                    <!-- ROW 2 -->
                     
                    <!--END ROW 2 -->
                    <!-- ROW 3 -->
                      
                    <!--END ROW 3 -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button name="btnSimpan" class="btn blue" id="id_btnSimpan">
                                    <!--<i class="fa fa-check"></i>--> Simpan
                                </button>
                                <button name="btnUbah" onclick="" class="btn yellow" id="id_btnUbah">
                                    <!--<i class="fa fa-edit"></i>--> Ubah
                                </button>
                                <button name="btnHapus" class="btn red" id="id_btnHapus">
                                    <!--<i class="fa fa-trash"></i>-->
                                    Hapus
                                </button>
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
<!--  MODAL Data Cash FLow -->
<div class="modal fade draggable-modal" id="idDivTabelPerk" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data Cash Flow</h4>
			</div>
			<div class="modal-body">
                    <div class="scroller" style="height:400px; ">
                        <div class="row">
                            <div class="col-md-12">
                                <button id="id_Reload" style="display: none;"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-body">
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelPerk">
                                        <thead>
                                    		<tr>
                                        		<th width='15%' align='left'>Kd Cflow</th>
                                        		<th width='15%' align='left'>Kd Alt</th>
                                        		<th width='50%' align='left'>Nama Perk</th>
                                        		<th width='10%' align='center'>Level</th>
                                        		<th width='10%' align='center'>Type</th>

                                    		</tr>
                                    	</thead>
                                    	<tbody>

                                    	</tbody>
                                    	<tfoot>

                                    	</tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- END ROW-->
                    </div>
                    <!-- END SCROLLER-->
                </div>
                <!-- END MODAL BODY-->
			<div class="modal-footer">
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!--  END  MODAL Cash Flow -->


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
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        //UITree.init();
        TableManaged.init();
        //UIToastr.init();
    });
    //$(function () {
    var judul_menu = $('#id_a_menu_<?php echo $menu_id; ?>').text();
    $('#id_judul_menu').text(judul_menu);
    // MENU OPEN
    $(".menu_root").removeClass('start active open');
    $("#menu_root_<?php echo $menu_parent; ?>").addClass('start active open');
    // END MENU OPEN
    var TableManaged = function () {

        var initTable1 = function () {
            //var table = $('#id_TabelPerk');
            // begin first table
            var table = $('#idTabelPerk').dataTable({
                "ajax": "<?php  echo base_url("/master_cflow/getAllCflow"); ?>",
                "columns": [
                    { "data": "kode_cflow" },
                    { "data": "kode_alt" },
                    { "data": "nama_cflow" },
                    { "data": "level" },
                    { "data": "type" }
                ],
                // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                "language": {
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                    "emptyTable": "No data available in table",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "No entries found",
                    "infoFiltered": "(filtered1 from _MAX_ total entries)",
                    "lengthMenu": "Show _MENU_ entries",
                    "search": "Search:",
                    "zeroRecords": "No matching records found"
                },
                "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                "lengthMenu": [
                    [5, 10, 15, 20, -1],
                    [5, 10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "pageLength": 5,
                "pagingType": "bootstrap_full_number",
                "language": {
                    "search": "Cari: ",
                    "lengthMenu": "  _MENU_ records",
                    "paginate": {
                        "previous":"Prev",
                        "next": "Next",
                        "last": "Last",
                        "first": "First"
                    }
                },
                // "aaSorting": [[4,'desc'], [5,'desc']],
                "columnDefs": [{  // set default column settings
                    'orderable': true,
                    'type'      :'string',
                    'targets': [0]
                }, {
                    "searchable": true,
                    "targets": [0]
                }],
                "order": [
                    [0, "asc"]
                ] // set first column as a default sort by asc
            });

            var tableWrapper = jQuery('#id_TabelPerk_wrapper');

            table.find('.group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                        $(this).parents('tr').addClass("active");
                    } else {
                        $(this).attr("checked", false);
                        $(this).parents('tr').removeClass("active");
                    }
                });
                jQuery.uniform.update(set);
            });
            $('#id_Reload').click(function () {
                table.api().ajax.reload();
            });
            table.on('click', 'tbody tr', function () {
            	var fbtnModal = $('#idTmpModalBtn').val();
            	if(fbtnModal==1){
            		var kodeCflowRoot = $(this).find("td").eq(0).html();
                    $('#id_kodeCflowRoot').val(kodeCflowRoot);
                    var kodeAltRoot = $(this).find("td").eq(1).html();
                    $('#id_kodeAltRoot').val(kodeAltRoot);
                    var namaCflow = $(this).find("td").eq(2).html();
                    $('#id_namaCflowRoot').val(namaCflow);
                    var lvlCflowRoot = $(this).find("td").eq(3).html();
                    $('#id_lvlCflowRoot').val(lvlCflowRoot);
                    var typeCflow = $(this).find("td").eq(4).html();
                    $('#id_typeCflowRoot').val(typeCflow);
                    
                    var lvlCflow = parseInt(lvlCflowRoot) +1;
                    $('#id_lvlCflow').val(lvlCflow);
                    
    				getLastKdCflow(kodeCflowRoot,lvlCflowRoot);
    				
                    $( "#btnCloseModal" ).trigger( "click" );
                    //$("#id_kodeCflow").focus();
                    $("#id_btnModal2").attr("disabled",true);
                }else{
                	var kodeCflow = $(this).find("td").eq(0).html();
                    $('#id_kodeCflow').val(kodeCflow);
                    var kodeAlt = $(this).find("td").eq(1).html();
                    $('#id_kodeAlt').val(kodeAlt);
                    var namaCflow = $(this).find("td").eq(2).html();
                    $('#id_namaCflow').val(namaCflow);
                    var lvlCflow = $(this).find("td").eq(3).html();
                    $('#id_lvlCflow').val(lvlCflow);
                    var typeCflow = $(this).find("td").eq(4).html();
                    $('#id_typeCflow').val(typeCflow);
                    
                	$("#id_btnModal").attr("disabled",true);
                	$('#id_kodeCflow').attr("readonly",true);

                	$('#id_btnSimpan').attr("disabled",true);
                	$('#id_btnUbah').attr("disabled",false);
                    $('#id_btnHapus').attr("disabled",false);
                    
                	$( "#btnCloseModal" ).trigger( "click" );
                }
            });

            tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
        }

        return {
            //main function to initiate the module
            init: function () {
                if (!jQuery().dataTable) {
                    return;
                }
                initTable1();
            }
        };
    }();
    
    //Ready Doc
    btnStart();
    readyToStart();
    //
	/* $("#id_namaKyw").focus(); */
    /*$('#idDivTabelPerk').on('shown.bs.modal', function (e) {
        $("#id_kodeCflow").focus();
    });*/
    	
	$( "#id_btnSimpan" ).click(function() {
		$('#idTmpAksiBtn').val('1');
	});
	    
	$('#id_btnUbah').click(function(){
		$('#idTmpAksiBtn').val('2');
	});
	$('#id_btnHapus').click(function(){
		$('#idTmpAksiBtn').val('3');
	});
	$('#id_btnBatal').click(function(){
		btnStart();
		resetForm();
		readyToStart();
		$('#id_typeCflow').val('D');
		$( "#id_kodeCflow" ).attr("readonly",false);
		$("#id_btnModal").attr("disabled",false);
		$("#id_btnModal2").attr("disabled",false);
	});
	$( "#id_kodeCflowRoot" ).focusout(function() {
		var kodeCflowRoot	= $(this).val();
		var lvlCflowRoot	= $('#id_lvlCflowRoot').val();
		getLastKdCflow(kodeCflowRoot,lvlCflowRoot);
	});
	$('#id_btnModal').click(function(){
		$('#idTmpModalBtn').val('1');
	});
	$('#id_btnModal2').click(function(){
		$('#idTmpModalBtn').val('2');
	});
    function cetak(){
			window.open("<?php echo base_url('master_cflow/cetak'); ?>", '_blank');	
	}
	function getLastKdCflow(kodeCflowRoot,lvlCflowRoot){
		ajaxModal();
		if (kodeCflowRoot != '') {
			$.post("<?php echo site_url('/master_cflow/getLastKdCflow'); ?>",
			{
				'kodeCflowRoot': kodeCflowRoot,
				'lvlCflowRoot': lvlCflowRoot
			},function (data) {
					$('#id_kodeCflow').val(data.kdCflow);
			}, "json");
		}//if kd<>''
	}
	function ajaxSubmit(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_cflow/simpan",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				readyToStart();
				UIToastr.init(data.tipePesan,data.pesan);
			}
	
		});
		event.preventDefault();
	}
	function ajaxUbah(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_cflow/ubah",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				UIToastr.init(data.tipePesan,data.pesan);
			}
	
		});
		event.preventDefault();
	}
	function ajaxHapus(){
		ajaxModal();
		var idCflow	= $('#id_kodeCflow').val();
		idCflow		= idCflow.trim();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_cflow/hapus",
			data:{idCflow : idCflow},
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				UIToastr.init(data.tipePesan,data.pesan);				
			}
	
		});
		event.preventDefault();
	}
    $('#id_formCflow').submit(function (event) {
		dataString = $("#id_formCflow").serialize();
        var aksiBtn       = $('#idTmpAksiBtn').val();
        if(aksiBtn == '1'){
        	var r = confirm('Anda yakin menyimpan data ini?');
			 if (r== true){
				ajaxSubmit();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '2'){ 
        	var r = confirm('Anda yakin merubah data ini?');
			 if (r== true){
				 ajaxUbah();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '3'){
        	var r = confirm('Anda yakin menghapus data ini?');
			 if (r== true){
				 ajaxHapus();
			 }else{//if(r)
				return false;
			}
        }
    }); 
    
</script>


<!-- END JAVASCRIPTS -->