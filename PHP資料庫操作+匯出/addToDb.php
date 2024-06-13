<?php
// 獲取使用者輸入資料
$sNo = $_POST["No"];
$sName = $_POST["Name"];
$sDepartment = $_POST["Department"];
$sAddress = $_POST["Address"];

// 連接資料庫
$link = @mysqli_connect('localhost', 'root', '0000', 'school');

// SQL 語法
$sql = "INSERT INTO student(sNo, sName, sDepartment, sAddress) VALUES ('$sNo', '$sName', '$sDepartment', '$sAddress')";

// 送出查詢
$result = mysqli_query($link, $sql);

// 確認是否成功新增資料
if ($result) {
    echo "<br/>新增成功";
} else {
    echo "錯誤: " . $sql . "<br>" . mysqli_error($link);
}

echo "<br/><a href='index.php'>查看資料庫</a>";

// 關閉資料庫連接
mysqli_close($link);
?>
