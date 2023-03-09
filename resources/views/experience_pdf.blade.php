
@include('lib/tcpdf/tcpdf');
@include('lib/tcpdf/autoload');
<?php

$date = $_POST["date"];
$name = $_POST["name"];
$career = $_POST["career"];
$skill = $_POST["skill"];
$licence = $_POST["licence"];
$summary = $_POST["summary"];

$work_history_company1 = $_POST["work_history_company1"];
$work_history_period1 = $_POST["work_history_period1"];
$work_history_content1 = $_POST["work_history_content1"];
$work_history_capital1 = $_POST["work_history_capital1"];
$work_history_employees1 = $_POST["work_history_employees1"];
$work_history_business1 = $_POST["work_history_business1"];
$work_history_business_period1 = $_POST["work_history_business_period1"];
$work_history_body1 = $_POST["work_history_body1"];

$work_history_company2 = $_POST["work_history_company2"];
$work_history_period2 = $_POST["work_history_period2"];
$work_history_content2 = $_POST["work_history_content2"];
$work_history_capital2 = $_POST["work_history_capital2"];
$work_history_employees2 = $_POST["work_history_employees2"];
$work_history_business2 = $_POST["work_history_business2"];
$work_history_business_period2 = $_POST["work_history_business_period2"];
$work_history_body2 = $_POST["work_history_body2"];

$work_history_company3 = $_POST["work_history_company3"];
$work_history_period3 = $_POST["work_history_period3"];
$work_history_content3 = $_POST["work_history_content3"];
$work_history_capital3 = $_POST["work_history_capital3"];
$work_history_employees3 = $_POST["work_history_employees3"];
$work_history_business3 = $_POST["work_history_business3"];
$work_history_business_period3 = $_POST["work_history_business_period3"];
$work_history_body3 = $_POST["work_history_body3"];

$work_history_company4 = $_POST["work_history_company4"];
$work_history_period4 = $_POST["work_history_period4"];
$work_history_content4 = $_POST["work_history_content4"];
$work_history_capital4 = $_POST["work_history_capital4"];
$work_history_employees4 = $_POST["work_history_employees4"];
$work_history_business4 = $_POST["work_history_business4"];
$work_history_business_period4 = $_POST["work_history_business_period4"];
$work_history_body4 = $_POST["work_history_body4"];

$work_history_company5 = $_POST["work_history_company5"];
$work_history_period5 = $_POST["work_history_period5"];
$work_history_content5 = $_POST["work_history_content5"];
$work_history_capital5 = $_POST["work_history_capital5"];
$work_history_employees5 = $_POST["work_history_employees5"];
$work_history_business5 = $_POST["work_history_business5"];
$work_history_business_period5 = $_POST["work_history_business_period5"];
$work_history_body5 = $_POST["work_history_body5"];

$pdf = new setasign\Fpdi\Tcpdf\Fpdi("P", "mm", "A4"); //縦方向「P」、横方向「L」

$pdf->setPrintHeader( false );
$pdf->setPrintFooter(false);


