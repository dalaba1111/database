<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Session Paper</h1>
        <form action="insert_sql_course.php" method="post">
            number: <input type="text" name="number" required>
            id: <input type="text" name="id" required>
            name: <input type="text" name="name" required>
            credit: <input type="text" name="credit" required>
            class: <input type="text" name="class" required>
            classroom: <input type="text" name="classroom" required>
            time: <input type="text" name="time" required>
            option_require: <input type="text" name="option_require" required>
            teacher: <input type="text" name="teacher" required>

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