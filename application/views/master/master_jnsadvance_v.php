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
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Jenis Advance</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="fullscreen">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div>
                	<span id="event_result">
                    
                    </span>
                </div>
                <form role="form" method="post" class="cls_from_jnsadv"
                      action="<?php echo base_url('master_jnsadvance/home'); ?>" id="id_formJnsAdv">
                    <div class="row">

                        <div class="form-body">
                            <div class="col-md-12">
								<div class="form-group">
                                    <div class="row">
    									<div class="col-md-6">
                                            <label>Kode account </label>
                                            <div class="input-group">
                                                <div class="input-icon">
                                                    <i class="fa fa-list fa-fw"></i>
                                                    <input id="id_jnsadvId" required="required" class="form-control"
                                                   type="text" name="jnsadvId" readonly/>
                                                </div>
                                                <span class="input-group-btn">
                                                    <a href="#" class="btn btn-success" data-target="#idDivTabelJnsadv"
                                                    id="id_btnModal" data-toggle="modal">
                                                    <i class="fa fa-search fa-fw"/></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>    
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label>Nama account</label>
                                        
                                            <input id="id_namaJnsadv" required="required" class="form-control"
                                                   type="text" name="namaJnsadv"/>
                                        
                                </div>
                                <div class="form-group">
                                    <label>No rek bank</label>
                                    <input id="id_norekBank" required="required" class="form-control"
                                                   type="text" name="norekBank"/>
                                </div>
                                <div class="form-group">
                                    <div class="row">
    									<div class="col-md-6">
                                            <label>No rek GL</label>
                                            <div class="input-group">
                                                <div class="input-icon">
                                                    <i class="fa fa-list fa-fw"></i>
                                                    <input id="id_GL" required="required" class="form-control "
                                                   type="text" name="GL" readonly/>
                                                </div>
                                                <span class="input-group-btn">
                                                    <a href="#" class="btn btn-success" data-target="#idDivTabelPerk"
                                           id="id_btnModal" data-toggle="modal">
                                                    <i class="fa fa-search fa-fw"/></i>
                                           
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-group">    
                                            <input id="id_namaGL" readonly class="form-control"
                                                   type="text" name="namaGL"/>
                                </div>
                                                                
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <!--
<div class="col-md-6">
                                
                            </div>
