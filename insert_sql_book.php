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
    $category = mysqli_real_escape_string($link, $_POST["category"]);
    $co_author = mysqli_real_escape_string($link, $_POST["co_author"]);
    $publishing_house = mysqli_real_escape_string($link, $_POST["publishing_house"]);

    $sql = "INSERT INTO book(id, name, category, co_author, publishing_house) VALUES ('$id', '$name', '$category','$co_author', '$publishing_house')";
    try {
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        echo "<script>
                window.location.href = 'select_book_setting.php';
            </script>";
        exit;
    } catch (Exception $e) {
        echo "Error!<br>";
        echo $id . " " . $name . "<br>";
        echo $e->getMessage() . "<br>";
    }

    mysqli_close($link);
}
?>
<a href="select_book.php">看所有資料</a>