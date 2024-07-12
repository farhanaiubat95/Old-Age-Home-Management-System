<?php
//Database Connection
 $con=mysqli_connect("localhost","root","","db_ohms");
$sql="SELECT * FROM `tb_userlog`";
//FPDF file connect
include_once('libs/fpdf.php');

class PDF extends FPDF
{
  //page header
  function Header()
  {
    //logo
    $this->Image('image/logo1.png',7,4,25);
    $this->SetFont('Times','I',15);
    $this->Cell(20);
    $this->Cell(0,5,'Ummah Old Age Home',0,0,'L');
    $this->Ln();
    $this->Ln();

    $this->Cell(61);
    $this->SetFont('Times','B',15);
    //color fill
    $this->SetFillColor(33,73,97);
    $this->SetTextColor(220,225,228);
    
    //Title
    $this->Cell(80,9,'Citizen List',1,0,'C',true);
    //Line break
    $this->Ln(20);
  }

  //Page Footer
  function Footer()
  {
    $this->SetLeftMargin(0);
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Times','I',8);
    //Page Number 
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
}



$pdf= new PDF();

//define new alias for total page numbers

$pdf->SetAutoPageBreak(true,15);

//header
$pdf->AddPage();

$width_cell=array(11,21,26,38,22,38,35);
//Footer page
$pdf->SetFont('Times','B',10);
$pdf->SetFillColor(111,185,218);

//Header Cell
  $pdf->Cell($width_cell[0],12,'ID',1,0,'C',true);  
  $pdf->Cell($width_cell[1],12,'Username',1,0,'C',true);
  $pdf->Cell($width_cell[2],12,'Phone Number',1,0,'C',true);
  $pdf->Cell($width_cell[3],12,'Email',1,0,'C',true);
  $pdf->Cell($width_cell[4],12,'NID',1,0,'C',true);
  $pdf->Cell($width_cell[5],12,'Address',1,0,'C',true);
  $pdf->Cell($width_cell[6],12,'Registration Time',1,1,'C',true);

//table row
$pdf->SetFont('Times','',9);
$pdf->SetFillColor(235,236,236);
$fill=false;

foreach(mysqli_query($con,$sql) as $row)
{
  $pdf->Cell($width_cell[0],10,$row['u_id'],1,0,'C',$fill);
  $pdf->Cell($width_cell[1],10,$row['u_username'],1,0,'C',$fill);
  $pdf->Cell($width_cell[2],10,$row['u_phonenum'],1,0,'C',$fill);
  
  if($pdf->GetStringWidth($row['u_email'])>$width_cell[3])
  {
    $pdf->SetFont('Arial','',7);
    $pdf->Cell($width_cell[3],10,$row['u_email'],1,0,'C',$fill);
    $pdf->SetFont('Arial','',9);
  }else{
    $pdf->Cell($width_cell[3],10,$row['u_email'],1,0,'C',$fill);
  }
  $pdf->Cell($width_cell[4],10,$row['u_national'],1,0,'C',$fill);
  
  if($pdf->GetStringWidth($row['u_address'])>$width_cell[3])
  {
    $pdf->SetFont('Arial','',7);
    $pdf->Cell($width_cell[5],10,$row['u_address'],1,0,'C',$fill);
    $pdf->SetFont('Arial','',9);
  }else{
    $pdf->Cell($width_cell[5],10,$row['u_address'],1,0,'C',$fill);
  }

  $pdf->Cell($width_cell[6],10,$row['u_registrationdate'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
 $fill = !$fill;
}

$pdf->Output();
?>