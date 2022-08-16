<?php 
    include("../db-connect.php");
    
    $id = $_GET['id'];
    echo $id;
    $name = $_POST["name_video"];
    $src = $_POST["link_video"];

    $sql = "UPDATE `video` SET `name`='$name',`src`='$src' WHERE `id` = $id";
    mysqli_query($connect, $sql);

    header("location:/project/index.php?controller=admin");

    mysqli_close($connect);
?>