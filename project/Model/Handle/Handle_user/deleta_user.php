<?php
    // đã kiểm tra đầu vào từ trước nên ko cần kiểm tra lại

    $url = $_SERVER["HTTP_REFERER"];

    include("../db-connect.php");

    $id = $_GET['id'];
    $accessRights = $_GET['accessRights'];

    // nếu là user thường thì xóa
    if ($accessRights == 0) {
        $sql = "DELETE FROM `users` WHERE `id` = $id";
        mysqli_query($connect, $sql);
        header("location:$url");
    }

    // nếu là user admin thì không xóa được -> quay lại
    else {
        echo "<script>alert('Không thể xóa User Admin....!'); history.go(-1);</script>";
    }

    mysqli_close($connect);
?>