<?php 

    // đã kiểm tra đầu vào từ trước nên ko cần kiểm tra lại
    include("../db-connect.php");

    $url = $_SERVER["HTTP_REFERER"];

    $name_video = $_POST['name_video'];
    $src_video = $_POST['link_video'];

    $sql= "INSERT INTO `video`(`name`, `src`) VALUES ('$name_video','$src_video')";
    $insert = mysqli_query($connect, $sql);

    header("location:$url");

    mysqli_close($connect);
?>