if(empty($work_history_company2)) {
    $pdf->setSourceFile("./experience.pdf");

     // 1ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(1);
    $pdf->useTemplate($tpl);


    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(165, 25, htmlspecialchars($date));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(167, 30, htmlspecialchars($name));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 50);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($career));

    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 86.5, htmlspecialchars($work_history_company1));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 86.5, htmlspecialchars($work_history_period1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 97.5, htmlspecialchars($work_history_content1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 106.8, htmlspecialchars($work_history_capital1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 106.8, htmlspecialchars($work_history_employees1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 118, htmlspecialchars($work_history_business1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 118, htmlspecialchars($work_history_business_period1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 124);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 175);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($skill));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 205);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($licence));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 234);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($summary));

} elseif(empty($work_history_company3)) {
    $pdf->setSourceFile("./experience2.pdf");

    // 1ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(1);
    $pdf->useTemplate($tpl);


    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(165, 25, htmlspecialchars($date));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(167, 30, htmlspecialchars($name));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 50);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($career));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 86.5, htmlspecialchars($work_history_company1));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 86.5, htmlspecialchars($work_history_period1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 97.5, htmlspecialchars($work_history_content1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 106.8, htmlspecialchars($work_history_capital1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 106.8, htmlspecialchars($work_history_employees1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 118, htmlspecialchars($work_history_business1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 118, htmlspecialchars($work_history_business_period1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 124);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body1));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 179, htmlspecialchars($work_history_company2));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 179, htmlspecialchars($work_history_period2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 190, htmlspecialchars($work_history_content2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 199.3, htmlspecialchars($work_history_capital2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 199.3, htmlspecialchars($work_history_employees2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 210.5, htmlspecialchars($work_history_business2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 210.5, htmlspecialchars($work_history_business_period2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 216.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body2));


    // 2ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(2);
    $pdf->useTemplate($tpl);

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 21);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($skill));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 51);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($licence));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 80);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($summary));


} elseif(empty($work_history_company4)) {
    $pdf->setSourceFile("./experience3.pdf");

    // 1ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(1);
    $pdf->useTemplate($tpl);

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(165, 25, htmlspecialchars($date));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(167, 30, htmlspecialchars($name));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 50);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($career));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 86.5, htmlspecialchars($work_history_company1));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 86.5, htmlspecialchars($work_history_period1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 97.5, htmlspecialchars($work_history_content1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 106.8, htmlspecialchars($work_history_capital1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 106.8, htmlspecialchars($work_history_employees1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 118, htmlspecialchars($work_history_business1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 118, htmlspecialchars($work_history_business_period1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 124);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body1));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 179, htmlspecialchars($work_history_company2));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 179, htmlspecialchars($work_history_period2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 190, htmlspecialchars($work_history_content2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 199.3, htmlspecialchars($work_history_capital2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 199.3, htmlspecialchars($work_history_employees2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 210.5, htmlspecialchars($work_history_business2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 210.5, htmlspecialchars($work_history_business_period2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 216.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body2));



    // 2ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(2);
    $pdf->useTemplate($tpl);

    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 24.5, htmlspecialchars($work_history_company5));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 24.5, htmlspecialchars($work_history_period5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 35.5, htmlspecialchars($work_history_content5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 44.8, htmlspecialchars($work_history_capital5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 44.8, htmlspecialchars($work_history_employees5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 56, htmlspecialchars($work_history_business5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 56, htmlspecialchars($work_history_business_period5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 62);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body5));


    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 113);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($skill));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 143);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($licence));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 172);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($summary));

} elseif(empty($work_history_company5)) {
    $pdf->setSourceFile("./experience4.pdf");
    
    // 1ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(1);
    $pdf->useTemplate($tpl);

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(165, 25, htmlspecialchars($date));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(167, 30, htmlspecialchars($name));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 50);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($career));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 86.5, htmlspecialchars($work_history_company1));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 86.5, htmlspecialchars($work_history_period1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 97.5, htmlspecialchars($work_history_content1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 106.8, htmlspecialchars($work_history_capital1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 106.8, htmlspecialchars($work_history_employees1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 118, htmlspecialchars($work_history_business1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 118, htmlspecialchars($work_history_business_period1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 124);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body1));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 179, htmlspecialchars($work_history_company2));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 179, htmlspecialchars($work_history_period2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 190, htmlspecialchars($work_history_content2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 199.3, htmlspecialchars($work_history_capital2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 199.3, htmlspecialchars($work_history_employees2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 210.5, htmlspecialchars($work_history_business2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 210.5, htmlspecialchars($work_history_business_period2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 216.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body2));


    // 2ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(2);
    $pdf->useTemplate($tpl);

    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 24.5, htmlspecialchars($work_history_company3));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 24.5, htmlspecialchars($work_history_period3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 35.5, htmlspecialchars($work_history_content3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 44.8, htmlspecialchars($work_history_capital3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 44.8, htmlspecialchars($work_history_employees3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 56, htmlspecialchars($work_history_business3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 56, htmlspecialchars($work_history_business_period3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 62);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body3));

    
    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 117, htmlspecialchars($work_history_company4));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 117, htmlspecialchars($work_history_period4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 128, htmlspecialchars($work_history_content4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 137.3, htmlspecialchars($work_history_capital4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 137.3, htmlspecialchars($work_history_employees4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 148.5, htmlspecialchars($work_history_business4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 148.5, htmlspecialchars($work_history_business_period4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 154.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body4));

    // 3ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(3);
    $pdf->useTemplate($tpl);
    
    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 21);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($skill));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 51);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($licence));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 80);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($summary));

} else {
    $pdf->setSourceFile("./experience5.pdf");

    // 1ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(1);
    $pdf->useTemplate($tpl);


    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(165, 25, htmlspecialchars($date));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(167, 30, htmlspecialchars($name));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 50);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($career));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 86.5, htmlspecialchars($work_history_company1));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 86.5, htmlspecialchars($work_history_period1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 97.5, htmlspecialchars($work_history_content1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 106.8, htmlspecialchars($work_history_capital1));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 106.8, htmlspecialchars($work_history_employees1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 118, htmlspecialchars($work_history_business1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 118, htmlspecialchars($work_history_business_period1));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 124);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body1));


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 179, htmlspecialchars($work_history_company2));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 179, htmlspecialchars($work_history_period2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 190, htmlspecialchars($work_history_content2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 199.3, htmlspecialchars($work_history_capital2));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 199.3, htmlspecialchars($work_history_employees2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 210.5, htmlspecialchars($work_history_business2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 210.5, htmlspecialchars($work_history_business_period2));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 216.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body2));


    // 2ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(2);
    $pdf->useTemplate($tpl);


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 24.5, htmlspecialchars($work_history_company3));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 24.5, htmlspecialchars($work_history_period3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 35.5, htmlspecialchars($work_history_content3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 44.8, htmlspecialchars($work_history_capital3));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 44.8, htmlspecialchars($work_history_employees3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 56, htmlspecialchars($work_history_business3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 56, htmlspecialchars($work_history_business_period3));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 62);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body3));

    
    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 117, htmlspecialchars($work_history_company4));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 117, htmlspecialchars($work_history_period4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 128, htmlspecialchars($work_history_content4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 137.3, htmlspecialchars($work_history_capital4));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 137.3, htmlspecialchars($work_history_employees4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 148.5, htmlspecialchars($work_history_business4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 148.5, htmlspecialchars($work_history_business_period4));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 154.5);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body4));


    // 3ページ目
    $pdf->AddPage();
    $tpl = $pdf->importPage(3);
    $pdf->useTemplate($tpl);
    $pdf -> lastPage(); 


    $pdf->SetFont('kozminproregular', '', 11);
    $pdf->Text(32, 24.5, htmlspecialchars($work_history_company5));

    $pdf->SetFont('kozminproregular', '', 9.5);
    $pdf->Text(143, 24.5, htmlspecialchars($work_history_period5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(34, 35.5, htmlspecialchars($work_history_content5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(37, 44.8, htmlspecialchars($work_history_capital5));

    $pdf->SetFont('kozminproregular', '', 10);
    $pdf->Text(111, 44.8, htmlspecialchars($work_history_employees5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(15, 56, htmlspecialchars($work_history_business5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(60, 56, htmlspecialchars($work_history_business_period5));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 62);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($work_history_body5));


    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 113);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($skill));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 143);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($licence));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->SetXY(15, 172);
    $pdf->MultiCell(170.5, 0, htmlspecialchars($summary));
}








// dd($work_history_company2);


//$pdf->SetFont('kozminproregular', スタイル, サイズ);
//$pdf->Text(x座標, y座標, テキスト);

if(empty($work_history_company2)) {
    
}





//$pdf->Output(出力時のファイル名, 出力モード);
ob_end_clean();
$pdf->Output("experience.pdf", "I");