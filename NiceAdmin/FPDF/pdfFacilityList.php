<?php
    require_once 'fpdf.php';
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    $sql = "select * from facility";
    $data = mysqli_query($con, $sql);

    if(isset($_POST['FacilityListPDF']))
    {

        $pdf = new FPDF('l','mm','a4');
    $pdf->SetFont('arial','b','8');
    $pdf->AddPage();
    $pdf->cell('20','10','Facility Id','1','0','C');
    $pdf->cell('60','10','Name','1','0','C');
    $pdf->cell('25','10','Category','1','0','C');
    $pdf->cell('25','10','Capacity','1','0','C');
    $pdf->cell('100','10','Facility Detail','1','0','C');
    $pdf->cell('20','10','Rate Per Day','1','0','C');
    $pdf->cell('30','10','Status','1','1','C');

        $pdf->SetFont('arial','','8');

    while($row = mysqli_fetch_assoc($data))
    {
        $pdf->cell('20','10',$row['facilityId'],'1','0','C');
        $pdf->cell('60','10',$row['name'],'1','0','C');
        $pdf->cell('25','10',$row['category'],'1','0','C');
        $pdf->cell('25','10',$row['capacity'],'1','0','C');
        $pdf->cell('100','10',$row['facilityDetail'],'1','0','C');
        $pdf->cell('20','10',$row['ratePerDay'],'1','0','C');
        $pdf->cell('30','10',$row['status'],'1','1','C');
    }
    $pdf->Output("D",'FacilityList.pdf');

    }