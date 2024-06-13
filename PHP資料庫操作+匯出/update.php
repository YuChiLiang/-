<meta chatset='utf8'>

<?php
$No = $_GET['No']; //從 URL 獲取 No

$link = @mysqli_connect('localhost', 'root', '0000', 'school');

// SQL 語法
$sql = "SELECT * FROM student WHERE No='$No'";

//送出查詢
$result = mysqli_query($link, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $Name = $row["sName"];
    $Departmant = $row["sDepartment"];
} else {
    echo "錯誤: " . $sql . "<br>" . mysqli_error($link);
}

echo "<a href='index.php'>查看資料庫</a>";
?>

<form action="updateCheck.php" method="post">
編號：<?php echo $No ?><input type="hidden" name="uNo" value='<?php echo $No?>'></br>
姓名：<input type="text" name="uName" value='<?php echo $Name ?>'></br>
系所：<input type="text" name="uDep" value='<?php echo $Departmant ?>'></br>

<input type="submit">

</form>