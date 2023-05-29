<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Prize</h1>
        <form action="insert_sql_prize.php" method="post">
            name: <input type="text" name="name" required>
            unit: <input type="text" name="unit" required>
            date: <input type="date" name="date" required>
            <input type="submit">
            <button onclick="goBack()">返回上一頁</button>
        </form>
    </body>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</html>