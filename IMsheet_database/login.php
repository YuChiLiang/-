<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form method="post" action="check.php">
<body>
    帳號：<input type="text" name="uIDs" value="" placeholder="Type your IDs"/></br>
    密碼：<input type="password" name="uPW" value=""/></br>

    <input type="submit" value="登入">
    <input type="reset" value="重置">
    <?php
        if (isset($_COOKIE["userName"])) {
            echo $_COOKIE["userName"]."歡迎回來";
        }else{
            echo "First time?";
        }
    ?>
</body>
</html>
