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
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Master Advance Payment</span>
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
                <form role="form" method="post" 
                      action="<?php echo base_url('master_advance/home'); ?>" id="id_formAdvance">
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-4">
								<div class="form-group">
                                    <label>Id Advance </label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_idAdvance" required="required" class="form-control"
                                                   type="text" name="idAdvance" readonly/>
                                        </div>
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-success" data-target="#idDivTabelAdv"
                                           id="id_btnModal" data-toggle="modal">
                                            <i class="fa fa-search fa-fw"/></i>
                                            
                                        </a>
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input id="id_kywId" required="required" class="form-control hidden"
                                                   type="text" name="kywId" readonly/>
                                    <label>Nama karyawan (Requester) </label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_namaKyw" required="required" class="form-control"
                                                   type="text" name="namaKyw" readonly/>
                                        </div>
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-success" data-target="#idDivTabelKyw"
                                           id="id_btnModal" data-toggle="modal">
                                            <i class="fa fa-search fa-fw"/></i>
                                            
                                        </a>
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Departemen/Bagian</label>
									<input id="id_deptKyw" required="required" class="form-control"
                                                   type="text" name="deptKyw" readonly/>
                                    <?php
										/* $data = array();
										$data[''] ='';
										foreach($dept as $row) : 
												$data[$row['id_dept']] = $row['nama_dept'];
										endforeach; 
										echo form_dropdown('deptKyw', $data,'','id="id_deptKyw" class="form-control" readonly="readonly"'); */
									?>
                                </div>
                                
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jumlah uang muka</label>
                                            <input id="id_uangMuka" required="required" class="form-control nomor"
                                                   type="text" name="uangMuka"/>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Jatuh Tempo</label>
                                            <input id="id_tglJT" required="required" class="form-control"
                                                   type="text" name="tglJT" placeholder="dd-mm-yyyy"/>
                                </div>
                                
                                <div class="form-group">
                                    <label>Dibayarkan ke</label>
                                            <input id="id_payTo" required="required" class="form-control"
                                                   type="text" name="payTo" />
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="form-group">
                                    <label>Nama pemilik akun bank</label>
                                            <input id="id_namaPemilikAkunBank" required="required" class="form-control "
                                                   type="text" name="namaPemilikAkunBank"/>
                                </div>
                                <div class="form-group">
                                    <label>No akun bank</label>
                                            <input id="id_noAkunBank" required="required" class="form-control "
                                                   type="text" name="noAkunBank"/>
                                </div>
                                <div class="form-group">
                                    <label>Nama bank</label>
                                            <input id="id_namaBank" required="required" class="form-control"
                                                   type="text" name="namaBank"/>
                                </div>
                            </div>
                        </div>
						<!-- HIDDEN INPUT -->
						<input type="text" id="idTmpAksiBtn" class="hidden">
						<!-- END HIDDEN INPUT -->

                    </div>
                    <!--END ROW 1 -->
                    <!-- ROW 2 -->
                    <div class="row">
                        <div class="form-body">
                        	<div class="col-md-12">
                            	<div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea rows="2" cols="" name="keterangan"  id="id_keterangan" class="form-control">
                                    </textarea>
                                </div>
                            </div>	
                        </div>
                    </div>    
                    <!--END ROW 2 -->
                    <!-- ROW 3 -->
                    <div class="row">
                        <div class="form-body">
                        	<div class="col-md-4">
                                <div class="form-group">
									<label>Dokumen Verifikasi</label>
									<div class="checkbox-list">
										<label>
										<input type="checkbox"  value="1"  name="dokPO" id="id_dokPO"> Purchase Order (PO)  </label>
										<label>
										<input type="checkbox"  value="1" name="dokSP" id="id_dokSP">  Surat Penawaran </label>
									</div>
								</div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
									<label>&nbsp;</label>
									<div class="checkbox-list">
										<label>
										<input type="checkbox"  value="1" name="dokSSP" id="id_dokSSP">  Sesuai Surat Perjanjian / Kontrak  </label>
										<label>
										<input type="checkbox"  value="1" name="dokSSPK" id="id_dokSSPK">   Sesuai Surat Perintah Kerja (SPK) </label>
									</div>
								</div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
									<label>&nbsp;</label>
									<div class="checkbox-list">
										<label>
										<input type="checkbox"  value="1" name="dokSBJ" id="id_dokSBJ">   Sesuai Bank Garansi / Surat Jaminan  </label>
									</div>
								</div>
                            </div>	
                        </div>
                    </div>    
                    <!--END ROW 3 -->
                    <div class="row">
						<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET child 1-->
							<div class="portlet gren">
								<div class="portlet-title">
									<div class="caption">
										Approval Dept. Keuangan
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="scroller">
										<div class="row">
					                        <div class="form-body">
					                        	<div class="col-md-3">
					                        		<div class="form-group">
					                                    <label>Approval</label>
					                                            <input id="id_appKeuanganId" class="form-control "
					                                                   type="text" name="appKeuanganId" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Status</label>
					                                            <input id="id_appKeuanganStatus" class="form-control "
					                                                   type="text" name="appKeuanganStatus" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Tanggal</label>
					                                            <input id="id_appKeuanganTgl" class="form-control "
					                                                   type="text" name="appKeuanganTgl" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-5">
					                        		<div class="form-group">
					                                    <label>Keterangan</label>
					                                    <textarea rows="2" cols="" name="appKeuanganKet" id="id_appKeuanganKet" class="form-control" readonly>
                                    					</textarea>        
					                                </div>
					                        	</div>
					                        </div>
					                    </div> 
									</div>
								</div>
							</div>
							<!-- END Portlet PORTLET child 1-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET child 2-->
							<div class="portlet gren">
								<div class="portlet-title">
									<div class="caption">
										Approval Head Dept.
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="scroller">
										<div class="row">
					                        <div class="form-body">
					                        	<div class="col-md-3">
					                        		<div class="form-group">
					                                    <label>Approval</label>
					                                            <input id="id_appHDId" class="form-control "
					                                                   type="text" name="appHDId" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Status</label>
					                                            <input id="id_appHDStatus" class="form-control "
					                                                   type="text" name="appHDStatus" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Tanggal</label>
					                                            <input id="id_appHDTgl" class="form-control "
					                                                   type="text" name="appHDTgl" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-5">
					                        		<div class="form-group">
					                                    <label>Keterangan</label>
					                                    <textarea rows="2" cols="" name="appHDKet" id="id_appHDKet" class="form-control" readonly>
                                    					</textarea>        
					                                </div>
					                        	</div>
					                        </div>
					                    </div> 
									</div>
								</div>
							</div>
							<!-- END Portlet PORTLET child 2-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET child 2-->
							<div class="portlet gren">
								<div class="portlet-title">
									<div class="caption">
										Approval General Manager
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="scroller">
										<div class="row">
					                        <div class="form-body">
					                        	<div class="col-md-3">
					                        		<div class="form-group">
					                                    <label>Approval</label>
					                                            <input id="id_appGMId" class="form-control "
					                                                   type="text" name="appGMId" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Status</label>
					                                            <input id="id_appGMStatus" class="form-control "
					                                                   type="text" name="appGMStatus" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-2">
					                        		<div class="form-group">
					                                    <label>Tanggal</label>
					                                            <input id="id_appGMTgl" class="form-control "
					                                                   type="text" name="appGMTgl" readonly/>
					                                </div>
					                        	</div>
					                        	<div class="col-md-5">
					                        		<div class="form-group">
					                                    <label>Keterangan</label>
					                                    <textarea rows="2" cols="" name="appGMKet" id="id_appGMKet" class="form-control" readonly>
                                    					</textarea>        
					                                </div>
					                        	</div>
					                        </div>
					                    </div> 
									</div>
								</div>
							</div>
							<!-- END Portlet PORTLET child 2-->
						</div>
					</div>	
                    
                       	
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
<div class="modal fade draggable-modal" id="idDivTabelKyw" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data User</h4>
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
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelKyw">
                                        <thead>
                                        <tr>
                                            <th>
                                                Id Karyawan
                                            </th>
                                            <th>
                                                Nama Karyawan
                                            </th>
                                            <th>
                                                Departemen
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
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalDataKyw">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!--  END  MODAL Data Karyawan -->
<!--  MODAL Data Advance -->
<div class="modal fade draggable-modal" id="idDivTabelAdv" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data Advance</h4>
			</div>
			<div class="modal-body">
                    <div class="scroller" style="height:400px; ">
                        <div class="row">
                            <div class="col-md-12">
                                <button id="id_ReloadAdv" style="display: none;"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-body">
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelAdv">
                                        <thead>
                                        <tr>
                                            <th>
                                                Id Advance
                                            </th>
                                            <th>
                                                Nama Karyawan
                                            </th>
                                            <th>
                                                Jumlah uang
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
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalDataAdv">Close</button>
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
            var table = $('#idTabelKyw');
            // begin first table
            table.dataTable({
                "ajax": "<?php  echo base_url("/master_advance/getKywAll"); ?>",
                "columns": [
                    { "data": "idKyw" },
                    { "data": "namaKyw" },
                    { "data": "deptKyw" }
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
                var idKyw = $(this).find("td").eq(0).html();
                var namaKyw = $(this).find("td").eq(1).html();
                var deptKyw = $(this).find("td").eq(2).html();

                $('#id_kywId').val(idKyw);
                $('#id_namaKyw').val(namaKyw);
                $('#id_deptKyw').val(deptKyw);
                
                //$('#').val();
                
                $('#btnCloseModalDataKyw').trigger('click');
                /* $('#id_btnSimpan').attr('disabled',true);
                $('#id_btnUbah').attr("disabled",false);
                $('#id_btnHapus').attr("disabled",false);
                $('#id_userId').focus(); */

            }); 

            tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
        }
        var initTable2 = function () {
            var table = $('#idTabelAdv');
            // begin first table
            table.dataTable({
                "ajax": "<?php  echo base_url("/master_advance/getAdvAll"); ?>",
                "columns": [
                    { "data": "idAdv" },
                    { "data": "namaReq" },
                    { "data": "jmlUang" }
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
                var idAdv = $(this).find("td").eq(0).html();
                $('#id_idAdvance').val(idAdv);
                
                $('#btnCloseModalDataAdv').trigger('click');
                $('#id_idAdvance').val(idAdv);
                $('#id_idAdvance').focus();
                $('#id_btnSimpan').attr('disabled',true);
                $('#id_btnUbah').attr("disabled",false);
                $('#id_btnHapus').attr("disabled",false);
                $('#id_userId').focus(); 

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
    //Ready Doc
    btnStart();
	$("#id_namaKyw").focus();
    	
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
	$( "#id_idAdvance" ).focusout(function() {
		var idAdv	= $(this).val();
		getDescAdv(idAdv);
	});
	$('#id_uangMuka').keyup(function(){
		var val = $(this).val();
		if(isNaN(val)){
			val = val.replace(/[^0-9\.]/g,'');
			if(val.split('.').length>2) 
				val =val.replace(/\.+$/,"");
		  	}
		  	$(this).val(val); 
		  	//var words = toWords(val);
		  	//$('#terbilang').text(words);
	});
	$('#id_uangMuka').focusout(function(){
		var angka=$('#id_uangMuka').val();
		if ($(this).val() == '') { 
			$(this).val('0.00');
		}else{
			$('#id_uangMuka').val(number_format(angka,2));
		}
	});
	$("#id_uangMuka").focus(function(){
		if( $(this).val()=='0' || $(this).val()=='0.00' ){
			$(this).val('');
		}		
	});
	$( "#id_tglJT" ).focusout(function() {
		var tgl = $(this).val();
		//alert(tgl);
		var vbl= "#id_tglJT";
		validatedate(tgl,vbl);
	});
	function getDescAdv(idAdv){
		ajaxModal();
		if (idAdv != '') {
			$.post("<?php echo site_url('/master_advance/getDescAdv'); ?>",
			{
				'idAdv': idAdv
			},function (data) {
				if (data.baris == 1) {
					$('#id_kywId').val(data.id_kyw);
					$('#id_namaKyw').val(data.nama_kyw);
					$('#id_deptKyw').val(data.nama_dept);
					$('#id_uangMuka').val(data.jml_uang);
					$('#id_tglJT').val(data.tgl_jt);
					$('#id_payTo').val(data.pay_to);
					$('#id_namaPemilikAkunBank').val(data.nama_akun_bank);
					$('#id_noAkunBank').val(data.no_akun_bank);
					$('#id_namaBank').val(data.nama_bank);
					$('#id_keterangan').val(data.keterangan);
					
					if(data.dok_po == '1'){
						$("#uniform-id_dokPO").addClass("focus");
						//$("#id_dokPO").attr("value","1");
						$("#uniform-id_dokPO span").addClass("checked");
					}else{
						$("#uniform-id_dokPO span").removeClass("checked");
					}
					if(data.dok_sp == '1'){
						$("#uniform-id_dokSP span").addClass("checked");
					}else{
						$("#uniform-id_dokSP span").removeClass("checked");
					}
					if(data.dok_ssp == '1'){
						$("#uniform-id_dokSSP span").addClass("checked");
					}else{
						$("#uniform-id_dokSSP span").removeClass("checked");
					}
					if(data.dok_sspk == '1'){
						$("#uniform-id_dokSSPK span").addClass("checked");
					}else{
						$("#uniform-id_dokSSPK span").removeClass("checked");
					}
					if(data.dok_sbj == '1'){
						$("#uniform-id_dokSBJ span").addClass("checked");
					}else{
						$("#uniform-id_dokSBJ span").removeClass("checked");
					}
					/* 
					$('#').val(data.); */					                    
				}else{
					alert('Data tidak ditemukan!');
					$('#id_btnBatal').trigger('click');
				}
			}, "json");
		}//if kd<>''
	}
	function ajaxSubmitAdvance(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_advance/simpan",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );
			}
	
		});
		event.preventDefault();
	}
	function ajaxUbahAdvance(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_advance/ubah",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
	function ajaxHapusAdvance(){
		ajaxModal();
		var idAdvance	= $('#id_idAdvance').val();
		idAdvance		= idAdvance.trim();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_advance/hapus",
			data:{idAdvance : idAdvance},
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
    $('#id_formAdvance').submit(function (event) {
		dataString = $("#id_formAdvance").serialize();
        var aksiBtn       = $('#idTmpAksiBtn').val();
        if(aksiBtn == '1'){
        	var r = confirm('Anda yakin menyimpan data ini?');
			 if (r== true){
				ajaxSubmitAdvance();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '2'){ 
        	var r = confirm('Anda yakin merubah data ini?');
			 if (r== true){
				 ajaxUbahAdvance();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '3'){
        	var r = confirm('Anda yakin menghapus data ini?');
			 if (r== true){
				 ajaxHapusAdvance();
			 }else{//if(r)
				return false;
			}
        }
    }); 
    
</script>


<!-- END JAVASCRIPTS -->