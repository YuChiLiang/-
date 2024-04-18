<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reviewer_page</title>
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
        <form method="post" action="showreview.php">
            <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
            論文評審決定：
            <input type="radio" name="rReview" value="Accept">Accept
            <input type="radio" name="rReview" value="Minor Revision">Minor Revision
            <input type="radio" name="rReview" value="Major Revision">Major Revision
            <input type="radio" name="rReview" value="Reject">Reject
            </br>

            論文評論評語：
            <textarea name = "rFeedback" rows = "20" cols = "60"></textarea>
            </br>

            <input type="submit" name="submit_bt" value="提交">
        </form>
    <?php endif; ?>

    <?php if ($show_content):
        include("logout_bt.inc");
    endif; ?>
</body>
</html>