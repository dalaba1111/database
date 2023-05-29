<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Experience</h1>
        <form action="insert_sql_experience.php" method="post">
            position: <input type="text" name="position" required>
            unit: <input type="text" name="unit" required>
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