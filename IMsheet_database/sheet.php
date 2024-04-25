<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管晚會報名表</title>
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
    <div class="container">
        <?php
        session_start();
        if (isset($_SESSION["check"]) && $_SESSION["check"] == "Yes") {
            date_default_timezone_set('Asia/Taipei');
            echo "<p>登入時間：" . date("Y-m-d H:i:s") . "</p>";
        } else {
            echo "<p>未正確登入</p>";
            echo "<p>3秒後跳轉至登入頁面...</p>";
            header("Refresh:3; url = login.php");
            exit; // 終止執行
        }
        ?>

        <form action="sheet_result.php" method="post">
            <h1>資管晚會報名表</h1>
            <hr>

            <h2>基本資料</h2>
            <label for="sName">姓名：</label>
            <input type="text" id="sName" name="sName" placeholder="請輸入您的姓名" required><br>

            <label for="sId">學號：</label>
            <input type="text" id="sId" name="sId" placeholder="請輸入您的學號" required><br>

            <label>性別：</label><br>
            <input type="radio" id="genderMale" name="sGender" value="男性" required>男性
            <input type="radio" id="genderFemale" name="sGender" value="女性" required>女性
            <input type="radio" id="genderOther" name="sGender" value="其他" required>其他<br>

            <label for="sCity">居住城市：</label><br>
            <select id="sCity" name="sCity" required>
                <option value="" disabled selected>-請選擇地點-</option>
                <option value="臺北市">臺北市</option>
                <option value="新北市">新北市</option>
                <option value="桃園市">桃園市</option>
                <option value="臺中市">臺中市</option>
                <option value="臺南市">臺南市</option>
                <option value="高雄市">高雄市</option>
                <option value="基隆市">基隆市</option>
                <option value="新竹市">新竹市</option>
                <option value="嘉義市">嘉義市</option>
                <option value="新竹縣">新竹縣</option>
                <option value="苗栗縣">苗栗縣</option>
                <option value="彰化縣">彰化縣</option>
                <option value="南投縣">南投縣</option>
                <option value="雲林縣">雲林縣</option>
                <option value="嘉義縣">嘉義縣</option>
                <option value="屏東縣">屏東縣</option>
                <option value="宜蘭縣">宜蘭縣</option>
                <option value="花蓮縣">花蓮縣</option>
                <option value="臺東縣">臺東縣</option>
                <option value="澎湖縣">澎湖縣</option>
                <option value="金門縣">金門縣</option>
                <option value="連江縣">連江縣</option>
                <option value="otherCity">其他</option>
            </select><br>

            <label for="sEmail">電子郵件：</label><br>
            <input type="email" id="sEmail" name="sEmail" placeholder="請輸入您的電子郵件"><br>

            <hr>
            <h2>活動資訊</h2>

            <label for="sDate">建議日期：</label><br>
            <input type="date" id="sDate" name="sDate"><br>

            <label>參與意願：</label><br>
            <input type="radio" id="attendYes" name="sAttendance" value="當日出席" required>當日出席
            <input type="radio" id="attendNo" name="sAttendance" value="不克參加" required>不克參加<br>

            <label for="sComment">請輸入您的意見：</label><br>
            <textarea id="sComment" name="sComment" rows="5" placeholder="100字以內"></textarea><br>

            <input type="submit" value="繳交">
            <input type="reset" value="重寫">
        </form>

        <?php
        echo "<br/><a href='show_db.php'>查看資料庫</a>";
        include("logout_btn.inc");
        include("contact_info.inc");
        ?>
    </div>
</body>

</html>
