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
                    <span class="caption-subject font-red-sunglo bold uppercase">Data User</span>
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
                <form role="form" method="post" class="cls_from_sec_user"
                      action="<?php echo base_url('sec_user/home'); ?>" id="idFormUser">
                    <div class="row">

                        <div class="form-body">
                            <div class="col-md-6">
								<div class="form-group">
                                    <label>User id</label>

                                    <div class="input-group">
                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_userId" required="required" class="form-control"
                                                   type="text" name="userId" readonly/>
                                        </div>
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-success" data-target="#idDivTabelUser"
                                           id="id_btnModal" data-toggle="modal">
                                            <i class="fa fa-search fa-fw"/></i>
                                            Lihat data
                                        </a>
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>User name</label>

                                        <div class="input-icon">
                                            <i class="fa fa-list fa-fw"></i>
                                            <input id="id_userName" required="required" class="form-control"
                                                   type="text" name="userName"/>
                                        </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Full user name</label>

                                    <div class="input-icon">
                                        <i class="fa fa-list"></i>
                                        <input type="text" class="form-control" placeholder="" name="userNameFull"
                                               id="id_userNameFull">
                                    </div>
                                </div>
                                
                            </div>
                            <!--end <div class="col-md-6"> 1 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>

                                    <div class="input-icon">
                                        <i class="fa fa-list"></i>
                                        <input type="password" class="form-control clsPasswd" placeholder="" name="kataKunci"
                                               id="id_kataKunci">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>

                                    <div class="input-icon">
                                        <i class="fa fa-list"></i>
                                        <input type="password" class="form-control clsPasswd" placeholder="" name="confKataKunci"
                                               id="id_confKataKunci">
                                    </div>
                                    <label class="checkbox" id="id_showPassword">
            					<input type="checkbox" name="remember" value="1" id="id_chckshowPassword" /> Show password </label>
                                </div>
                                <div class="form-group">
                                    <label>Group User</label>

                                    <?php
										$data = array();
										$data[''] ='';
										foreach($status_user as $row) : 
												$data[$row['usergroup_id']] = $row['usergroup_desc'];
										endforeach; 
										echo form_dropdown('userGroup', $data,'','id="id_groupUser" class="form-control"');
									?>
                                </div>
                            </div>
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
<!--  MODAL APPROVAL -->
<div class="modal fade draggable-modal" id="idDivTabelUser" tabindex="-1" role="basic" aria-hidden="true">
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
                                    <table class="table table-striped table-bordered table-hover text_kanan" id="idTabelUser">
                                        <thead>
                                        <tr>
                                            <th>
                                                User ID
                                            </th>
                                            <th>
                                                User Name
                                            </th>
                                            <th>
                                                User Full Name
                                            </th>
                                            <th>
                                                Password
                                            </th>
                                            
                                            <th>
                                                User Group
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
				<button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalDataUser">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!--  END MODAL APPROVAL -->

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

            var table = $('#idTabelUser');

            // begin first table
            table.dataTable({
                "ajax": "<?php  echo base_url("/sec_user/getUserInfo"); ?>",
                "columns": [
                    { "data": "userid" },
                    { "data": "username" },
                    { "data": "userfullname" },
                    { "data": "passwd" },
                    { "data": "usergroup" }
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
                var userId = $(this).find("td").eq(0).html();
                var userName = $(this).find("td").eq(1).html();
                var userFullName = $(this).find("td").eq(2).html();
                var passwd = $(this).find("td").eq(3).html();
                var userGroup = $(this).find("td").eq(4).html();
                $('#id_userId').val(userId);
                $('#id_userName').val(userName);
                $('#id_userNameFull').val(userFullName);
                $('#id_kataKunci').val(passwd);
                $('#id_confKataKunci').val(passwd);
                $('#id_groupUser').val(userGroup);
                //$('#').val();
                
                $('#btnCloseModalDataUser').trigger('click');
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
            }
        };
    }();
    btnStart();
	$("#id_userName").focus();
    	$( "#id_showPassword" ).click(function() {
        	if ($('#id_chckshowPassword').is(':checked')) {
            	$('.clsPasswd').attr('type', 'text');
        	}else{
            	$('.clsPasswd').attr('type', 'password');
        	}
    	});
	    $( "#id_btnSimpan" ).click(function() {
	    	$('#idTmpAksiBtn').val('1');
	        var passwd      = $('#id_kataKunci').val();
	        var confPasswd  = $('#id_confKataKunci').val();
	        if(passwd == confPasswd){
	            return true;
	        }else{
	            alert("Password dan konfirmasi password tidak sama.");
	            $("#id_password").focus();
	            return false;
	        }
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
	
	function ajaxSubmitUser(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>sec_user/simpan",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );
			}
	
		});
		event.preventDefault();
	}
	function ajaxUbahUser(){
		ajaxModal();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>sec_user/ubah",
			data:dataString,
	
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
	function ajaxHapusUser(){
		ajaxModal();
		var userId	= $('#id_userId').val();
		userId		= userId.trim();
		$.ajax({
			type:"POST",
			dataType: "json",
			url:"<?php echo base_url(); ?>sec_user/hapus",
			data:{userId : userId},
			success:function (data) {
				$('#id_Reload').trigger('click');
				$('#id_btnBatal').trigger('click');
				$( "#event_result" ).append( data.notif );				
			}
	
		});
		event.preventDefault();
	}
    $('#idFormUser').submit(function (event) {
		dataString = $("#idFormUser").serialize();
        var aksiBtn       = $('#idTmpAksiBtn').val();
        if(aksiBtn == '1'){
        	var r = confirm('Anda yakin menyimpan data ini?');
			 if (r== true){
				ajaxSubmitUser();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '2'){ 
        	var r = confirm('Anda yakin merubah data ini?');
			 if (r== true){
				 ajaxUbahUser();
			 }else{//if(r)
				return false;
			}
        }else if(aksiBtn == '3'){
        	var r = confirm('Anda yakin menghapus data ini?');
			 if (r== true){
				 ajaxHapusUser();
			 }else{//if(r)
				return false;
			}
        }
    }); 
    
</script>


<!-- END JAVASCRIPTS -->