<?php 
    include("../db-connect.php");
    
    $id = $_GET['id'];
    $name = $_POST["name_user_update"];
    $pass = $_POST["pass_user_update"];
    $access_rights = $_POST["access_rights"];

    $sql = "UPDATE `users` SET `name`='$name',`password`='$pass',`access_rights`='$access_rights' WHERE `id` = $id";
    mysqli_query($connect, $sql);

    header("location:/project/index.php?controller=admin&action=manageUser");

    mysqli_close($connect);
?>