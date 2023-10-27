<!DOCTYPE html>
<html>
<head>
    <title>表單頁面</title>
</head>
<body>
    <h2>輸入訂單資料</h2>
    <form action="process.php" method="POST">
        <label for="phone">電話：</label>
        <input type="text" name="phone" id="phone" required><br><br>
        
        <label for="order">訂單：</label>
        <input type="text" name="order" id="order" required><br><br>
        
        <label for="amount">金額：</label>
        <input type="text" name="amount" id="amount" required><br><br>
        
        <input type="submit" value="提交">
    </form>
</body>
</html>