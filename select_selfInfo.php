<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505');

$sql = "SELECT * FROM selfInfo";
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
                echo "<td>" . $row["id"] . "</td>"; 
                echo "<td>" . $row["email"] . "</td>"; 
                echo "<td>" . $row["name"] . "</td>"; 
                echo "<td>" . $row["specialty"] . "</td>"; 
                echo "<td>" . $row["office"] . "</td>"; 
                echo "<td>" . $row["telephone"] . "</td>"; 
                echo "</tr>";
            }
            ?>
        </table>
        <button onclick="add()">新增</button>
        <button onclick="delete()">刪除</button>
    </body>
    <script>
        function add() {
            window.location.href = "insert_selfInfo.php";
        }
    </script>
</html>