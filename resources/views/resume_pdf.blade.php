
@include('lib/tcpdf/tcpdf');
@include('lib/tcpdf/autoload');
<?php
$pdf = new setasign\Fpdi\Tcpdf\Fpdi("L", "mm", "A4"); //縦方向「P」、横方向「L」

$pdf->setPrintHeader( false );
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(false, 0);

$pdf->setSourceFile("./resume.pdf");
$pdf->AddPage();
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl);


$date = $_POST["date"];
$name = $_POST["name"];
$kana_name = $_POST["kana_name"];
$birth = $_POST["birth"];
$sex = $_POST["sex"];
$post_code = $_POST["post_code"];
$address = $_POST["address"];
$kana_address = $_POST["kana_address"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$post_code_spare = $_POST["post_code_spare"];
$address_spare = $_POST["address_spare"];
$kana_address_spare = $_POST["kana_address_spare"];
$tel_spare = $_POST["tel_spare"];
$email_spare = $_POST["email_spare"];
$motivation = $_POST["motivation"];
$remarks = $_POST["remarks"];

$educational_background_year1 = $_POST["educational_background_year1"];
$educational_background_month1 = $_POST["educational_background_month1"];
$educational_background_body1 = $_POST["educational_background_body1"];
$educational_background_year2 = $_POST["educational_background_year2"];
$educational_background_month2 = $_POST["educational_background_month2"];
$educational_background_body2 = $_POST["educational_background_body2"];
$educational_background_year3 = $_POST["educational_background_year3"];
$educational_background_month3 = $_POST["educational_background_month3"];
$educational_background_body3 = $_POST["educational_background_body3"];
$educational_background_year4 = $_POST["educational_background_year4"];
$educational_background_month4 = $_POST["educational_background_month4"];
$educational_background_body4 = $_POST["educational_background_body4"];
$educational_background_year5 = $_POST["educational_background_year5"];
$educational_background_month5 = $_POST["educational_background_month5"];
$educational_background_body5 = $_POST["educational_background_body5"];
$educational_background_year6 = $_POST["educational_background_year6"];
$educational_background_month6 = $_POST["educational_background_month6"];
$educational_background_body6 = $_POST["educational_background_body6"];
$educational_background_year7 = $_POST["educational_background_year7"];
$educational_background_month7 = $_POST["educational_background_month7"];
$educational_background_body7 = $_POST["educational_background_body7"];
$educational_background_year8 = $_POST["educational_background_year8"];
$educational_background_month8 = $_POST["educational_background_month8"];
$educational_background_body8 = $_POST["educational_background_body8"];

$work_history_year1 = $_POST["work_history_year1"];
$work_history_month1 = $_POST["work_history_month1"];
$work_history_body1 = $_POST["work_history_body1"];
$work_history_year2 = $_POST["work_history_year2"];
$work_history_month2 = $_POST["work_history_month2"];
$work_history_body2 = $_POST["work_history_body2"];
$work_history_year3 = $_POST["work_history_year3"];
$work_history_month3 = $_POST["work_history_month3"];
$work_history_body3 = $_POST["work_history_body3"];
$work_history_year4 = $_POST["work_history_year4"];
$work_history_month4 = $_POST["work_history_month4"];
$work_history_body4 = $_POST["work_history_body4"];
$work_history_year5 = $_POST["work_history_year5"];
$work_history_month5 = $_POST["work_history_month5"];
$work_history_body5 = $_POST["work_history_body5"];
$work_history_year6 = $_POST["work_history_year6"];
$work_history_month6 = $_POST["work_history_month6"];
$work_history_body6 = $_POST["work_history_body6"];
$work_history_year7 = $_POST["work_history_year7"];
$work_history_month7 = $_POST["work_history_month7"];
$work_history_body7 = $_POST["work_history_body7"];
$work_history_year8 = $_POST["work_history_year8"];
$work_history_month8 = $_POST["work_history_month8"];
$work_history_body8 = $_POST["work_history_body8"];
$work_history_year9 = $_POST["work_history_year9"];
$work_history_month9 = $_POST["work_history_month9"];
$work_history_body9 = $_POST["work_history_body9"];
$work_history_year10 = $_POST["work_history_year10"];
$work_history_month10 = $_POST["work_history_month10"];
$work_history_body10 = $_POST["work_history_body10"];

$licence_year1 = $_POST["licence_year1"];
$licence_month1 = $_POST["licence_month1"];
$licence_body1 = $_POST["licence_body1"];
$licence_year2 = $_POST["licence_year2"];
$licence_month2 = $_POST["licence_month2"];
$licence_body2 = $_POST["licence_body2"];
$licence_year3 = $_POST["licence_year3"];
$licence_month3 = $_POST["licence_month3"];
$licence_body3 = $_POST["licence_body3"];
$licence_year4 = $_POST["licence_year4"];
$licence_month4 = $_POST["licence_month4"];
$licence_body4 = $_POST["licence_body4"];
$licence_year5 = $_POST["licence_year5"];
$licence_month5 = $_POST["licence_month5"];
$licence_body5 = $_POST["licence_body5"];
$licence_year6 = $_POST["licence_year6"];
$licence_month6 = $_POST["licence_month6"];
$licence_body6 = $_POST["licence_body6"];

if(!empty($birth)) {
    $birth = date("Y年m月d日",  strtotime($birth));

    $now = date('Ymd');
    $target = array('年', '月', '日');
    $birthday = str_replace($target, "", $birth);
    $age = floor(($now - $birthday) / 10000);
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(71, 39.2, htmlspecialchars($age));
}
//$pdf->SetFont('kozminproregular', スタイル, サイズ);
//$pdf->Text(x座標, y座標, テキスト);

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(71, 16, htmlspecialchars($date));

$pdf->SetFont('kozminproregular', '', 13);
$pdf->Text(35, 29, htmlspecialchars($name));

$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(35, 22, htmlspecialchars($kana_name));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(37, 39.2, htmlspecialchars($birth));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(37, 51, htmlspecialchars($post_code));

$pdf->SetFont('kozminproregular', '', 7);
$pdf->Text(35, 46, htmlspecialchars($kana_address));

$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(25, 58, htmlspecialchars($address));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(120, 46, htmlspecialchars($tel));

$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(115, 58, htmlspecialchars($email));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(38, 71, htmlspecialchars($post_code_spare));

$pdf->SetFont('kozminproregular', '', 7);
$pdf->Text(35, 66, htmlspecialchars($kana_address_spare));

$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(25, 78, htmlspecialchars($address_spare));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(120, 66, htmlspecialchars($tel_spare));

$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(115, 78, htmlspecialchars($email_spare));

$pdf->SetFont('kozminproregular', '', 7);
$pdf->SetXY(152, 118);
$pdf->MultiCell(126, 0, htmlspecialchars($motivation));

$pdf->SetFont('kozminproregular', '', 7);
$pdf->SetXY(152, 159);
$pdf->MultiCell(126, 0, htmlspecialchars($remarks));

// 性別
if($sex == 0) {
    $pdf->SetFont('kozminproregular', '', 15);
    $pdf->Text(82, 37.8, '〇');
} elseif($sex == 1) {
    $pdf->SetFont('kozminproregular', '', 15);
    $pdf->Text(91, 37.8, '〇');
}

// 学歴
$pdf->SetFont('kozminproregular', '', 9);
$pdf->Text(87, 94, "学歴");

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 101.5, htmlspecialchars($educational_background_year1));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 101.5, htmlspecialchars($educational_background_month1));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 101.5, htmlspecialchars($educational_background_body1));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 108, htmlspecialchars($educational_background_year2));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 108, htmlspecialchars($educational_background_month2));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 108, htmlspecialchars($educational_background_body2));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 114, htmlspecialchars($educational_background_year3));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 114, htmlspecialchars($educational_background_month3));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 114, htmlspecialchars($educational_background_body3));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 121, htmlspecialchars($educational_background_year4));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 121, htmlspecialchars($educational_background_month4));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 121, htmlspecialchars($educational_background_body4));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 127.5, htmlspecialchars($educational_background_year5));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 127.5, htmlspecialchars($educational_background_month5));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 127.5, htmlspecialchars($educational_background_body5));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 134, htmlspecialchars($educational_background_year6));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 134, htmlspecialchars($educational_background_month6));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 134, htmlspecialchars($educational_background_body6));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 140.5, htmlspecialchars($educational_background_year7));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 140.5, htmlspecialchars($educational_background_month7));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 140.5, htmlspecialchars($educational_background_body7));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(22, 147, htmlspecialchars($educational_background_year8));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(34, 147, htmlspecialchars($educational_background_month8));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(41, 147, htmlspecialchars($educational_background_body8));

