<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Periodical Papper</h1>
        <form action="insert_sql_periodical.php" method="post">
            id: <input type="text" name="id" required>
            name: <input type="text" name="name" required>
            date: <input type="date" name="date" required>
            co_author: <input type="text" name="co_author" required>
            number: <input type="text" name="number" required>
            page: <input type="text" name="page" required>
            periodical: <input type="text" name="periodical" required>
            <input type="submit">
            <button onclick="goBack()">返回上一頁</button>
  
    </body>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</html>