<?php
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("L","cm","A4");
$this->fpdf->SetMargins(0.5,0.5,0.5);
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(28.5,0.3,$nama,0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Ln();
$this->fpdf->Cell(17.1,0.8,$tower,0,0,'R');
$this->fpdf->Ln();
$this->fpdf->Cell(19.3,0.4,$alamat,0,0,'R');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(16.5,1.3,$laporan,0,0,'R');
$this->fpdf->Ln();
/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(0.5,3.15,29.5,3.15);
$this->fpdf->Line(0.5,3.20,29.5,3.20);
/* ————– Header Halaman selesai ————————————————*/

//$this->fpdf->SetFont('Times','B',12);
//$this->fpdf->Cell(19,1,'Header',0,0,'C');
/* setting header table */
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(1.5 , 0.5, 'Kode' , 0, 'LR', 'L');
$this->fpdf->Cell(5.9 , 0.5, 'Nama Perkiraan' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Jan' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Feb' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Mar' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Apr' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Mei' , 0, 'LR', 'L');
$this->fpdf->Cell(1.8 , 0.5, 'Jun' , 0, 'LR', 'L');
$this->fpdf->Cell(1.8 , 0.5, 'Jul' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Aug' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Sep' , 0, 'LR', 'L');
$this->fpdf->Cell(1.9 , 0.5, 'Oct' , 0, 'LR', 'L');
$this->fpdf->Cell(1.8 , 0.5, 'Nov' , 0, 'LR', 'L');
$this->fpdf->Cell(1.8 , 0.5, 'Des' , 0, 'LR', 'L');
/* generate hasil query disini */
$this->fpdf->Line(0.5 , 3.90 , 29.5 , 3.90);
$this->fpdf->Line(0.5 , 3.95 , 29.5 , 3.95);
$this->fpdf->Ln();
foreach($all as $b)
{
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',7);
$this->fpdf->Cell(1.5 , 0.5, $b->kode_perk , 0, 'LR', 'L');
				if($b->level == 1){
					$a = $b->nama_perk;
				}elseif($b->level == 2){
					$a = ' '.$b->nama_perk;
				}elseif($b->level == 3){
					$a = '  '.$b->nama_perk;
				}elseif($b->level == 4){
					$a = '   '.$b->nama_perk;
				}elseif($b->level == 5){
					$a = '    '.$b->nama_perk;
				}elseif($b->level == 6){
					$a = '     '.$b->nama_perk;
				}elseif($b->level == 7){
					$a = '      '.$b->nama_perk;
				}else{
					$a = '       '.$b->nama_perk;
				}
$this->fpdf->Cell(5.2, 0.5, $a , 0, 'LR', 'L');
$this->fpdf->Cell(1.8 , 0.5, number_format($b->jan,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.8 , 0.5, number_format($b->feb,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.8 , 0.5, number_format($b->mar,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.8 , 0.5, number_format($b->apr,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.8 , 0.5, number_format($b->mei,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->jun,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->jul,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->agu,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->sep,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->okt,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->nov,2,",",".") , 0, 'LR', 'R');
$this->fpdf->Cell(1.9 , 0.5, number_format($b->des,2,",",".") , 0, 'LR', 'R');
}
/* setting posisi footer 3 cm dari bawah */
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("laporan_perkiraan_".date('d-m-Y h:i:sa').".pdf","I");
?>