// 資格・免許
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 73.5, htmlspecialchars($licence_year1));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 73.5, htmlspecialchars($licence_month1));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 73.5, htmlspecialchars($licence_body1));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 80, htmlspecialchars($licence_year2));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 80, htmlspecialchars($licence_month2));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 80, htmlspecialchars($licence_body2));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 86, htmlspecialchars($licence_year3));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 86, htmlspecialchars($licence_month3));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 86, htmlspecialchars($licence_body3));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 92.5, htmlspecialchars($licence_year4));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 92.5, htmlspecialchars($licence_month4));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 92.5, htmlspecialchars($licence_body4));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 99, htmlspecialchars($licence_year5));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 99, htmlspecialchars($licence_month5));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 99, htmlspecialchars($licence_body5));

$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(154, 105, htmlspecialchars($licence_year6));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(166, 105, htmlspecialchars($licence_month6));
$pdf->SetFont('kozminproregular', '', 8);
$pdf->Text(174, 105, htmlspecialchars($licence_body6));

// dd($educational_background_year8);
// 職歴




if((!empty($educational_background_year7)) || (!empty($educational_background_year8))) {
    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(87, 159, "職歴");

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 166, htmlspecialchars($work_history_year1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 166, htmlspecialchars($work_history_month1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 166, htmlspecialchars($work_history_body1));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 172.5, htmlspecialchars($work_history_year2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 172.5, htmlspecialchars($work_history_month2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 172.5, htmlspecialchars($work_history_body2));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 179, htmlspecialchars($work_history_year3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 179, htmlspecialchars($work_history_month3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 179, htmlspecialchars($work_history_body3));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 185.5, htmlspecialchars($work_history_year4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 185.5, htmlspecialchars($work_history_month4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 185.5, htmlspecialchars($work_history_body4));

    if(empty($work_history_year5)) {
        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(132, 191, "以上");
    } else {
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(22, 192, htmlspecialchars($work_history_year5));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(34, 192, htmlspecialchars($work_history_month5));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(41, 192, htmlspecialchars($work_history_body5));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 23, htmlspecialchars($work_history_year6));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 23, htmlspecialchars($work_history_month6));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 23, htmlspecialchars($work_history_body6));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 30, htmlspecialchars($work_history_year7));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 30, htmlspecialchars($work_history_month7));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 30, htmlspecialchars($work_history_body7));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 37, htmlspecialchars($work_history_year8));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 37, htmlspecialchars($work_history_month8));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 37, htmlspecialchars($work_history_body8));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 43.5, htmlspecialchars($work_history_year9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 43.5, htmlspecialchars($work_history_month9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 43.5, htmlspecialchars($work_history_body9));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 50.2, htmlspecialchars($work_history_year10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 50.2, htmlspecialchars($work_history_month10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 50.2, htmlspecialchars($work_history_body10));

        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(262, 56, "以上");
    }

} elseif((!empty($educational_background_year5)) || (!empty($educational_background_year6))) {

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(87, 146, "職歴");

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 153, htmlspecialchars($work_history_year1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 153, htmlspecialchars($work_history_month1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 153, htmlspecialchars($work_history_body1));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 159.5, htmlspecialchars($work_history_year2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 159.5, htmlspecialchars($work_history_month2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 159.5, htmlspecialchars($work_history_body2));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 166, htmlspecialchars($work_history_year3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 166, htmlspecialchars($work_history_month3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 166, htmlspecialchars($work_history_body3));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 172.5, htmlspecialchars($work_history_year4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 172.5, htmlspecialchars($work_history_month4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 172.5, htmlspecialchars($work_history_body4));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 179, htmlspecialchars($work_history_year5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 179, htmlspecialchars($work_history_month5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 179, htmlspecialchars($work_history_body5));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 185.5, htmlspecialchars($work_history_year6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 185.5, htmlspecialchars($work_history_month6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 185.5, htmlspecialchars($work_history_body6));

    if(empty($work_history_year7)) {
        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(132, 191, "以上");
    } else {
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(22, 192, htmlspecialchars($work_history_year7));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(34, 192, htmlspecialchars($work_history_month7));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(41, 192, htmlspecialchars($work_history_body7));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 23, htmlspecialchars($work_history_year8));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 23, htmlspecialchars($work_history_month8));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 23, htmlspecialchars($work_history_body8));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 30, htmlspecialchars($work_history_year9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 30, htmlspecialchars($work_history_month9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 30, htmlspecialchars($work_history_body9));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 37, htmlspecialchars($work_history_year10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 37, htmlspecialchars($work_history_month10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 37, htmlspecialchars($work_history_body10));

        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(262, 56, "以上");
    }

} elseif((!empty($educational_background_year3)) || (!empty($educational_background_year4))) {

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(87, 133, "職歴");

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 140, htmlspecialchars($work_history_year1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 140, htmlspecialchars($work_history_month1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 140, htmlspecialchars($work_history_body1));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 146.5, htmlspecialchars($work_history_year2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 146.5, htmlspecialchars($work_history_month2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 146.5, htmlspecialchars($work_history_body2));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 153, htmlspecialchars($work_history_year3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 153, htmlspecialchars($work_history_month3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 153, htmlspecialchars($work_history_body3));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 159.5, htmlspecialchars($work_history_year4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 159.5, htmlspecialchars($work_history_month4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 159.5, htmlspecialchars($work_history_body4));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 166, htmlspecialchars($work_history_year5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 166, htmlspecialchars($work_history_month5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 166, htmlspecialchars($work_history_body5));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 172.5, htmlspecialchars($work_history_year6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 172.5, htmlspecialchars($work_history_month6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 172.5, htmlspecialchars($work_history_body6));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 179, htmlspecialchars($work_history_year7));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 179, htmlspecialchars($work_history_month7));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 179, htmlspecialchars($work_history_body7));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 185.5, htmlspecialchars($work_history_year8));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 185.5, htmlspecialchars($work_history_month8));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 185.5, htmlspecialchars($work_history_body8));

    if(empty($work_history_year9)) {
        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(132, 191, "以上");
    } else {
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(22, 192, htmlspecialchars($work_history_year9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(34, 192, htmlspecialchars($work_history_month9));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(41, 192, htmlspecialchars($work_history_body9));

        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(154, 23, htmlspecialchars($work_history_year10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(166, 23, htmlspecialchars($work_history_month10));
        $pdf->SetFont('kozminproregular', '', 8);
        $pdf->Text(174, 23, htmlspecialchars($work_history_body10));

        $pdf->SetFont('kozminproregular', '', 9);
        $pdf->Text(262, 56, "以上");
    }
} else {
    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(87, 120, "職歴");

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 127, htmlspecialchars($work_history_year1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 127, htmlspecialchars($work_history_month1));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 127, htmlspecialchars($work_history_body1));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 133.5, htmlspecialchars($work_history_year2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 133.5, htmlspecialchars($work_history_month2));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 133.5, htmlspecialchars($work_history_body2));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 140, htmlspecialchars($work_history_year3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 140, htmlspecialchars($work_history_month3));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 140, htmlspecialchars($work_history_body3));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 146.5, htmlspecialchars($work_history_year4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 146.5, htmlspecialchars($work_history_month4));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 146.5, htmlspecialchars($work_history_body4));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 153, htmlspecialchars($work_history_year5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 153, htmlspecialchars($work_history_month5));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 153, htmlspecialchars($work_history_body5));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 159.5, htmlspecialchars($work_history_year6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 159.5, htmlspecialchars($work_history_month6));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 159.5, htmlspecialchars($work_history_body6));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 166, htmlspecialchars($work_history_year7));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 166, htmlspecialchars($work_history_month7));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 166, htmlspecialchars($work_history_body7));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 172.5, htmlspecialchars($work_history_year8));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 172.5, htmlspecialchars($work_history_month8));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 172.5, htmlspecialchars($work_history_body8));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 179, htmlspecialchars($work_history_year9));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 179, htmlspecialchars($work_history_month9));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 179, htmlspecialchars($work_history_body9));

    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(22, 185.5, htmlspecialchars($work_history_year10));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(34, 185.5, htmlspecialchars($work_history_month10));
    $pdf->SetFont('kozminproregular', '', 8);
    $pdf->Text(41, 185.5, htmlspecialchars($work_history_body10));

    $pdf->SetFont('kozminproregular', '', 9);
    $pdf->Text(132, 191, "以上");
}
//$pdf->Output(出力時のファイル名, 出力モード);
ob_end_clean();
$pdf->Output("resume.pdf", "I");