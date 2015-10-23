<!-- BEGIN PAGE BREADCRUMB -->
<!-- END PAGE BREADCRUMB -->
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<!-- KONTEN DI SINI YA -->
<div class="modal_json" style="display:none"></div>
<div class="row">
    <div class="col-md-6">
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs  font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Menu</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="fullscreen">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
            <div><span id="event_result"></span></div>
                <div id="jstree1" class="scroller" style="height:300px">
                  <ul>
                  <?php
                    $i=2;
                    foreach($menu_all as $data){
                    echo '<li id = "'.$data['id'].'">';
                    echo '<a href="#" id = "a'.$data['id'].'">';
                    echo $data['nama'] ;
                    echo '</a>';
                    echo '<ul>';
                    echo print_recursive_menu_all_li($data['child']);
                    echo '</ul>';
                    echo '</li>';
                    $i++;
                    }
                ?>
                </ul>
              </div>
            </div>
        </div><!-- end <div class="portlet green-meadow box"> -->
    </div><!-- end <div class="col-md-6"> -->
    
    <div class="col-md-6">
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs  font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Group User</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="fullscreen">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
            	<div><span id="event_result"></span></div>
                <div>
                	<form role="form"  method="post"   action="<?php echo base_url('konfigurasi_menu_status_user/simpan'); ?>">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Group User</label>
                                <?php
									$data = array();
									$data[''] ='';
									foreach($status_user as $row) : 
											$data[$row['usergroup_id']] = $row['usergroup_desc'];
									endforeach; 
									echo form_dropdown('status_user', $data,'','id="id_group_user" class="form-control"');
								?>
                            </div>
                            <div class="form-group">
                                <label>Menu yang diizinkan</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-list"></i>
                                    </span>
                                    <input type="text" name="menu_allow" class="form-control" placeholder="" id="id_menu_allow">
                                </div>
                            </div>    
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="btnSimpan" class="btn blue" onclick="get_selected_node_tree()">Submit</button>
                            <button type="button" class="btn default" onclick="get_selected_node_tree()">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- end <div class="portlet green-meadow box"> -->
    </div><!-- end <div class="col-md-6"> -->
</div>
<div class="row">
    <div class="col-md-6">
    	<div id="place">
        </div>
<!--    
    <div id="jstree1">
      <ul>
        <li>
          <a href="#" class="jstree-anchor">Root node 1</a>
          <ul>
            <li>
                <a class="jstree-anchor  jstree-clicked" href="#">initially selected</a>
            </li>
            <li class="jstree-node  jstree-leaf" aria-selected="false">
                <a class="jstree-anchor" href="#">custom icon URL</a>
            </li>
            <li class="jstree-node  jstree-open" aria-selected="false"><a class="jstree-anchor" href="#">initially open</a>
             <ul role="group" class="jstree-children">
              <li role="treeitem" id="j1_5" class="jstree-node  jstree-leaf jstree-last"><a class="jstree-anchor" href="#">Another node</a>
              </li>
             </ul>
            </li>
            <li id="j1_6" class="jstree-node  jstree-leaf jstree-last"><a class="jstree-anchor" href="#">Custom icon class</a>
            </li>
         </ul></li><li role="treeitem" id="j1_7" class="jstree-node  jstree-leaf jstree-last"><a class="jstree-anchor">Root node 2</a>
       </li>
     </ul>
  </div>
-->
	  
    
    </div>
</div>

<!-- END PAGE CONTENT-->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('metronic/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/plugins/excanvas.min.js'); ?>"></script> 
<![endif]-->
<script src="<?php echo base_url('metronic/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery-migrate.min.js'); ?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('metronic/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/jquery.cokie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/uniform/jquery.uniform.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('metronic/global/plugins/jstree/dist/jstree.min.js'); ?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php // echo base_url('metronic/admin/pages/scripts/ui-tree.js'); ?>"></script>
<script src="<?php echo base_url('metronic/global/scripts/metronic.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/layout.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('metronic/admin/layout4/scripts/demo.js'); ?>" type="text/javascript"></script>
<script>

/*
$(function () {
	$("#jstree1")
		.jstree({ 
				"plugins" : ["html_data","ui","checkbox"],
				
                "themes" : {
                    "responsive": false
                },
				"types" : {
					"default" : {
						"icon" : "fa fa-folder icon-state-warning icon-lg"
					},
					"file" : {
						"icon" : "fa fa-file icon-state-warning icon-lg"
					}
				} 
				});
});
*/

