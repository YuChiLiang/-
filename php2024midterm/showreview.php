<mera charset="UTF-8">
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
</style>

<?php
    include("session_check.inc");
    
    echo "您的決定：".$_POST["rReview"]."</br>";
    echo nl2br("您的評語：\n".$_POST["rFeedback"])."</br>";

    include("logout_bt.inc");
?>