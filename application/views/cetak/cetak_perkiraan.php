<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cetak Perkiraan</title>
	<style type="text/css">
	table.tableizer-table2 {
		width: 100%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
	}
	.tableizer-table2 th {
		font-weight: bold;
		font-size: 14px;
		text-align: center;
	}
	table.tableizer-table {
		width: 100%;
		border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
	}
	.tableizer-table th {
		font-weight: bold;
		font-size: 14px;
		text-align: center;
		border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	}
	.tableizer-table td {
		border: 0px solid #ccc;
	}
	table.judul{
		width: 100%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;	
	}
	.judul th {
		color: #0B0B0B;
		font-weight: bold;
		font-size: 14px;
		text-align: left;
	}
	#bb ul { list-style-type: none; }
	</style>
  </head>
  <body>
	<table class="judul">
		<tr><th></th><th>PT BERKAH GRAHA MANDIRI</th></tr>
		<tr><td rowspan="2"><img id="logo" src="<?php echo base_url('metronic/img/tatamasa_logo.png'); ?>"></td><td>Beltway Office Park Tower Lt. 5</td></tr>
		<tr><td>Jl. TB Simatung No. 41 - Psr Minggu - Jakarta Selatan</td></tr>
	</table>
	<br/>
	<table class="tableizer-table2">
		<tr class="tableizer-firstrow"><th colspan="5">Laporan Perkiraan</th></tr>
	</table>
	<br/>
	<table class="tableizer-table">
		<tr><th>Kode Perkiraan</th><th>Nama Perkiraan</th><th>Kode Alternative</th><th>Type</th><th>Debet / Kredit</th></tr>
		<?php foreach($perkiraan as $p){ ?>
			<tr>
				<td><?php 
				echo $p->kode_perk;
		?></td>
				<td><?php 
				if($p->level == 1){
					echo $p->nama_perk;
				}elseif($p->level == 2){
					echo '&nbsp;'.$p->nama_perk;
				}elseif($p->level == 3){
					echo '&nbsp;&nbsp;'.$p->nama_perk;
				}elseif($p->level == 4){
					echo '&nbsp;&nbsp;&nbsp;'.$p->nama_perk;
				}elseif($p->level == 5){
					echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$p->nama_perk;
				}elseif($p->level == 6){
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$p->nama_perk;
				}elseif($p->level == 7){
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$p->nama_perk;
				}else{
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$p->nama_perk;
				}
				?></td>
				<td><?php echo $p->kode_alt; ?></td>
				<td><?php echo $p->type; ?></td>
				<td><?php echo $p->dk; ?></td>
			</tr>
		<?php } ?>
	</table>	
  </body>
</html>