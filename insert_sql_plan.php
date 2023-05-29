<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1090505',
            '#aiKeicu4',
            'D1090505');

        $id = mysqli_real_escape_string($link, $_POST["id"]);
        $name = mysqli_real_escape_string($link, $_POST["name"]);
        $date = mysqli_real_escape_string($link, $_POST["date"]);
        $identity = mysqli_real_escape_string($link, $_POST["identity"]);
       
        
        $sql = "INSERT INTO plan (id, name, date, identity) VALUES ('$id', '$name', '$date', '$identity')";
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

<a href="select_plan.php">看所有資料</a>