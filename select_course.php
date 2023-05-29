<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505');

$sql = "SELECT * FROM class";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>查詢資料</title>
    </head>
    <body>
        <table>
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row["number"] . "</td>"; 
                echo "<td>" . $row["id"] . "</td>"; 
                echo "<td>" . $row["name"] . "</td>"; 
                echo "<td>" . $row["credit"] . "</td>"; 
                echo "<td>" . $row["class"] . "</td>"; 
                echo "<td>" . $row["classroom"] . "</td>"; 
                echo "<td>" . $row["time"] . "</td>"; 
                echo "<td>" . $row["option_require"] . "</td>"; 
                echo "<td>" . $row["teacher"] . "</td>"; 
                echo "</tr>";
            }
            ?>
        </table>
        <button onclick="add()">新增</button>
        <button onclick="delete()">刪除</button>
    </body>
    <script>
        function add() {
            window.location.href = "insert_course.php"
        }
    </script>
</html>