<?php
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(0.5,0.5,0.5);
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();
$this->fpdf->Image($image1,0.4,1,5);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(20,0.3,$nama,0,0,'C');
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Ln();
$this->fpdf->Cell(12.1,0.8,$tower,0,0,'R');
$this->fpdf->Ln();
$this->fpdf->Cell(16.1,0.4,$alamat,0,0,'R');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(12,1.3,$laporan,0,0,'R');
$this->fpdf->Ln();
/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(0.5,3.15,20.5,3.15);
$this->fpdf->Line(0.5,3.20,20.5,3.20);
/* ————– Header Halaman selesai ————————————————*/

//$this->fpdf->SetFont('Times','B',12);
//$this->fpdf->Cell(19,1,'Header',0,0,'C');
/* setting header table */
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(3.5 , 0.5, 'Kode Perkiraan' , 0, 'LR', 'L');
$this->fpdf->Cell(8.5 , 0.5, 'Nama Perkiraan' , 0, 'LR', 'C');
$this->fpdf->Cell(3 , 0.5, 'Kode Alternative' , 0, 'LR', 'L');
$this->fpdf->Cell(2 , 0.5, 'Type' , 0, 'LR', 'C');
$this->fpdf->Cell(2 , 0.5, 'Debet / Kredit' , 0, 'LR', 'L');
/* generate hasil query disini */
$this->fpdf->Line(0.5 , 3.90 , 20.5 , 3.90);
$this->fpdf->Line(0.5 , 3.95 , 20.5 , 3.95);
$this->fpdf->Ln();
foreach($all as $p)
{
$this->fpdf->Ln();
$this->fpdf->SetFont('Times','',10);
$this->fpdf->Cell(4 , 0.5, $p->kode_perk , 0, 'LR', 'L');
				if($p->level == 1){
					$a = $p->nama_perk;
				}elseif($p->level == 2){
					$a = ' '.$p->nama_perk;
				}elseif($p->level == 3){
					$a = '  '.$p->nama_perk;
				}elseif($p->level == 4){
					$a = '   '.$p->nama_perk;
				}elseif($p->level == 5){
					$a = '    '.$p->nama_perk;
				}elseif($p->level == 6){
					$a = '     '.$p->nama_perk;
				}elseif($p->level == 7){
					$a = '      '.$p->nama_perk;
				}else{
					$a = '       '.$p->nama_perk;
				}
$this->fpdf->Cell(8 , 0.5, $a , 0, 'LR', 'L');
$this->fpdf->Cell(3 , 0.5, $p->kode_alt , 0, 'LR', 'L');
$this->fpdf->Cell(2.3 , 0.5, $p->type , 0, 'LR', 'C');
$this->fpdf->Cell(2.5 , 0.5, $p->dk , 0, 'LR', 'C');
}
/* setting posisi footer 3 cm dari bawah */
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("laporan_perkiraan_".date('d-m-Y h:i:sa').".pdf","I");
?>
