<?php
session_start();


  $name= $_SESSION['name'];
  $_SESSION['cart'];
    $total =$_SESSION['total'];
  $date= date("Y/m/d");

require("fpdf181/fpdf.php");

$pdf=new FPDF();
$pdf->AddPage();


$pdf->SetFont('Arial','B','18');
$pdf-> Image('my.jpg',30,30,150,40);

$pdf->SetDrawColor(255,124,44);
$pdf->SetTextColor(5,220,24);

$pdf->Cell(50,80,"", 0, 1,"C","");

$pdf->Cell(95,20,"", 0, 0,"C",""); 
$pdf->Cell(95,20,'Date ='.$date, 0, 1,"R","");

$pdf->Cell(95,20, "Name ", 1,0, "C", "true");

$pdf->Cell(95,20, $name, 1,1, "C", "true");


$pdf->Cell(95,20,'Total Price',1,0, "C", "true");

$pdf->Cell(95,20, $total, 1,2, "C", "true");



//$pdf->Image("p.jpg",20 ,20,20,20, "JPG");

$pdf->output();

















?>