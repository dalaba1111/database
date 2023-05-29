<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Plan</h1>
        <form action="insert_sql_plan.php" method="post">
            id: <input type="text" name="id" required>
            name: <input type="text" name="name" required>
            date: <input type="date" name="date" required>
            identity: <input type="text" name="identity" required>
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