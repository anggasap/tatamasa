<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cetak Reimbursment</title>
	<style type="text/css">
	table.tableizer-table {
		width: 100%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
		font-size: 14px;
		text-align: center;
	}
	#logo{
		text-align: Left;
		margin-bottom: 10px;
	}
	#logo img{
		width: 200px;
	}
	table.tableizer-table2{
		width: 100%;
		border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
	}
	.tableizer-table2 td {
		border: 0px solid #ccc;
	}
	.tableizer-table2 th {
		background-color: #104E8B; 
		color: #FFF;
		border: 0px solid #ccc;
		font-weight: bold;
		font-size: 12px;
		text-align: center;
	}
	table.tableizer-table3{
		width: 100%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;	
		background-color: whitesmoke;
	}
	table.tableizer-table4{
		width: 50%;
		float: left;
		border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
		margin-bottom: 20px;	
	}
	table.tableizer-table5{
		width: 50%;
		float: right;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;	
	}
	table.tableizer-table6{
		width: 100%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;	
	}
	table.tableizer-table7{
		width: 40%;
		border: 0px solid #CCC; font-family: Arial, Helvetica, sans-serif;
		font-size: 10px;
		color: blue;	
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
	</style>
  </head>
  <body>
	<table class="judul">
		<tr><th></th><th>PT BERKAH GRAHA MANDIRI</th><tr>
		<tr><td rowspan="3"><img id="logo" src="<?php echo base_url('metronic/img/tatamasa_logo.png'); ?>"></td><td>Beltway Office Park Tower Lt. 5</td></tr>
		<tr><td>Jl. TB Simatung No. 41 - Psr Minggu - Jakarta Selatan</td></tr>
	</table>
	<table class="tableizer-table">
	<tr class="tableizer-firstrow"><th colspan="14">REIMBURSMENT</th></tr>
	</table>
	<?php 
	//print_r($reimpay);
	foreach($reimpay as $a){ ?>
	<table class="tableizer-table2">
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Requerter Name</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_kyw; ?></td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2">Dept. Head Approval</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="20%">Requesting Department</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_dept; ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Name</td><td colspan="2" width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td rowspan="3">Signature</td><td width="25%" rowspan="3" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan="3">Signature</td><td colspan="2" rowspan="3" width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Date</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Date</td><td colspan="2" width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" align="center">GM Internal Operation Approval</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="3" align="center">BOD Approval if over Rp 100 mio</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="15%">Name</td><td width="25%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">Rudi H. / Dessi M</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;" align="center">Shahla Rahardjo</td><td width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;" align="center">Laila Adikreshna</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td rowspan="3">Signature</td><td width="25%" rowspan="3" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" rowspan="3" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td rowspan="3" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Date</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	</table>
	<table class="tableizer-table2">
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="2">Ammount</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->jml_uang; ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Pay To PC Holder</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->pay_to; ?></td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="2">Due Date</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo tgl_indo($a->tgl_jt); ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Description</td><td>:</td><td colspan="12" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->keterangan; ?></td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="12" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	</table>
	<br/>
	<table class="tableizer-table2">
	 <tr><td colspan="24">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="12" style="font-weight: bold;">Document Verification</td><td colspan="12">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_fpe == '1'){echo 'V';}else{echo '';} ?></td><td width="25%" colspan="7">Faktur Penjualan (Invoice) Asli</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_po == '1'){echo 'V';}else{echo '';} ?></td><td width="20%" colspan="7">Purchase Order (PO)</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_bast == '1'){echo 'V';}else{echo '';} ?></td><td colspan="7"> Berita Acara Serah Terima (BAST)</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_kuitansi == '1'){echo 'V';}else{echo '';} ?></td><td width="25%" colspan="7">Kwitansi (Receipt) Asli</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_suratjalan == '1'){echo 'V';}else{echo '';} ?></td><td width="20%" colspan="7">Surat Jalan (Delivery Order)</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_pc == '1'){echo 'V';}else{echo '';} ?></td><td colspan="7"> Petty Cash/Advance Requisition</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_fpa == '1'){echo 'V';}else{echo '';} ?></td><td width="25%" colspan="7">Faktur Pajak Asli</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_lappenerimaanbrg == '1'){echo 'V';}else{echo '';} ?></td><td width="20%" colspan="7">Laporan Penerimaan Barang / Pelaksanaan Jasa</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php if($a->dok_lpkk == '1'){echo 'V';}else{echo '';} ?></td><td colspan="6"> Laporan Penggunaan Kas Kecil</td></tr>
	 <tr><td colspan="24">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td  width="20%" colspan="9">Catatan Penggunaan Anggaran (CPA)</td><td>&nbsp;</td><td colspan="5">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="5">Lain - lain</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4">Within Budget</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="3">Out of Budget</td><td colspan="9">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="6" style="font-weight: bold;">Catatan :</td><td colspan="18">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="20" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="6">&nbsp;</td><td colspan="4" align="center">Verified by Requesting Dept.</td><td colspan="5">&nbsp;</td><td colspan="5" align="center">Verified by Requesting Dept.</td><td colspan="4">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="5">&nbsp;</td><td>Name</td><td colspan="4" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; width: 20%">&nbsp;</td><td colspan="4" style="width: 22%">&nbsp;</td><td style="width: 5%;">Name</td><td colspan="5" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; width: 20%">&nbsp;</td><td colspan="4">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="5">&nbsp;</td><td rowspan="3">Signature</td><td colspan="4" rowspan="3" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4">&nbsp;</td><td rowspan="3">Signature</td><td colspan="5" rowspan="3" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="5">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="5">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="5">&nbsp;</td><td>Date</td><td colspan="4" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4">&nbsp;</td><td>Date</td><td colspan="5" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="24">&nbsp;</td></tr>
	</table>
	<br/>
	<table class="tableizer-table2">
	 <tr><td colspan="25">&nbsp;</td></tr>
	 <tr><td colspan="25" style="font-weight: bold;" align="center">Konfirmasi Pelaksanaan Pembayaran</td></tr>
	 <tr><td>&nbsp;</td><td width="13%" colspan="4">Payment Method</td><td style="width:70px;">Accounting No,</td><td colspan="3" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="12">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="9">&nbsp;</td><td colspan="15" align="center">Instruction Payment Approved by Head Department</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Cash</td><td colspan="2">&nbsp;</td><td colspan="5" align="center">Treasury</td><td style="width:20px;">&nbsp;</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; width:30px;">Paid</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; width:30px;">Hold</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; width:30px;">Cancel</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Cheque/BG</td><td>&nbsp;</td><td>Name</td><td colspan="5" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Transfer</td><td>&nbsp;</td><td rowspan="3">Signature</td><td colspan="5" rowspan="3" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" rowspan="3" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" rowspan="3" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" rowspan="3" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td></tr>
	 <tr><td colspan="4">&nbsp;</td></tr>
	 <tr><td colspan="4">&nbsp;</td></tr>
	 <tr><td colspan="5">&nbsp;</td><td>Date</td><td colspan="5" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td></tr>
	 <tr><td colspan="24">&nbsp;</td></tr>
	</table>
	<br/>
	<?php } ?>
  </body>
</html>
<script>
window.print();
</script>
<?php
function tgl_indo($tgl){
		$tanggal = substr($tgl,8,2);
		$bulan = getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;
	}
 
	function getBulan($bln){
		switch ($bln){
			case 1: return "Januari"; break;
			case 2: return "Februari"; break;
			case 3: return "Maret"; break;
			case 4: return "April"; break;
			case 5: return "Mei"; break;
			case 6: return "Juni"; break;
			case 7: return "Juli"; break;
			case 8: return "Agustus"; break;
			case 9: return "September"; break;
			case 10: return "Oktober"; break;
			case 11: return "November"; break;
			case 12: return "Desember"; break;
		}
	}
?>	