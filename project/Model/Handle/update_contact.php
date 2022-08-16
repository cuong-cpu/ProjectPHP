<?php 
    include "db-connect.php";
    $url = $_SERVER["HTTP_REFERER"];

    $id = $_GET['id'];
    $edit_contact = $_POST["edit_trang_thai"];
    
    $sql = "UPDATE `contact` SET `trang_thai`='$edit_contact' WHERE `id` = $id";
    mysqli_query($connect, $sql);

    header("location:$url");
?>