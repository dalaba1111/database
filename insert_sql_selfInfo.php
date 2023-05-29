<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1090505',
            '#aiKeicu4',
            'D1090505');

        $id = mysqli_real_escape_string($link, $_POST["id"]);
        $name = mysqli_real_escape_string($link, $_POST["name"]);
        $email = mysqli_real_escape_string($link, $_POST["email"]);
        $specialty = mysqli_real_escape_string($link, $_POST["specialty"]);
        $office = mysqli_real_escape_string($link, $_POST["office"]);
        $telephone = mysqli_real_escape_string($link, $_POST["telephone"]);
        
        $sql = "INSERT INTO selfInfo (id, email, name, specialty, office, telephone) VALUES ('$id', '$email', '$name', '$specialty' ,'$office','$telephone')";
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

<a href="select_selfInfo.php">看所有資料</a>