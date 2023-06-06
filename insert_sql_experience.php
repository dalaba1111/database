<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1090505',
        '#aiKeicu4',
        'D1090505'
    );

    $position = mysqli_real_escape_string($link, $_POST["position"]);
    $unit = mysqli_real_escape_string($link, $_POST["unit"]);

    $sql = "INSERT INTO experience(position, unit) VALUES ('$position', '$unit')";
    try {
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        echo "<script>
                window.location.href = 'select_experience_setting.php';
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

<a href="select_experience.php">看所有資料</a>