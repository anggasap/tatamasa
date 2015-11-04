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
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Budget Perkiraan Tahun <?php echo $tahun; ?> Proyek <?php echo $nama_proyek; ?></span>
                </div>
                <div class="actions">
					<a href="javascript:;" class="btn btn-default btn-sm" onclick="cetak();">
					<i class="fa fa-print"></i> Cetak </a>
					<a class="btn btn-icon-only btn-default btn-sm fullscreen" href="javascript:;" data-original-title="" title="">
					</a>
                    <input type="hidden" id="tahun" value="<?php echo $tahun; ?>"/>
				</div>
                
                <!-- <div class="actions">
                	<a href="javascript:;" class="btn blue btn-sm">
						<i class="fa fa-print"></i> Cetak  </a>
                </div> -->
                <!-- <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="fullscreen">
                    </a>
                </div> -->
            </div>
            <div class="portlet-body">
                <div>
                	<span id="event_result">
                    
                    </span>
                </div>
                <div class="row">
                	<div class="col-md-12">
                    <button id="id_ReloadAdv" style="display: none;"></button>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                    	<div class="form-body">
                            <input type="text" class="hidden" id= "id_proyek" value="<?php echo $id_proyek; ?>"/>
                        	<table class="table table-striped table-bordered table-hover text_kanan" id="idTabelAdv">
                            	<thead>
                                	<tr>
                                    	<th>
                                        	Kode Perk
                                        </th>
                                        <th>
                                        	Nama Perk
                                        </th>
                                        <th>
                                        	Jan
                                        </th>
                                        <th>
                                        	Feb	
                                        </th>
                                        <th>
                                        	Mar
                                        </th>
                                        <th>
                                        	Apr
                                        </th>
                                        <th>
                                        	Mei
                                        </th>
                                        <th>
                                        	Jun
                                        </th>
                                        <th>
                                        	Jul
                                        </th>
                                        <th>
                                        	Agt
                                        </th>
                                        <th>
                                        	Sept
                                        </th>
                                        <th>
                                        	Okt
                                        </th>
                                        <th>
                                        	Nov
                                        </th>
                                        <th>
                                        	Des
                                        </th>
                                        <th>
                                        	Act
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($allBudgetPerk as $row){
                                ?>
                                <tr>
                                    	<td>
                                        	<?php echo $row->kode_perk; ?>
                                        </td>
                                        <td>
                                        	<?php echo $row->nama_perk; ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->jan,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->feb,2); ?>	
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->mar,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->apr,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->mei,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->jun,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->jul,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->agu,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->sep,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->okt,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->nov,2); ?>
                                        </td>
                                        <td class="kanan">
                                        	<?php echo number_format($row->des,2); ?>
                                        </td>
                                        <td>
                                            <?php
                                             if($row->type=='D'){
                                            ?>
                                        	<a class="edit" href="javascript:;">Edit </a>
                                        	<?php
                                            }else{
                                            ?>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                
								</tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                		</div>
                  </div>
                            <!-- end col-12 -->
               </div>
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
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        //UITree.init();
        TableEditable.init();
        //UIToastr.init();
    });
    //$(function () {
    var judul_menu = $('#id_a_menu_<?php echo $menu_id; ?>').text();
    $('#id_judul_menu').text(judul_menu);
    // MENU OPEN
    $(".menu_root").removeClass('start active open');
    $("#menu_root_<?php echo $menu_parent; ?>").addClass('start active open');
    // END MENU OPEN
    var TableEditable = function () {

        var handleTable = function () {

            function restoreRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    oTable.fnUpdate(aData[i], nRow, i, false);
                }

                oTable.fnDraw();
            }

            function editRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                
                var jqTds = $('>td', nRow);
                
                jqTds[0].innerHTML = '<input readonly type="text" class="form-control input-small input-sm" value="' + aData[0] + '">';
                jqTds[1].innerHTML = '<input readonly type="text" class="form-control input-small input-sm" value="' + aData[1] + '">';
                for(var i=2;i<=13;i++){
                	jqTds[i].innerHTML = '<input type="text" class="form-control input-small kanan  input-sm nomor" value="' + number_format(aData[i],2) + '">';
                }
                jqTds[14].innerHTML = '<a class="edit" href="">Save</a> <a class="cancel" href="">Cancel</a>';
            }

            function saveRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                /* var bulan = [];
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                var kode_perk = jqInputs[0].value;
                var nominal = 0;
                for(var i=1;i<=12;i++){
                	oTable.fnUpdate(number_format(jqInputs[i].value,2), nRow, i, false);
                	nominal = jqInputs[i].value;
                	bulan.push(nominal);
                	
                } */
                var id_proyek = $('#id_proyek').val();
                //var dataArray = new Array(12);//<== NEVER do this again, btw
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                var kode_perk = jqInputs[0].value.trim();
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                //oTable.fnUpdate(number_format(jqInputs[1].value,2), nRow, 1, false);
                oTable.fnUpdate(number_format(jqInputs[2].value,2), nRow, 2, false);
                var jan = jqInputs[2].value;
                oTable.fnUpdate(number_format(jqInputs[3].value,2), nRow, 3, false);
                var feb = jqInputs[3].value;
                oTable.fnUpdate(number_format(jqInputs[4].value,2), nRow, 4, false);
                var mar = jqInputs[4].value;
                oTable.fnUpdate(number_format(jqInputs[5].value,2), nRow, 5, false);
                var apr = jqInputs[5].value;
                oTable.fnUpdate(number_format(jqInputs[6].value,2), nRow, 6, false);
                var mei = jqInputs[6].value;
                oTable.fnUpdate(number_format(jqInputs[7].value,2), nRow, 7, false);
                var jun = jqInputs[7].value;
                oTable.fnUpdate(number_format(jqInputs[8].value,2), nRow, 8, false);
                var jul = jqInputs[8].value;
                oTable.fnUpdate(number_format(jqInputs[9].value,2), nRow, 9, false);
                var agt = jqInputs[9].value;
                oTable.fnUpdate(number_format(jqInputs[10].value,2), nRow, 10, false);
                var sep = jqInputs[10].value;
                oTable.fnUpdate(number_format(jqInputs[11].value,2), nRow, 11, false);
                var okt = jqInputs[11].value;
                oTable.fnUpdate(number_format(jqInputs[12].value,2), nRow, 12, false);
                var nov = jqInputs[12].value;
                oTable.fnUpdate(number_format(jqInputs[13].value,2), nRow, 13, false);
                var des = jqInputs[13].value;
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 14, false);
                oTable.fnDraw();
                //console.log(bulan);
                $.ajax({
        			type:"POST",
        			dataType: "json",
        			url:"<?php echo base_url(); ?>budgeti_perk/ubah",
        			data:{kode_perk:kode_perk, id_proyek : id_proyek,
						  jan : jan, feb :feb, mar:mar, apr:apr, mei:mei, jun:jun, jul:jul, agt:agt, sep:sep, okt:okt, nov:nov, des:des
            			},
        			success:function (data) {
        				UIToastr.init(data.tipePesan,data.pesan);
        			}
        	
        		});
        		event.preventDefault();               
            }

            function cancelEditRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                for(var i=2;i<=13;i++){
                	oTable.fnUpdate(number_format(jqInputs[i].value,2), nRow, i, false);
                }
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 14, false);
                oTable.fnDraw();
            }

            var table = $('#idTabelAdv');

            var oTable = table.dataTable({
            	
                "lengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],

                // Or you can use remote translation file
                //"language": {
                //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                //},

                // set the initial value
                "pageLength": 5,

                "language": {
                    "lengthMenu": " _MENU_ records"
                },
                "columnDefs": [{ // set default column settings
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

            var tableWrapper = $("#idTabelAdv_wrapper");

            tableWrapper.find(".dataTables_length select").select2({
                showSearchInput: false //hide search box with special css class
            }); // initialize select2 dropdown

            var nEditing = null;
            var nNew = false;

            
            table.on('click', '.cancel', function (e) {
                e.preventDefault();
                if (nNew) {
                    oTable.fnDeleteRow(nEditing);
                    nEditing = null;
                    nNew = false;
                } else {
                    restoreRow(oTable, nEditing);
                    nEditing = null;
                }
            });

            table.on('click', '.edit', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];
                if (nEditing !== null && nEditing != nRow) {
                    restoreRow(oTable, nEditing);
                    editRow(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                    saveRow(oTable, nEditing);
                    nEditing = null;
                    //alert("Updated! Do not forget to do some ajax to sync with backend :)");
                } else {
                    /* No edit in progress - let's start one */
                    editRow(oTable, nRow);
                    nEditing = nRow;
                }
            });
            table.on('focus', '.nomor', function (e) {
            	if ($(this).val() == '0.00') {
        	        $(this).val('');
        	    }else{
        	        var angka =$(this).val();
        	        $(this).val(number_format(angka,2));
        	    }
            });
            table.on('focusout', '.nomor', function (e) {
            	if ($(this).val() == '') {
        	        $(this).val('0.00');
        	    }else{
        	        var angka =$(this).val();
        	        $(this).val(number_format(angka,2));
        	    }
            });
            table.on('keyup', '.nomor', function (e) {
            	var val = $(this).val();
                if(isNaN(val)){
                    val = val.replace(/[^0-9\.]/g,'');
                    if(val.split('.').length>2)
                        val =val.replace(/\.+$/,"");
                }
                $(this).val(val);
            }); 
                    
        }

        return {

            //main function to initiate the module
            init: function () {
                handleTable();
            }

        };

    }();
    
    //Ready Doc
    function cetak(){
		var tahunPerk = $('#tahun').val();
		if(tahunPerk == ''){
			alert('Silahkan tahun budget');
		}else{
			window.open("<?php echo base_url('budgeti_perk/cetak/'); ?>/"+tahunPerk, '_blank');	
		}
	}
    
</script>


<!-- END JAVASCRIPTS -->