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
        $co_author = mysqli_real_escape_string($link, $_POST["co_author"]);
        $number = mysqli_real_escape_string($link, $_POST["number"]);
        $page = mysqli_real_escape_string($link, $_POST["page"]);
        $periodical_name = mysqli_real_escape_string($link, $_POST["periodical_name"]);
        
        $sql = "INSERT INTO periodical_paper (id, name, date, co_author, number, page, periodical_name) VALUES ('$id', '$name', '$date', '$co_author', '$number', '$page',  '$periodical_name')";
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

<a href="select_periodical.php">看所有資料</a>