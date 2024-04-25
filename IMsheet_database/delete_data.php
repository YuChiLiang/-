<meta chatset='utf8'>

<?php
$sNo = $_GET["No"];

$link = @mysqli_connect('localhost', 'root', '', 'im_sheet');

// SQL 語法
$sql = "DELETE FROM survey_result WHERE No='$sNo'";

// 送出查詢
$result = mysqli_query($link, $sql);

// 確認是否成功刪除資料
if ($result) {
    echo "<br/>刪除成功";
} else {
    echo "錯誤: " . $sql . "<br>" . mysqli_error($link);
}

echo "<br/><a href='show_db.php'>查看資料庫</a>";

// 關閉資料庫連接
mysqli_close($link);

?>