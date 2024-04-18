<?php
        session_start();

        $show_content = false;//正確登入才顯示內容 

        if (isset($_SESSION["check"])) {
            if ($_SESSION["check"] !== "false") {
                $show_content = true;
            }
        }else {
            echo "未正確登入。</br>";
            echo "再3秒後回到首頁...";

            header("Refresh: 3; url = index.php");
        }
    ?>