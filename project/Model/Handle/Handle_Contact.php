<?php 

    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    include "db-connect.php";

    $name = $_SESSION['login']['name'];
    $phone = $_SESSION['login']['phone'];
    $iduser = $_SESSION['login']['id'];
    $email =$_POST['email'];
    $content =$_POST['content'];
    $time = date("H:i d-m-y");

    $sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `content`, `iduser`, `time`) VALUES ('$name','$phone','$email','$content','$iduser','$time')";

    $insert = mysqli_query($connect, $sql);

    header('location:/project/index.php?controller=pages&action=contact');

    mysqli_close($connect);
?>