<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chair_page</title>
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

    <?php endif; ?>

    <?php if ($show_content):
        include("logout_bt.inc");
    endif; ?>
</body>
</html>