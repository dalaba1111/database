<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Session Paper</h1>
        <form action="insert_sql_session.php" method="post">
            id: <input type="text" name="id" required>
            name: <input type="text" name="name" required>
            date: <input type="date" name="date" required>
            co_author: <input type="text" name="co_author" required>
            session_name: <input type="text" name="session_name" required>
            session_position: <input type="text" name="session_position" required>
            page: <input type="text" name="page" required>

            <input type="submit">
            <button onclick="goBack()">返回上一頁</button>
        </form>
        <br>

    </body>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</html>