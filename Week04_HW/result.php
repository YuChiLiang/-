<?php
    echo "<b>基本資料</b></br>";

    $_sName = $_POST["sName"];
    echo "你的名字: ".$_sName."<br/>";

    $_sPassword = $_POST["sPassword"];
    echo "你的密碼: ".$_sPassword."<br/>";

    echo "你的性別為: ";
    $_sGenders = $_POST["gender"];
    foreach ($_sGenders as $gender) {
        echo ($gender)." ";
    }echo "<br>";
    echo "居住地區：".$_POST["sCountry"] . "<br>";
    echo "居住城市：".(isset($_POST["Taipei"]) ? "台北" : "鄉下") . "<br>";
    echo "電子郵件：".$_POST["sMile"] . "<br>";
    echo "身份認證：".$_POST["sFile"] . "<br>";

    echo "<b>活動資訊</b></br>";

    echo "建議日期：".$_POST["sDate"] . "<br>";
    echo "建議時間(活動開始)：".$_POST["sTime"] . "<br>";
    echo "會旗背景顏色：".$_POST["sColorBG"] . "<br>";
    echo "會旗文字顏色：".$_POST["sColorTT"] . "<br>";
    echo "你要出多少：".$_POST["sPrice"] . " TWD<br>";
    echo "參與意願：".$_POST["myRange"] . "%<br>";
    echo "抱怨：".$_POST["sComplaint"] . "<br>";
?>