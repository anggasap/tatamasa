<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cetak Advance</title>
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
	</br>
	<table class="tableizer-table">
	<tr class="tableizer-firstrow"><th colspan="14">REQUEST FOR PAYMENT</th></tr>
	</table>
	<?php foreach($advance as $a){ ?>
	<table class="tableizer-table2">
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Requerter Name</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_kyw; ?></td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="2">Dept. Head Approval</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="20%">Requesting Department</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_dept; ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Name</td><td colspan="2" width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td rowspan="3" >Signature</td><td width="25%" rowspan="3" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan="3">Signature</td><td colspan="2" rowspan="3" width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
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
	 <tr><td>&nbsp;</td><td colspan="2">Invoice No.</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Pay To</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->pay_to; ?></td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="2">PO No.</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Account Name</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_akun_bank; ?></td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="2">Ammount</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->jml_uang; ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Account No.</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->no_akun_bank; ?></td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="2">Due Date</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->tgl_jt; ?></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>Bank</td><td width="25%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->nama_bank; ?></td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>Description</td><td>:</td><td colspan="12" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;"><?php echo $a->keterangan; ?></td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	</table>
	<br/>
	<table class="tableizer-table2">
	 <tr><td colspan="24">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="6" style="font-weight: bold;">Document Verification</td><td colspan="18">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="20%" colspan="6">Faktur Penjualan (Invoice) Asli</td><td width="10%">&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="25%" colspan="6">Surat Jalan (Delivery Order)</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="6">Certificate of Payment</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="20%" colspan="6">Kwitansi (Receipt) Asli</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="25%" colspan="6">Laporan Penerimaan Barang / Pelaksanaan Jasa</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="6">Sesuai Surat Perjanjian / Kontrak</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="20%" colspan="6">Faktur Pajak Asli</td><td><?php if($a->dok_po == '1'){echo 'V';}else{echo '';} ?></td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="25%" colspan="6">Berita Acara Serah Terima (BAST)</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="6">Sesuai Surat Perintah Kerja (SPK)</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="20%" colspan="6">Purchase Order (PO)</td><td><?php if($a->dok_po == '1'){echo 'V';}else{echo '';} ?></td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td width="25%" colspan="6">Berita Acara Pemeriksaan / Progress Report</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="6">Sesuai Bank Garansi / Surat Jaminan</td><td>&nbsp;</td></tr>
	 <tr><td colspan="24">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td  width="20%" colspan="7">Catatan Penggunaan Anggaran (CPA)</td><td>&nbsp;</td><td colspan="5">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="5">Lain - lain</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="3">Within Budget</td><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="3">Out of Budget</td><td colspan="10">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="4" style="font-weight: bold;">Catatan :</td><td colspan="19">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan="20" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="6">&nbsp;</td><td colspan="4">Verified by Requesting Dept.</td><td colspan="5">&nbsp;</td><td colspan="5" align="center">Verified by Requesting Dept.</td><td colspan="4">&nbsp;</td></tr>
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
	 <tr><td>&nbsp;</td><td width="13%" colspan="4">Payment Method</td><td width="12%">Accounting No,</td><td colspan="3" style="border-bottom: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="15">&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td colspan="10">&nbsp;</td><td>&nbsp;</td><td colspan="12" align="center">Instruction Payment Approved by Head Department</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Cash</td><td colspan="2">&nbsp;</td><td colspan="4" width="20%" align="center">Treasury</td><td>&nbsp;</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">Paid</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">Hold</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">Cancel</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Cheque/BG</td><td>&nbsp;</td><td>Name</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td><td width="2%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="2">Transfer</td><td>&nbsp;</td><td rowspan="3">Signature</td><td colspan="4" rowspan="3" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" rowspan="3" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" rowspan="3" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" rowspan="3" width="20%" align="center" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td colspan="4">&nbsp;</td></tr>
	 <tr><td colspan="4">&nbsp;</td></tr>
	 <tr><td colspan="5">&nbsp;</td><td>Date</td><td colspan="4" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td><td colspan="4" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td colspan="4" width="20%" style="border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;">&nbsp;</td><td>&nbsp;</td></tr>
	 <tr><td colspan="24">&nbsp;</td></tr>
	</table>
	<br/>
	<?php } ?>
  </body>
</html>
<script>
window.print();
</script>