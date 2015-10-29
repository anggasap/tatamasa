<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<!-- STANDART FOR DATATABLE-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo $title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php echo  $this->session->userdata('fontAwesomeCS'); ?>

<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">-->
<link href="<?php echo base_url('metronic/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('metronic/global/plugins/select2/select2.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('metronic/global/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('metronic/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css'); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('metronic/global/plugins/bootstrap-toastr/toastr.min.css'); ?>"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url('metronic/global/css/components-rounded.css'); ?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/global/css/plugins.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/admin/layout4/css/layout.css'); ?>" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url('metronic/admin/layout4/css/themes/light.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('metronic/admin/layout4/css/custom.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style type="text/css">
.modal_json {
  display:    none;
  position:   fixed;
  z-index:    1000;
  top:        0;
  left:       0;
  height:     100%;
  width:      100%;
  background:  rgba( 255, 255, 255, .8 ) 
			  url(<?php echo base_url('metronic/global/img/loading-spinner-grey.gif');?>) 
			  50% 50% 
			  no-repeat;
  opacity: 0.80;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity = 80);
  filter: alpha(opacity = 80)
}
.nomor {
    text-align: right;
}
.nomor1 {
    text-align: right;
}
.kanan {
    text-align: right;
}

</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php include 'tempA.inc.php'; ?>
			<!-- END PAGE HEAD -->
			<?php echo $contents; ?>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; Mitra Tekno Madani
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>