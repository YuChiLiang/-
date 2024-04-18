<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>author_page</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
</style>
<body>
    <?php
        include("session_check.inc");
    ?>

    <?php if ($show_content): ?>
        <form method="post" action="showpaper.php">
            <h1>Author您好，歡迎進入論文評論網頁</h1>
            論文標題：
            <input type="text" name="aTitle" value="">
            </br>
            作者姓名：
            <input type="text" name="aName" value="">
            </br>
            作者Email：
            <input type="text" name="aEmail" value="">
            </br>

            論文摘要：
            <textarea name = "aConstract" rows = "20" cols = "60"></textarea>
            </br>

            <input type="submit" name="submit_bt" value="提交">
        </form>
    <?php endif; ?>

    <?php if ($show_content):
        include("logout_bt.inc");
    endif; ?>
</body>
</html>