<?php
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

require('library/fpdf.php');

$pdf = new FPDF('p', 'mm', 'A4');

$pdf->AddPage();

$pdf -> setFont('Arial', 'B', 14);
$pdf->Cell(60,10,'School Spending',0,1,'C');
$pdf->Ln(5);
$pdf->cell(30, 10,"Item ID",1, 0, 'C');
$pdf->cell(50, 10,"Name",1, 0, 'C');
$pdf->cell(50, 10,"Purchase Date",1, 0, 'C');
$pdf->cell(50, 10,"Price(RM)",1, 1, 'C');

$sql= "SELECT * FROM spending";
$record = mysqli_query($con,$sql);

$pdf-> SetFont('Arial','','13');
while($row= mysqli_fetch_array($record))
{
	$pdf->cell(30,10, $row['itemID'],1,0,'C');
	$pdf->cell(50,10, $row['name'],1,0,'C');
	$pdf->cell(50,10, $row['date'],1,0,'C');
	$pdf->cell(50,10, $row['price'],1,1,'C');
	$sum = $sum + $row['price'];
}
$pdf->cell(80,10, "",0,0,'C');
$pdf->cell(50,10, "Total",1,0,'C');
$pdf->cell(50,10, $sum,1,0,'C');

$pdf->AddPage();

$month = $_POST['month'];
$year = $_POST['year'];

$pdf -> setFont('Arial', 'B', 14);
$pdf->Cell(60,10,'Monthly Fee for '.$month." ".$year,0,1,'C');
$pdf->Ln(5);

$pdf->cell(30,10, "",0,0,'C');
$pdf->cell(30, 10,"student ID",1, 0, 'C');
$pdf->cell(50, 10,"Name",1, 0, 'C');
$pdf->cell(50, 10,"Amount(RM)",1, 1, 'C');



$sql= "SELECT * FROM fees WHERE year='$year' AND month='$month'";
$record = mysqli_query($con,$sql);
$pdf-> SetFont('Arial','','13');

while($row= mysqli_fetch_array($record))
{
$pdf->cell(30,10, "",0,0,'C');
$pdf->cell(30, 10,$row['studentID'],1, 0, 'C');
$pdf->cell(50, 10,$row['name'],1, 0, 'C');
$pdf->cell(50, 10,$row['amount'],1, 1, 'C');
	$sum = $sum + $row['amount'];
}
$pdf->cell(60,10, "",0,0,'C');
$pdf->cell(50,10, "Total",1,0,'C');
$pdf->cell(50,10, $sum,1,0,'C');

$pdf -> OutPut();
