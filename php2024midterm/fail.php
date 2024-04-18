<?php
    session_start();
?>

<mera charset="UTF-8">

<?php
    echo "帳號、密碼或身份錯誤，請重新登入。"."</br>";
    echo "再3秒後回到首頁...";

    header("Refresh: 3; url = index.php");
?>