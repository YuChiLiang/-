<?php
    session_start();
?>

<mera charset="UTF-8">

<?php
    if (isset($_SESSION["check"])) {
        unset($_SESSION["check"]);

        header("location: index.php");
    }
?>