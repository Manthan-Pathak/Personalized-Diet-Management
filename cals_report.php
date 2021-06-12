<?php
require_once 'tcpdf/tcpdf.php';
include 'dbcon.php';
date_default_timezone_set("Asia/kolkata");

$type = $_POST['type'];

if($type == 1){
	$title="All user's Maintenance Caories Record";
    $squery = "select * from mcals";
    $querysel = mysqli_query($con, $squery);

}elseif($type == 3){
	$title="Maintenance calories Record based on user's Id";
    $squery = "select * from mcals where usrid='" . $_POST['usrid'] . "'";
    $querysel = mysqli_query($con, $squery);
}


class MYPDF extends TCPDF {

	public function Header() {
		$image_file = 'assets/images/sitelogo.png';
		$this->Image($image_file, 10, 5, 50, 10);
		$this->SetXY(190, 10);
		$date = date('d M Y');
		$this->Cell(10, 8, $date, 0, 0, 'R');
		$this->Line(10, 17.5, 200, 17.5);
	}

	public function Footer() {
		$this->Line(10, 282, 200, 282);
		$this->SetY(-15);
		$this->SetFont('helvetica', 'B', 8);
		$this->Cell(0, 10, $this->getAliasNumPage(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}

}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetFont('helvetica', '', 10, '', true);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->setFontSubsetting(true);
//$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);
$pdf->SetTitle($title.' Report');

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->AddPage('p','A4');
$pdf->SetLineStyle(array('width' => 0.1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(80, 80, 80)));

$pdf->SetXY(10, 20);
$pdf->SetFont('helvetica', 'B', 13, '', true);

$pdf->Cell(190, 8, $title.' Report', 0, 0, 'C');
$pdf->SetXY(14, 30);
$pdf->SetFont('helvetica', '', 10, '', true);
/*
 * b74c4c
 * 7c9bbd
 * */
$pageno = $pdf->PageNo();
$htmlData = '
			<style>
			tbody{
			page-break-inside: auto;
			}
				table th {
					border-right: 1px solid #fff;
				}
				table,
				table td {
					border: 1px solid #60ba62;
				}
			</style>

			<table width="100%" style="padding:10px;border: 1px solid #60ba62;">
				<tr style="background-color: #60ba62;">
					<th>Id</th>
                    <th>User\'s Id</th>
                    <th>Date Of Test</th>
                    <th>Maintenance Calories</th>
                   <th>Fat</th>
                   <th>Protine</th>
                   <th>Carbs</th>
                    
				</tr>
			';
while ($res = mysqli_fetch_array($querysel)) 
{
	$htmlData .='
				<tr>
					<td>'.  $res['cid'] .'</td>
					<td>'.  $res['usrid'] .'</td>
					<td>'.  $res['bdate'] .'</td>
					<td>'.  $res['cals'] .'</td>
					<td>'.  $res['fat'] .'</td>
					<td>'.  $res['prot'] .'</td>
					<td>'.  $res['carb'] .'</td>
					
					
				</tr>';
}

$htmlData .= '</table>';

// Print text using writeHTMLCell()
//$pdf->setTableHeader();
$pdf->writeHTML( $htmlData, 0, 1, 0, true, '');

$pdf->Output('commission.pdf', 'I');
