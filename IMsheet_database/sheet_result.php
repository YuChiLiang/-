<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addToDb.php">
    <?php
        $sName = $_POST["sName"];
        $sId = $_POST["sId"];
        $sGender = $_POST["sGender"];
        $sCity = $_POST["sCity"];
        $sEmail = $_POST["sEmail"];
        $sDate = $_POST["sDate"];
        $sAttendance = $_POST["sAttendance"];
        $sComment = $_POST["sComment"];

        echo "<h2>基本資料</h2>";
        echo "姓名：" . $sName . "<br>";
        echo "學號：" . $sId . "<br>";
        echo "性別：" . $sGender . "<br>";
        echo "居住城市：" . $sCity . "<br>";
        echo "電子郵件：" . $sEmail . "<br>";
    
        echo "<hr>";
        echo "<h2>活動資訊</h2>";
        echo "建議日期：" . $sDate . "<br>";

        if ($sAttendance == "當日出席") {
            $sAttendance = true;
        }else{
            $sAttendance = false;
        }
        echo "參與意願：" . $sAttendance . "<br>";
        echo "意見：" . $sComment . "<br>";
    
        session_start();
        $_SESSION['formData'] = [
            'sName' => $sName,
            'sId' => $sId,
            'sGender' => $sGender,
            'sCity' => $sCity,
            'sEmail' => $sEmail,
            'sDate' => $sDate,
            'sAttendance' => $sAttendance,
            'sComment' => $sComment
        ];
        
    ?>

    <input type="submit" value="繳交">
    </form>

    <?php
        include("logout_btn.inc");
        include("contact_info.inc");
    ?>
</body>
</html>
