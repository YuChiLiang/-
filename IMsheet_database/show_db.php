<meta chatset='utf8'>

<?php
//連接資料庫
$link = @mysqli_connect('localhost', 'root', '', 'im_sheet');//注意是mysql"i"

//判斷資料庫是否連接成功
if (!$link) {
    die("無法連接資料庫!<br/>");
} else {
    echo "資料庫已連接!<br/>";
}

//sql語法
$sql = "SELECT * FROM survey_result";

//送出查詢
$result = mysqli_query($link, $sql);

//列出表格資料
echo "<table border='3'>";
echo "<tr><th>No</th><th>Name</th><th>ID</th><th>Gender</th><th>City</th><th>Email</th><th>Date</th><th>Attendance</th><th>Comment</th>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["ID"]."</td><td>".$row["Gender"]."</td><td>".$row["City"]."</td><td>".$row["Email"]."</td><td>".$row["Date"]."</td><td>".$row["Attendance"]."</td>";
    // 使用 nl2br 函式轉換意見文字中的換行符號
    echo "<td>".nl2br($row["Comment"])."</td>";
    // 刪除連結
    echo "<td><a href='delete_data.php?No=".$row["No"]."'>刪除</a></td>";
    // 修改連結，這裡需要注意要傳遞相應的編號或識別碼，以便後續進行修改操作
    echo "<td>修改</td>";
    echo "</tr>";
}
echo "</table>";



echo "<a href='sheet.php'>新增</a>";


mysqli_close($link); // 關閉資料庫連接，釋放資源

?>
