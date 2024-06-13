<?php
// 設定標頭來告訴瀏覽器這是 Excel 檔案
header("Pragma: public");
header("Expires: 0");
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="applicant.xls"'); // 使用 attachment 使其成為下載檔案
header('Content-Transfer-Encoding: binary');

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

// 開始輸出 Excel 檔案內容
echo "<table border='1'>"; // 加上 border 方便在 Excel 中查看
echo "<tr>";
echo "<th>NO.</th>";
echo "<th>學號</th>";
echo "<th>中文姓名</th>";
echo "<th>系所</th>";
echo "<th>地址</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". htmlspecialchars($row["No"])."</td>"; // 使用 htmlspecialchars 來避免特殊字元問題
    echo "<td>". htmlspecialchars($row["sNo"])."</td>";
    echo "<td>". htmlspecialchars($row["sName"])."</td>";
    echo "<td>". htmlspecialchars($row["sDepartment"])."</td>";
    echo "<td>". htmlspecialchars($row["sAddress"])."</td>";
    echo "</tr>";
}
echo "</table>";

// 釋放查詢結果
mysqli_free_result($result);

// 關閉資料庫連接
mysqli_close($link);
?>
