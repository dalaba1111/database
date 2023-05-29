<!DOCTYPE html>
<html>
    <head>
        <title>插入資料</title>
    </head>
    <body>
        <h1>Book</h1>
        <form action="insert_sql_book.php" method="post">
            id: <input type="text" name="id" required>
            name: <input type="text" name="name" required>
            category: <input type="text" name="category" required>
            co_author: <input type="text" name="co_author" required>
            publishing_house: <input type="text" name="publishing_house" required>
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