<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1090505',
            '#aiKeicu4',
            'D1090505');

        $number = mysqli_real_escape_string($link, $_POST["number"]);
        $id = mysqli_real_escape_string($link, $_POST["id"]);
        $name = mysqli_real_escape_string($link, $_POST["name"]);
        $credit = mysqli_real_escape_string($link, $_POST["credit"]);
        $class = mysqli_real_escape_string($link, $_POST["class"]);
        $classroom = mysqli_real_escape_string($link, $_POST["classroom"]);
        $time = mysqli_real_escape_string($link, $_POST["time"]);
        $option_require = mysqli_real_escape_string($link, $_POST["option_require"]);
        $teacher = mysqli_real_escape_string($link, $_POST["teacher"]);
        
        $sql = "INSERT INTO class (number, id, name, credit, class, classroom, time, option_require, teacher) VALUES ('$number','$id', '$name', '$credit', '$class', '$classroom', '$time', '$option_require', '$teacher')";
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

<a href="select_course.php">看所有資料</a>