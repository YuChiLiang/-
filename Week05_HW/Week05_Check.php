<?php
    session_start();
?>

<meta charset="utf-8">

<?php
    $sIDs = "nuk";
    $sPW = "0000";
    
    $pIDs = $_GET["uIDs"];
    $pPW = $_GET["uPW"];

    if($pIDs == $sIDs && $pPW == $sPW) {
        $_SESSION["check"] = "Yes";//一個等於
        header("location: Week05_Success.php");
    } else {
        $_SESSION["check"] = "No";
        header("location: Week05_Fail.php");
    }

    
?>
