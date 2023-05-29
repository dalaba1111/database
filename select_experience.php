<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505');

$sql = "SELECT * FROM experience";
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
                echo "<td>" . $row["position"] . "</td>"; 
                echo "<td>" . $row["unit"] . "</td>"; 
                echo "</tr>";
            }
            ?>
        </table>
        <button onclick="add()">新增</button>
        <button onclick="delete()">刪除</button>
    </body>
    <script>
        function add() {
            window.location.href = "insert_experience.php";
        }
    </script>
</html>