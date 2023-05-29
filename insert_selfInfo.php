<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Self Info</h1>
        <form action="insert_sql_selfInfo.php" method="post">
            id: <input type="text" name="id" required>
            email: <input type="text" name="email" required>
            name: <input type="text" name="name" required>
            specialty: <input type="text" name="specialty" required>
            office: <input type="text" name="office" required>
            telephone: <input type="text" name="telephone" required>
            <input type="submit">
        </form>
        <button onclick="goBack()">返回上一頁</button>
    </body>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</html>