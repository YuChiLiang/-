<?php
require_once('C:/xampp/htdocs/TCPDF/tcpdf.php');

// 連接資料庫
$link = @mysqli_connect('localhost', 'root', '0000', 'school'); // 注意是 mysql"i"

// 判斷資料庫是否連接成功
if (!$link) {
    die("無法連接資料庫!<br/>");
}

// SQL 語法
$sql = "SELECT * FROM student";

// 送出查詢
$result = mysqli_query($link, $sql);

// PDF 
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetFont('msungstdlight', '', 10);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();


$html = '
<h1>學生資料</h1>
<table border="1" cellpadding=" 4">
    <thead>
        <tr>
            <th>No</th>
            <th>sNo</th>
            <th>sName</th>
            <th>sDepartment</th>
            <th>sAddress</th>
        </tr>
    </thead>
    <tbody>';


while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>';
    $html .= '<td>' . $row["No"] . '</td>';
    $html .= '<td>' . $row["sNo"] . '</td>';
    $html .= '<td>' . $row["sName"] . '</td>';
    $html .= '<td>' . $row["sDepartment"] . '</td>';
    $html .= '<td>' . $row["sAddress"] . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody>';
$html .= '</table>';

// 輸出 HTML 內容到 PDF
$pdf->writeHTML($html);

// 關閉資料庫連接
mysqli_close($link);

// 輸出 PDF 文件，直接下載到使用者的 Downloads 資料夾
$pdf->Output("student_info.pdf", 'D');

ob_end_flush();
?>
