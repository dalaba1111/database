<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1090505',
        '#aiKeicu4',
        'D1090505'
    );

    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $unit = mysqli_real_escape_string($link, $_POST["unit"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);

    $sql = "INSERT INTO prize (name, unit, date) VALUES ('$name', '$unit', '$date')";
    try {
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        echo "<script>
                window.location.href = 'select_prize_setting.php';
            </script>";
        exit;
    } catch (Exception $e) {
        echo "出事 \\|/<br>";
        echo $id . " " . $name . "<br>";
        echo $e->getMessage() . "<br>";
    }

    mysqli_close($link);
}
?>

<a href="select_prize.php">看所有資料</a>