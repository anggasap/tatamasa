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
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Master Settlement Of Advance</span>
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
                      action="<?php echo base_url('master_settle_adv/home'); ?>" id="id_formReqpay">
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-4">
								<div class="form-group">
                                    <label>Id Request for Payment </label>
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_idReqpay" required="required" class="form-control"
                                                   type="text" name="idReqpay" readonly/>
                                        </div>
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-success" data-target="#idDivTabelReqpay"
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
                                </div>
                                
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Invoice</label>
                                            <input id="id_noInvoice" required="required" class="form-control"
                                                   type="text" name="noInvoice"/>
                                </div>
                                <div class="form-group">
                                    <label>Nomor PO</label>
                                            <input id="id_noPO" required="required" class="form-control"
                                                   type="text" name="noPO"/>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah uang</label>
                                            <input id="id_uang" required="required" class="form-control nomor"
                                                   type="text" name="uang"/>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Jatuh Tempo</label>
                                            <input id="id_tglJT" required="required" class="form-control"
                                                   type="text" name="tglJT" placeholder="dd-mm-yyyy"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="form-group">
                                    <label>Dibayarkan ke</label>
                                            <input id="id_payTo" required="required" class="form-control"
                                                   type="text" name="payTo" />
                                </div>
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
										<input type="checkbox"  value="1"  name="dokFPe" id="id_dokFPe"> Faktur Penjualan (Asli)  </label>
										<input type="text" name="dokFPe_in" id="id_dokFPe_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1"  name="dokKuitansi" id="id_dokKuitansi"> Kuitansi (Asli)  </label>
										<input type="text" name="dokKuitansi_in" id="id_dokKuitansi_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1"  name="dokPa" id="id_dokPa"> Faktur Pajak (Asli)  </label>
										<input type="text" name="dokPa_in" id="id_dokPa_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1"  name="dokPO" id="id_dokPO"> Purchase Order (PO)  </label>
										<input type="text" name="dokPO_in" id="id_dokPO_in" class="nomor1 hidden">
									</div>
								</div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
									<label>&nbsp;</label>
									<div class="checkbox-list">
										<label>
										<input type="checkbox"  value="1" name="dokSuratJalan" id="id_dokSuratJalan">  Surat Jalan </label>
										<input type="text" name="dokSuratJalan_in" id="id_dokSuratJalan_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokPenBrg" id="id_dokPenBrg">  Laporan Penerimaan Barang </label>
										<input type="text" name="dokPenBrg_in" id="id_dokPenBrg_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokBAST" id="id_dokBAST">  Berita Acara Serah Terima </label>
										<input type="text" name="dokBAST_in" id="id_dokBAST_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokBAP" id="id_dokBAP">  Berita Acara Pemeriksaan  </label>
										<input type="text" name="dokBAP_in" id="id_dokBAP_in" class="nomor1 hidden">
									</div>
								</div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
									<label>&nbsp;</label>
									<div class="checkbox-list">
										<label>
										<input type="checkbox"  value="1" name="dokCOP" id="id_dokCOP">   Certificate of Payment (COP) </label>
										<input type="text" name="dokCOP_in" id="id_dokCOP_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokSSP" id="id_dokSSP">  Sesuai Surat Perjanjian / Kontrak  </label>
										<input type="text" name="dokSSP_in" id="id_dokSSP_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokSSPK" id="id_dokSSPK">   Sesuai Surat Perintah Kerja (SPK) </label>
										<input type="text" name="dokSSPK_in" id="id_dokSSPK_in" class="nomor1 hidden">
										<label>
										<input type="checkbox"  value="1" name="dokSBJ" id="id_dokSBJ">   Sesuai Bank Garansi / Surat Jaminan  </label>
										<input type="text" name="dokSBJ_in" id="id_dokSBJ_in" class="nomor1 hidden">
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
<div class="modal fade draggable-modal" id="idDivTabelReqpay" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Data Request For Payment</h4>
			</div>
			<div class="modal-body">
                    <div class="scroller" style="height:400px; ">
                        <div class="row">
                            <div class="col-md-12">
                                <button id="id_ReloadReqpay" style="display: none;"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-body">
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelReqpay">
                                        <thead>
                                        <tr>
                                            <th>
                                                Id Reqpay
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
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalDataReqpay">Close</button>
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
            var table = $('#idTabelReqpay');
            // begin first table
            table.dataTable({
                "ajax": "<?php  echo base_url("/master_settle_adv/getReqpayAll"); ?>",
                "columns": [
                    { "data": "idReqpay" },
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
            $('#id_ReloadReqpay').click(function () {
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
                var idReqpay = $(this).find("td").eq(0).html();
                $('#id_idReqpay').val(idReqpay);
                $('#id_idReqpay').focus();
                $('#btnCloseModalDataReqpay').trigger('click');
                $('#id_btnSimpan').attr('disabled',true);
                $('#id_btnUbah').attr("disabled",false);
                $('#id_btnHapus').attr("disabled",false);

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
	$( "#id_idReqpay" ).focusout(function() {
		var idReqpay	= $(this).val();
		getDescReqpay(idReqpay);
	});
	$('#id_uang').keyup(function(){
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
	$('#id_uang').focusout(function(){
		var angka=$('#id_uang').val();
		if ($(this).val() == '') { 
			$(this).val('0.00');
		}else{
			$('#id_uang').val(number_format(angka,2));
		}
	});
	$("#id_uang").focus(function(){
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
	$('#id_dokFPe').change(function () {
		$('#id_dokFPe').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokFPe_in').val('1');
	    	} else {
	    		$('#id_dokFPe_in').val('0');
            } 
	    });
	});
	$('#id_dokKuitansi').change(function () {
		$('#id_dokKuitansi').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokKuitansi_in').val('1');
	    	} else {
	    		$('#id_dokKuitansi_in').val('0');
            } 
	    });
	});
	$('#id_dokPa').change(function () {
		$('#id_dokPa').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokPa_in').val('1');
	    	} else {
	    		$('#id_dokPa_in').val('0');
            } 
	    });
	});
	$('#id_dokPO').change(function () {
		$('#id_dokPO').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokPO_in').val('1');
	    	} else {
	    		$('#id_dokPO_in').val('0');
            } 
	    });
	});
	$('#id_dokSuratJalan').change(function () {
		$('#id_dokSuratJalan').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokSuratJalan_in').val('1');
	    	} else {
	    		$('#id_dokSuratJalan_in').val('0');
            } 
	    });
	});
	$('#id_dokPenBrg').change(function () {
		$('#id_dokPenBrg').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokPenBrg_in').val('1');
	    	} else {
	    		$('#id_dokPenBrg_in').val('0');
            } 
	    });
	});
	$('#id_dokBAST').change(function () {
		$('#id_dokBAST').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokBAST_in').val('1');
	    	} else {
	    		$('#id_dokBAST_in').val('0');
            } 
	    });
	});
	$('#id_dokBAP').change(function () {
		$('#id_dokBAP').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokBAP_in').val('1');
	    	} else {
	    		$('#id_dokBAP_in').val('0');
            } 
	    });
	});
	$('#id_dokCOP').change(function () {
		$('#id_dokCOP').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokCOP_in').val('1');
	    	} else {
	    		$('#id_dokCOP_in').val('0');
            } 
	    });
	});
	$('#id_dokSSP').change(function () {
		$('#id_dokSSP').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokSSP_in').val('1');
	    	} else {
	    		$('#id_dokSSP_in').val('0');
            } 
	    });
	});
	$('#id_dokSSPK').change(function () {
		$('#id_dokSSPK').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokSSPK_in').val('1');
	    	} else {
	    		$('#id_dokSSPK_in').val('0');
            } 
	    });
	});
	$('#id_dokSBJ').change(function () {
		$('#id_dokSBJ').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#id_dokSBJ_in').val('1');
	    	} else {
	    		$('#id_dokSBJ_in').val('0');
            } 
	    });
	});
	/* $('#').change(function () {
		$('#').each(function () {
	    	var checked = $(this).is(":checked");
	    	if (checked) {
	    		$('#_in').val('1');
	    	} else {
	    		$('#_in').val('0');
            } 
	    });
	}); */	
		
	    
	function getDescReqpay(idReqpay){
		ajaxModal();
		if (idReqpay != '') {
			$.post("<?php echo site_url('/master_settle_adv/getDescReqpay'); ?>",
			{
				'idReqpay': idReqpay
			},function (data) {
				if (data.baris == 1) {
					$('#id_kywId').val(data.id_kyw);
					$('#id_namaKyw').val(data.nama_kyw);
					$('#id_deptKyw').val(data.nama_dept);
					$('#id_noInvoice').val(data.no_invoice);
					$('#id_noPO').val(data.no_po);
					$('#id_uang').val(data.jml_uang);
					$('#id_tglJT').val(data.tgl_jt);
					$('#id_payTo').val(data.pay_to);
					$('#id_namaPemilikAkunBank').val(data.nama_akun_bank);
					$('#id_noAkunBank').val(data.no_akun_bank);
					$('#id_namaBank').val(data.nama_bank);
					$('#id_keterangan').val(data.keterangan);
					
					if(data.dok_fpe == '1'){
						//$("#uniform-id_dokFPe").addClass("hover focus");
						$("#uniform-id_dokFPe span").addClass("checked");
						$('#id_dokFPe_in').val('1');
					}else{
						$("#uniform-id_dokFPe span").removeClass("checked");
						$('#id_dokFPe_in').val('0');
					}
					if(data.dok_kuitansi == '1'){
						$("#uniform-id_dokKuitansi span").addClass("checked");
						$('#id_dokKuitansi_in').val('1');
					}else{
						$("#uniform-id_dokKuitansi span").removeClass("checked");
						$('#id_dokKuitansi_in').val('0');
					}
					if(data.dok_fpa == '1'){
						$("#uniform-id_dokPa span").addClass("checked");
						$('#id_dokPa_in').val('1');
					}else{
						$("#uniform-id_dokPa span").removeClass("checked");
						$('#id_dokPa_in').val('0');
					}
					if(data.dok_po == '1'){
						$("#uniform-id_dokPO span").addClass("checked");
						$('#id_dokPO_in').val('1');
					}else{
						$("#uniform-id_dokPO span").removeClass("checked");
						$('#id_dokPO_in').val('0');
					}
					if(data.dok_suratjalan == '1'){
						$("#uniform-id_dokSuratJalan span").addClass("checked");
						$('#id_dokSuratJalan_in').val('1');
					}else{
						$("#uniform-id_dokSuratJalan span").removeClass("checked");
						$('#id_dokSuratJalan_in').val('0');
					}
					if(data.dok_lappenerimaanbrg == '1'){
						$("#uniform-id_dokPenBrg span").addClass("checked");
						$('#id_dokPenBrg_in').val('1');
					}else{
						$("#uniform-id_dokPenBrg span").removeClass("checked");
						$('#id_dokPenBrg_in').val('0');
					}
					if(data.dok_bast == '1'){
						$("#uniform-id_dokBAST span").addClass("checked");
						$('#id_dokBAST_in').val('1');
					}else{
						$("#uniform-id_dokBAST span").removeClass("checked");
						$('#id_dokBAST_in').val('0');
					}
					if(data.dok_bap == '1'){
						$("#uniform-id_dokBAP span").addClass("checked");
						$('#id_dokBAP_in').val('1');
					}else{
						$("#uniform-id_dokBAP span").removeClass("checked");
						$('#id_dokBAP_in').val('0');
					}
					if(data.dok_cop == '1'){
						$("#uniform-id_dokCOP span").addClass("checked");
						$('#id_dokCOP_in').val('1');
					}else{
						$("#uniform-id_dokCOP span").removeClass("checked");
						$('#id_dokCOP_in').val('0');
					}
					if(data.dok_ssp == '1'){
						$("#uniform-id_dokSSP span").addClass("checked");
						$('#id_dokSSP_in').val('1');
					}else{
						$("#uniform-id_dokSSP span").removeClass("checked");
						$('#id_dokSSP_in').val('0');
					}
					if(data.dok_sspk == '1'){
						$("#uniform-id_dokSSPK span").addClass("checked");
						$('#id_dokSSPK_in').val('1');
					}else{
						$("#uniform-id_dokSSPK span").removeClass("checked");
						$('#id_dokSSPK_in').val('0');
					}
					if(data.dok_sbj == '1'){
						$("#uniform-id_dokSBJ span").addClass("checked");
						$('#id_dokSBJ_in').val('1');
					}else{
						$("#uniform-id_dokSBJ span").removeClass("checked");
						$('#id_dokSBJ_in').val('0');
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
	function ajaxSubmitReqpay(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_settle_adv/simpan",
			data:dataString,
	
			success:function (data) {
				$('#id_ReloadReqpay').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );
			}
	
		});
		event.preventDefault();
	}
	function ajaxUbahReqpay(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_settle_adv/ubah",
			data:dataString,
	
			success:function (data) {
				$('#id_ReloadReqpay').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
	function ajaxHapusReqpay(){
		ajaxModal();
		var idReqpay	= $('#id_idReqpay').val();
		idReqpay		= idReqpay.trim();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>master_settle_adv/hapus",
			data:{idReqpay : idReqpay},
			success:function (data) {
				$('#id_ReloadReqpay').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
    $('#id_formReqpay').submit(function (event) {
		dataString = $("#id_formReqpay").serialize();
        var aksiBtn       = $('#idTmpAksiBtn').val();
        if(aksiBtn == '1'){
        	var r = confirm('Anda yakin menyimpan data ini?');
			 if (r== true){
				ajaxSubmitReqpay();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '2'){ 
        	var r = confirm('Anda yakin merubah data ini?');
			 if (r== true){
				 ajaxUbahReqpay();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '3'){
        	var r = confirm('Anda yakin menghapus data ini?');
			 if (r== true){
				 ajaxHapusReqpay();
			 }else{//if(r)
				return false;
			}
        }
    }); 
    function cetak(){
		var idAdvance = $('#id_idAdvance').val();
		if(idAdvance == ''){
			alert('Silahkan pilih ID Advance');
		}else{
			window.open("<?php echo base_url('master_settle_adv/cetak/'); ?>/"+idAdvance, '_blank');	
		}
	}
    
</script>


<!-- END JAVASCRIPTS -->