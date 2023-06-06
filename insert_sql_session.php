<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1090505',
        '#aiKeicu4',
        'D1090505'
    );

    $id = mysqli_real_escape_string($link, $_POST["id"]);
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);
    $co_author = mysqli_real_escape_string($link, $_POST["co_author"]);
    $session_name = mysqli_real_escape_string($link, $_POST["session_name"]);
    $session_position = mysqli_real_escape_string($link, $_POST["session_position"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);

    $sql = "INSERT INTO session_paper (id, name, date, co_author, session_name, session_position, page) VALUES ('$id', '$name', '$date', '$co_author', '$session_name', '$session_position', '$page')";
    try {
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        echo "<script>
                window.location.href = 'select_session_setting.php';
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

<a href="select_session.php">看所有資料</a>