<?php
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("L","cm","A4");
$this->fpdf->SetMargins(0.5,0.5,0.5);
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(28.5,0.3,$nama,0,0,'C');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.5,1.3,$laporan,0,0,'R');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',10);
$this->fpdf->Cell(28.5,0.3,$datatanggal,0,0,'C');
$this->fpdf->Ln();
/* Fungsi Line untuk membuat garis */
/* ————– Header Halaman selesai ————————————————*/

//$this->fpdf->SetFont('Times','B',12);
//$this->fpdf->Cell(19,1,'Header',0,0,'C');
/* setting header table */
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(1 , 0.5, 'No' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Nama Karyawan' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Departemen' , 1, 'LR', 'C');
$this->fpdf->Cell(9.7 , 0.5, 'Keterangan' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Request' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Jatuh Tempo' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Total Request' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Belum Dibayar' , 1, 'LR', 'C');
/* generate hasil query disini */
$no = 1;
foreach($all as $b)
{
	$date1 = new DateTime($b->tgl_trans);
	$tglTrans	= $date1->format('d-m-Y');
	$date2 = new DateTime($b->tgl_jt);
	$tglJt	= $date2->format('d-m-Y');	
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',8);
$this->fpdf->Cell(1 , 0.5, $no , 1, 'LR', 'L');
$this->fpdf->Cell(3 , 0.5, $b->nama_kyw , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, $b->nama_dept , 1, 'LR', 'C');
$this->fpdf->Cell(9.7 , 0.5, $b->keterangan , 1, 'LR', 'L');
$this->fpdf->Cell(3 , 0.5, $tglTrans , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, $tglJt , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, number_format($b->jml_uang,2,",",".") , 1, 'LR', 'R');
$this->fpdf->Cell(3 , 0.5, 0.00 , 1, 'LR', 'R');
$no++;
}
/* setting posisi footer 3 cm dari bawah */
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("laporan_rekap_advance_".date('d-m-Y h:i:sa').".pdf","I");
?>
