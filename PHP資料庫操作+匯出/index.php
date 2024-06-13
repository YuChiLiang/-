<meta chatset='utf8'>

<?php
//連接資料庫
$link = @mysqli_connect('localhost', 'root', '0000', 'school');//注意是mysql"i"

//判斷資料庫是否連接成功
if (!$link) {
    die("無法連接資料庫!<br/>");
} else {
    echo "資料庫已連接!<br/>";
}

//sql語法
$sql = "SELECT * FROM student";

//送出查詢
$result = mysqli_query($link, $sql);

//列出表格資料
echo "<table border='3'>";
echo "<tr><th>No</th><th>sNo</th><th>sName</th><th>sDepartment</th><th>sAddress</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["sNo"]."</td><td>".$row["sName"]."</td><td>".$row["sDepartment"]."</td><td>".$row["sAddress"].
            "<td><a href='del.php?No=".$row["No"]."'>刪除</a></td>".//刪除按鈕
            "<td><a href='update.php?No=".$row["No"]."'>修改</a></td>"."</td>";//修改按鈕

    echo "</tr>";
}

echo "</table>";

echo "<a href='add.php'>新增</a>";

mysqli_close($link); // 關閉資料庫連接，釋放資源

?>
<br>
<a href="excel.php" download>點擊這裡下載 Excel 檔案</a>
<br>
<a href="pdf.php" download>點擊這裡下載 PDF 檔案</a>