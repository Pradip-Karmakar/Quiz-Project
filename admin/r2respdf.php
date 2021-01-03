<?php
session_start();
	$con=mysqli_connect("localhost","root","","qz")or die('Could Not Connect...'.mysql_error());
	require('fpdf/fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();

	//$pdf->AddFont('helvetica','','helvetica.php');  //addfont from here which are in font folder
	$pdf->SetFont('Arial','B',20);

	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell(450,3,"Candidate who qualify for 2nd Rounds");
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,15,"No");
	$pdf->Cell(100,15,"Name");
	$pdf->Cell(30,15,"username");
	$pdf->Ln();
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(450,3,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------");

			$mr = $_SESSION['pma'];
			$sql = "select * from round1res where mark >= '$mr'";
			$result = mysqli_query($con,$sql);
			$No = 0;
			while($rows=mysqli_fetch_array($result))
			{
				$No = $No + 1;
				$fullname = $rows['fname'].' '.$rows['lname'];
				$urname = $rows['urname'];
				
				$pdf->Ln();
				$pdf->Cell(10,15,$No);
				$pdf->Cell(100,15,$fullname);
				$pdf->Cell(30,15,$urname);
			}
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(450,3,"-----------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell(450,3,"                                helo");
	//$pdf->Output();
	$pdf->Output('D','resultr1.pdf'); // D - parameter used for, force to download file ,,second parameter is file name


?>
