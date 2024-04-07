<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "微軟正黑", "Source Han Serif Traditional Chinese", serif;
            text-align: center;
        }

        h1{
            font-family: "Microsoft Yahei", "Source Han Serif Traditional Chinese", serif;
        }
    </style>  
</head>
<body>
    <!-- 登入資格判定 -->
    <?php
        session_start();
        
        if (isset($_SESSION["check"])) {
            if ($_SESSION["check"]=="Yes") {
                date_default_timezone_set('Asia/Taipei');
                echo "登入時間：".date("Y-m-d H:i:s")."<br>";    
            }else{
                echo "未正確登入"."<br>";
                echo "3秒後跳轉至登入頁面...";
        
                header("Refresh:3; url = Week05_Login.php");
            }
        }
    ?>

    <!-- 表單內容 -->
    <form action="Week05_Result.php" method="post">
        <h1>資管晚會報名表</h1>
        <hr>

        <h2>基本資料</h2>
        姓名: <input type = "text" name = "sName" value = "" Placeholder = "Enter your name!"/></br>

        密碼(學號): <input type = "password" name = "sPassword" required/></br>

        性別(可複選): </br>
        <input type="checkbox" name="gender[]" value="男性">男性
        <input type="checkbox" name="gender[]" value="女性">女性
        <input type="checkbox" name="gender[]" value="跨性別">跨性別
        <input type="checkbox" name="gender[]" value="順性別">順性別
        <input type="checkbox" name="gender[]" value="性別流動">性別流動(非二元性別)
        <input type="checkbox" name="gender[]" value="性別酷兒">酷兒(Queer)
        <input type="checkbox" name="gender[]" value="無性別">無性別
        <input type="checkbox" name="gender[]" value="非二元性別">非二元性別
        <input type="checkbox" name="gender[]" value="雙性">雙性
        <input type="checkbox" name="gender[]" value="性別">性別
        <input type="checkbox" name="gender[]" value="性別不遵從">性別不遵從
        <input type="checkbox" name="gender[]" value="跨性別女性">跨性別女性
        <input type="checkbox" name="gender[]" value="雌雄同體">雌雄同體
        <input type="checkbox" name="gender[]" value="間性">間性
        <input type="checkbox" name="gender[]" value="性別質疑">性別質疑
        <input type="checkbox" name="gender[]" value="性別變異">性別變異
        <input type="checkbox" name="gender[]" value="兩靈">雙靈
        <input type="checkbox" name="gender[]" value="半性別">半性別
        <input type="checkbox" name="gender[]" value="性別認同手術">性別認同手術
        <input type="checkbox" name="gender[]" value="性別焦慮">性別焦慮(性別認同障礙)
        <input type="checkbox" name="gender[]" value="不願回答">不願回答
        <input type="checkbox" name="gender[]" value="攻擊型直升機">攻擊型直升機
        <input type="checkbox" name="gender[]" value="其他">其他</br>

        居住地區: </br>
        <select name = "sCountry" size = "1">
            <option value = "UnknownCountry" selected>請選擇地點</option>
            <option value = "中國(西台灣)">中國(西台灣)</option>
            <option value = "台灣">台灣</option>
            <option value = "香港">香港</option>
            <option value = "苗栗">苗栗</option>
        </select></br>

        居住城市: </br>
        <input type="radio" name="sCity" value="台北" required>台北
        <input type="radio" name="sCity" value="鄉下" required>鄉下</br>


        電子郵件: </br>
        <input type = "mail" name = "sMile"></br>

        身份認證: </br>
        <input type = "file" name = "sFile"></br>

        <hr>
        <h2>活動資訊</h2>

        建議日期: </br>
        <input type = "date" name = "sDate"></br>

        建議時間(活動開始): </br>
        <input type = "time" name = "sTime"></br>

        會旗背景顏色: </br>
        <input type="color" name="sColorBG"></br>
        會旗文字顏色: </br>
        <input type="color" name="sColorTT"></br>

        你要出多少: </br>
        <input type = "number" name = "sPrice">TWD</br>

        參與意願: </br>
        <input type="range" min="0" max="100" value="50" name="myRange"></br>

        請輸入您的抱怨: </br>
        <div>
            <textarea name = "sComplaint" rows = "5" cols = "20"></textarea>
        </div>

        <input type = "submit" value = "交出去">
        <input type = "reset" value = "寫錯了">
    </form>
    <!-- 若要將表單的資料送至php檔案處理，就需要將內容寫在同一form底下 -->

    <form action="Week05_Logout.php" method="post">
        <input type="submit" value="登出">
    </form>

    <?php
        include("Week06_Setting.inc");
    ?>

</body>

</html>
