<?php
    session_start();
?>

<meta charset="utf-8">

<?php
    $sIDs = "nuk";
    $sPW = "0000";
    
    $pIDs = $_POST["uIDs"];
    $pPW = $_POST["uPW"];

    $date = strtotime("+10 days", time());

    if($pIDs == $sIDs && $pPW == $sPW) {
        setcookie("userName", $pIDs, $date);
        $_SESSION["check"] = "Yes";//一個等於
        header("location: sheet.php");
    } else {
        $_SESSION["check"] = "No";
        header("location: login_failed.php");
    }
?>
