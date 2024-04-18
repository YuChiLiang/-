<?php
    session_start();
?>

<mera charset="UTF-8">

<?php
    //設定身份、帳號和密碼
    $chair_uID = "chair";
    $reviewer_uID = "reviewer";
    $author_uID = "author";
    $chair_uPW = "123";
    $reviewer_uPW = "234";
    $author_uPW = "345";

    //接收使用者輸入身份、帳號和密碼
    $check_role = $_POST["uRole"];
    $check_uID = $_POST["uID"];
    $check_uPW = $_POST["uPW"];

    //判斷身份
    if ($check_role == "Chair" && $check_uID == $chair_uID && $check_uPW == $chair_uPW) {//chair
        $_SESSION["check"] = "$check_role";
        setcookie("Chair", "$check_uID", time()+10080);

        header("location: chair.php");
    }else if ($check_role == "Reviewer" && $check_uID == $reviewer_uID && $check_uPW == $reviewer_uPW) {//reviewer
        $_SESSION["check"] = "$check_role";
        setcookie("Reviewer", "$check_uID", time()+10080);

        header("location: reviewer.php");
    }else if ($check_role == "Author" && $check_uID == $author_uID && $check_uPW == $author_uPW) {//author
        $_SESSION["check"] = "$check_role";
        setcookie("Author", "$check_uID", time()+10080);

        header("location: author.php");
    }else {
        $_SESSION["check"] = "false";
        header("location: fail.php");
    }
?>