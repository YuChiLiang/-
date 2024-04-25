<meta chatset="utf8">

<?php
// 連接資料庫
$link = @mysqli_connect('localhost', 'root', '', 'im_sheet');

session_start();

// 獲取表單資料
$formData = $_SESSION['formData'];

//宣告表單資料變數
$sName = $formData['sName'];
$sId = $formData['sId'];
$sGender = $formData['sGender'];
$sCity = $formData['sCity'];
$sEmail = $formData['sEmail'];
$sDate = $formData['sDate'];
$sAttendance = $formData['sAttendance'];
$sComment = $formData['sComment'];

// SQL 語法
$sql = "INSERT INTO survey_result(Name, ID, Gender, City, Email, Date, Attendance, Comment) 
        VALUES ('$sName', '$sId', '$sGender', '$sCity', '$sEmail', '$sDate', '$sAttendance', '$sComment')";

// 送出查詢
$result = mysqli_query($link, $sql);

// 確認是否成功新增資料
if ($result) {
    echo "<br/>新增成功";
} else {
    echo "錯誤: " . $sql . "<br>" . mysqli_error($link);
}

echo "<br/><a href='show_db.php'>查看資料庫</a>";

// 關閉資料庫連接
mysqli_close($link);

// 清除SESSION中的表單資料
unset($_SESSION['formData']);
?>