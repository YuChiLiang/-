<meta chatset='utf8'>

<?php
$No = $_GET["No"];

$link = @mysqli_connect('localhost', 'root', '0000', 'school');

// SQL 語法
$sql = "DELETE FROM student WHERE No='$No'";

// 送出查詢
$result = mysqli_query($link, $sql);

// 確認是否成功刪除資料
if ($result) {
    echo "<br/>刪除成功";
} else {
    echo "錯誤: " . $sql . "<br>" . mysqli_error($link);
}

echo "<br/><a href='index.php'>查看資料庫</a>";

// 關閉資料庫連接
mysqli_close($link);

?>