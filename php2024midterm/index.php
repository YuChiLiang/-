<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文投稿網站首頁</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
</style>
<body>
    <div class="login-container">
        
        <h1>高大資管論文投稿系統</h1></br>
        <form method="post" action="check.php">
            請選擇您的角色：
            <select name="uRole" size="1">
                <option value="Chair">Chair</option>
                <option value="Reviewer">Reviewer</option>
                <option value="Author">Author</option>
            </select></br>
            帳號：
            <input type="text" name="uID" value="" placeholder="請輸入您的帳號"></br>
            密碼：
            <input type="password" name="uPW" value="" placeholder="請輸入您的密碼"></br>
            
            <input type="submit" name="login_bt" value="提交">

        </form>
    </div>
</body>
</html>