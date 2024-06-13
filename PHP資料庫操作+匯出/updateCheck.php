<meta chatset='utf8'>

<?php
$No = $_POST['uNo'];
$sName = $_POST['uName'];
$sDepartmant = $_POST['uDep'];

$link = @mysqli_connect('localhost', 'root', '0000', 'school');

// SQL 語法
$sql = "UPDATE student SET sName='$sName', sDepartment='$sDepartmant' WHERE No='$No'";

$result = mysqli_query($link, $sql);

if ($result) {
    echo "更新成功";
}


echo "<br>" . "<a href='index.php'>查看資料庫</a>";
?>