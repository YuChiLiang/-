<mera charset="UTF-8">
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
</style>

<?php
    include("session_check.inc");
    
    echo "您的論文標題：：".$_POST["aTitle"]."</br>";
    echo "您的姓名：".$_POST["aName"]."</br>";
    echo "您的Email：".$_POST["aEmail"]."</br>";
    echo nl2br("論文摘要：\n".$_POST["aConstract"])."</br>";

    include("logout_bt.inc");
?>