<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1090505',
            '#aiKeicu4',
            'D1090505');

        $name = mysqli_real_escape_string($link, $_POST["name"]);
        $unit = mysqli_real_escape_string($link, $_POST["email"]);
        $date = mysqli_real_escape_string($link, $_POST["date"]);
        
        $sql = "INSERT INTO prize (name, unit, date) VALUES ('$name', '$unit', '$date')";
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功owob<br>";
            echo $id . " " .  $name . '<br>';
        } catch (Exception $e) {
            echo "出事 \\|/<br>";
            echo $id . " ".  $name . "<br>";
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>

<a href="select_prize.php">看所有資料</a>