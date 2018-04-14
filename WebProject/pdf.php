<?php


require("fpdf181/fpdf.php");

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B','18');
$pdf->SetFillColor(255,55,44);
$pdf->SetDrawColor(255,124,44);
$pdf->SetTextColor(5,220,24);
$pdf->Cell(100,10,'This is my pdf', 1, 0, "", "true");
$pdf->Cell(50,10,'This is my pdf',1,1, "", "true");
$pdf->Cell(50,10,'',0,1, "", "");
$pdf->Cell(100,10,'This is my pdf' , 1,2, "", "true");

$pdf-> Image('p1.jpg',0,0,10,10);

//$pdf->Image("p.jpg",20 ,20,20,20, "JPG");

$pdf->output();











?>