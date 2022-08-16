<?php
    // đã kiểm tra đầu vào từ trước nên ko cần kiểm tra lại
    $url = $_SERVER["HTTP_REFERER"];

    include("../db-connect.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `video` WHERE `id` = $id";

    mysqli_query($connect, $sql);

    header("location:$url");

    mysqli_close($connect);
?>