var UITree = function () {

	var handleSample4 = function () {
        $('#jstree1').jstree({
            "plugins": ["wholerow", "checkbox", "types"],
            "core": {
                "themes" : {
                    "responsive": false
                },    
                
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            }
        });
		//.bind("select_node.jstree", function (e, data) { alert(data.rslt.obj.data("id")); })
    }

    return {
        //main function to initiate the module
        init: function () {
			handleSample4();
        }
    };
}();
$(document).ready(function(){
	var judul_menu = $('#id_a_menu_<?php echo $menu_id; ?>').text();
	$('#id_judul_menu').text(judul_menu);
});
$(function () {
	//$("#8").attr('data-jstree','{"opened":true,"selected":true}');
	$( "#id_group_user" ).change(function() {
	   var kd=$(this).val();
	   kd=kd.trim();
	   if (kd!=''){
		 //  alert(kd);
		$.post("<?php echo site_url('/konfigurasi_menu_status_user/get_menu_group_user'); ?>",
				{
					'kd_group_user' : kd
				},
				function(data){
					var total_menu = data.data_menu.length;
					var i;
					$('#jstree1').jstree("deselect_all");
					$("#8").jstree('open_all');
					//$("#8").jstree('select_node'), '#8');
					//$("#8").attr('data-jstree','{"opened":true,"selected":true}');
					//$("#8").attr('class','jstree-anchor jstree-clicked');
					//$("#a12_8").addClass('jstree-clicked');
					//alert(data.data_menu[0].menu_id);
					//alert(total_menu);
                    //alert(jmlx);
                    for (i = 0; i < total_menu; i++) {
						
						$("#"+data.data_menu[i].menu_id).jstree('open_node', data.data_menu[i].menu_id);
						$("#a"+data.data_menu[i].menu_id+"_"+data.data_menu[i].parent).trigger('click');
						//$("#a"+data.data_menu[i].menu_id+"_"+data.data_menu[i].parent).addClass('jstree-clicked');
						//alert(data.data_menu[i].menu_id);
						//alert("#a" + data.data_menu[i].menu_id);
						//alert(data.data_menu.menu_id);
                        //var a = data.dat.menu[i].menu_id;
                     //   $("#a" + data.data_menu[i].menu_id+ "_" + data.data_menu[i].parent).attr('class', 'jstree-clicked');
                    }
					//console.log(data);
				},"json");
	   }//if kd<>''
	
	});
});
jQuery(document).ready(function() {    

   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
 UITree.init();
});
//$(function () {

// MENU OPEN
$(".menu_root").removeClass('start active open');
$("#menu_root_<?php echo $menu_parent; ?>").addClass('start active open');
// END MENU OPEN
/*
$("#tree_3").on("select_node.jstree",
     function(evt, data){
          //alert(data.node.text);
		 // alert(data.node.parent);
		//  $("#menu_root_5")
     });
	 */
/*	 
$(node).parents(".jstree-open").each(function(index){
     var theParent=$(this);
	 alert(theParent);
     // Apply operation to each parent
});
*/	 
function get_selected_node_tree(){ 
//	var x =$.tree.plugins.checkbox.get_checked($.tree.reference("#tree_3"));
	var result = $('#jstree1').jstree('get_checked'); 
	$("#id_menu_allow").val(result);
	/*
	$('#tree_3').bind("select_node.jstree", function (e, data) { 
        data.rslt.obj.parents('.jstree-closed').each(function () { 
            data.inst.open_node(this); 
        });
	});	 
		 var y = $('#tree_3').jstree._focused().select_node(data.node.id);
		 alert (y);
		 */
}
/*
$("#tree_3").on("select_node.jstree",
     function(evt, data){
          //alert(data.node.text);
		  alert(data.node.id);
		  var menu_id = data.node.id;
		//  $("#menu_root_5")
     }
);
*/
$(document).ajaxStart(function() {
	$('.modal_json').fadeIn('fast');
		}).ajaxStop(function() {
	$('.modal_json').fadeOut('fast');
});
</script>
<!-- END JAVASCRIPTS -->