-->
                        </div>
						<!-- HIDDEN INPUT -->
						<input type="text" id="idTmpAksiBtn" class="hidden">
						<!-- END HIDDEN INPUT -->

                    </div>
                    <!--END ROW 1 -->
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
                                <button id="id_btnBatal" type="reset" class="btn default">Batal</button>
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
<!--  MODAL Data Karyawan -->
<div class="modal fade draggable-modal" id="idDivTabelJnsadv" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data Account Advance</h4>
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
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelJnsadv">
                                        <thead>
                                        <tr>
                                            <th>
                                                Kode account 
                                            </th>
                                            <th>
                                                Nama account
                                            </th> 
                                            <th>
                                                No Rek Bank
                                            </th>
                                            <th>
                                                Kode GL
                                            </th>                                           
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
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalJnsAdv">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!--  END  MODAL Data Karyawan -->
<!--  MODAL Data Karyawan -->
<div class="modal fade draggable-modal" id="idDivTabelPerk" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data Perkiraan</h4>
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
                                        		<th width='10%' align='left'>Kd Perk</th>
                                        		<th width='10%' align='left'>Kd Alt</th>
                                        		<th width='50%' align='left'>Nama Perk</th>
                                        		<th width='10%' align='center'>Level</th>
                                        		<th width='10%' align='center'>Type</th>
                                        		<th width='10%' align='center'>DK</th>
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
<!--  END  MODAL Data Karyawan -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('metronic/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<?php echo $this->session->userdata('jqueryJS'); ?>
<?php echo $this->session->userdata('jquery-migrateJS'); ?>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo $this->session->userdata('jquery-uiJS'); ?>
<?php echo $this->session->userdata('bootstrapJS'); ?>
<?php echo $this->session->userdata('bootstrap-hover-dropdownJS'); ?>
<?php echo $this->session->userdata('jquery-slimscrollJS'); ?>
<?php echo $this->session->userdata('jquery-blockuiJS'); ?>
<?php echo $this->session->userdata('jquery-cokieJS'); ?>
<?php echo $this->session->userdata('jquery-uniformJS'); ?>
<?php echo $this->session->userdata('bootstrap-switchJS'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->session->userdata('toastrJS'); ?>
<?php echo $this->session->userdata('select2JS'); ?>
<?php echo $this->session->userdata('jquery-dataTablesJS'); ?>
<?php echo $this->session->userdata('dataTables-bootstrapJS'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END CORE PLUGINS -->
<?php echo $this->session->userdata('metronicJS'); ?>
<?php echo $this->session->userdata('layoutJS'); ?>
<?php echo $this->session->userdata('demoJS'); ?>
<script src="<?php echo base_url('metronic/additional/start.js'); ?>" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        //UITree.init();
        TableManaged.init();
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

            var table = $('#idTabelJnsadv');

            // begin first table
            table.dataTable({
                "ajax": "<?php echo base_url("/master_jnsadvance/getJnsadvAll"); ?>",
                "columns": [
                    { "data": "idAccount" },
                    { "data": "namaAccount" },
                    { "data": "norekBank" },
                    { "data": "kodePerk" }
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
                    [5, 10,15, 20, -1],
                    [5, 10,15, 20, "All"] // change per page values here
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
                "aaSorting": [[0,'asc']/*, [5,'desc']*/],
                "columnDefs": [{  // set default column settings
                    'orderable': true,
                    "searchable": true,
                    'targets': [0]
                }],
                "order": [
                    [0, "asc"]
                ] // set first column as a default sort by asc
            });
            $('#id_Reload').click(function () {
                table.api().ajax.reload();
            });

            var tableWrapper = jQuery('#example_wrapper');

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

            table.on('change', 'tbody tr .checkboxes', function () {
                $(this).parents('tr').toggleClass("active");
            });
            table.on('click', 'tbody tr', function () {
                var idAcc = $(this).find("td").eq(0).html();
                var namaAcc = $(this).find("td").eq(1).html();
                var norekAcc = $(this).find("td").eq(2).html();
                var kodeGLAcc = $(this).find("td").eq(3).html();
                                
                $('#id_jnsadvId').val(idAcc);
                $('#id_namaJnsadv').val(namaAcc);
                $('#id_norekBank').val(norekAcc);
                $('#id_GL').val(kodeGLAcc);
                getDescGL(kodeGLAcc);
                //$('#').val();
                
                $('#btnCloseModalJnsAdv').trigger('click');
                $('#id_btnSimpan').attr('disabled',true);
                $('#id_btnUbah').attr("disabled",false);
                $('#id_btnHapus').attr("disabled",false);
                $('#id_jnsadvId').focus();

            }); 

            tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
        }
        var initTable2 = function () {
            //var table = $('#id_TabelPerk');
            // begin first table
            var table = $('#idTabelPerk').dataTable({
                "ajax": "<?php  echo base_url("/master_perkiraan/getAllPerkiraan"); ?>",
                "columns": [
                    { "data": "kode_perk" },
                    { "data": "kode_alt" },
                    { "data": "nama_perk" },
                    { "data": "level" },
                    { "data": "type" },
                    { "data": "dk" }
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
            	
                	var kodePerk = $(this).find("td").eq(0).html();
                    $('#id_GL').val(kodePerk);
                    var namaPerk = $(this).find("td").eq(2).html();
                    $('#id_namaGL').val(namaPerk);
                    
                	$( "#btnCloseModal" ).trigger( "click" );
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
                initTable2();
            }
        };
    }();
    btnStart();
	$("#id_namaJnsadv").focus();
    	
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
	});
	function getDescGL(idGL){
		ajaxModal();
		if (idGL != '') {
			$.post("<?php echo site_url('/master_jnsadvance/getDescGL'); ?>",
			{
				'idGL': idGL
			},function (data) {
				if (data.baris == 1) {
					$('#id_namaGL').val(data.nama_perk);					                    
				}else{
					alert('Data tidak ditemukan!');
					$('#id_btnBatal').trigger('click');
				}
			}, "json");
		}//if kd<>''
	}
	function ajaxSubmit(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_jnsadvance/simpan",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
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
			url:"<?php echo base_url(); ?>master_jnsadvance/ubah",
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
		var idAcc	= $('#id_jnsadvId').val();
		idAcc		= idAcc.trim();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_jnsadvance/hapus",
			data:{idAcc : idAcc},
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				UIToastr.init(data.tipePesan,data.pesan);			
			}
	
		});
		event.preventDefault();
	}
    $('#id_formJnsAdv').submit(function (event) {
		dataString = $("#id_formJnsAdv").serialize();
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