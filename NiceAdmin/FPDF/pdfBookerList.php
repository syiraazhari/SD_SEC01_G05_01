<?php
require_once 'fpdf.php';
$con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
$sql = "select * from bookerlist";
$data = mysqli_query($con, $sql);


if(isset($_POST['BookerListPDF']))
{
    class PDF extends FPDF
    {
// Page header
        function Header()
        {

            $this->Image('UTM-LOGO.png',8,6,20);
            // Arial bold 15
            $this->SetFont('Arial','B',25);
            // Move to the right
            $this->Cell(30);
            // Title
            $this->Cell(30,10,'Booker List',0,0,'C');
            // Line break
            $this->Ln(20);
        }

    }

    $pdf = new PDF('p','mm','a4');
    $pdf->SetFont('arial','b','8');
    $pdf->AddPage();
    $pdf->cell('55','10','Email','1','0','C');
    $pdf->cell('40','10','Name','1','0','C');
    $pdf->cell('40','10','Matric Num/Staff Id','1','0','C');
    $pdf->cell('25','10','Phone Number','1','0','C');
    $pdf->cell('30','10','User Type','1','1','C');

    $pdf->SetFont('arial','','8');

    while($row = mysqli_fetch_assoc($data))
    {
        $pdf->cell('55','10',$row['userId'],'1','0','C');
        $pdf->cell('40','10',$row['name'],'1','0','C');
        $pdf->cell('40','10',$row['MatricNum'],'1','0','C');
        $pdf->cell('25','10',$row['phoneNum'],'1','0','C');
        $pdf->cell('30','10',$row['UserType'],'1','1','C');

    }
    $pdf->Output("D","BookerList.pdf");

}