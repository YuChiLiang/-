<?php
    session_start();
?>

<meta charset="utf-8">

<?php
    if (isset($_SESSION["check"])) {
        unset($_SESSION["check"]);//取消憑證許可

        echo "正在跳轉至登入頁面...";
        header("Refresh:3; url = Week05_Login.html");
    }
?>