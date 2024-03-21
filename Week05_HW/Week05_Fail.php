<meta charset="utf-8">

<?php
    echo "登入失敗，帳號或密碼錯誤<br>";
    echo "3秒後跳轉至登入頁面...";
    
    header("Refresh:3; url = Week05_Login.html");
?>