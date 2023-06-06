<?php
$link = mysqli_connect(
    'localhost',
    'D1090505',
    '#aiKeicu4',
    'D1090505'
);
if (isset($_GET['id'])) {
    // 取得要刪除的資料 ID
    $id = $_GET['id'];

    // 建立 SQL 查詢，刪除對應的資料
    $sql = "DELETE FROM session_paper WHERE id = '$id'";

    // 執行 SQL 查詢
    if (mysqli_query($link, $sql)) {
        mysqli_close($link);
        echo "<script>
                    window.location.href = 'select_session_setting.php';
                </script>";
        exit;
    } else {
        echo "資料刪除失敗: " . mysqli_error($link);
    }
} else {
    echo "未提供要刪除的資料 ID";
}

// 關閉資料庫連接
mysqli_close($link);
?>

<a href="select_session.php">看所有資料</a>