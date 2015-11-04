<?php
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=laporan_rekap_advance_".date('d-m-Y h:i:sa').".xls");
	header("Pragma: no-chace");
	header("Expires: 0");
?>
	<table border="1" width="100%">
		<tr>
		<th colspan="8">Daftar Advance Request</th>
		</tr>
		<tr>
		<th colspan="8"><?php echo $datatanggal; ?></th>
		</tr>
		<tr>
		<?php
		foreach($field as $f){
			echo '<td align="center">'.$f.'</td>';
		}
		?>
		</tr>
		<?php
		$no = 1;
		foreach($all as $a){ 
			$date1 = new DateTime($a->tgl_trans);
			$tglTrans	= $date1->format('d-m-Y');
			$date2 = new DateTime($a->tgl_jt);
			$tglJt	= $date2->format('d-m-Y');
		?>
			<tr>
				<td><?php echo $no;?></td>
				<td align="center"><?php echo $a->nama_kyw;?></td>
				<td align="center"><?php echo $a->nama_dept;?></td>
				<td align="center"><?php echo $a->keterangan;?></td>
				<td align="center"><?php echo $tglTrans;?></td>
				<td align="center"><?php echo $tglJt;?></td>
				<td align="right"><?php echo number_format($a->jml_uang,2,",",".");?></td>
				<td align="right"><?php echo $a->sisa;?></td>
			</tr>
		<?php
		$no++;
		}
		?>
	</table>