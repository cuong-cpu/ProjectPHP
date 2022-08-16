<?php

    session_start();

    include "db-connect.php";
    $phone = $_POST['phoneNb_Register'];
    $name = $_POST ['fullname'];
    $pass = $_POST ['password_Register'];

    // vì đây là form đăng ký cho user thường nên quyền truy cập == 0
    $access_rights = 0;

    $sql = "SELECT * FROM users WHERE 1";
    $sql_insert = "INSERT INTO `users`(`phone`, `name`, `password`, `access_rights`) VALUES ('$phone','$name','$pass','$access_rights')";

    $values = mysqli_query($connect, $sql);

    $flag = 0;

    // đăng nhập user thường không cần kiểm tra quyền truy cấp
    // admin và user thường đều có thể trải nghiệm
    foreach($values as $v) {
        if ($phone == $v['phone']) {
            $flag++;
        }

    }

    // đăng nhập ký thành công -> đến trang đăng nhập
    if ($flag == 0) {
        mysqli_query($connect, $sql_insert);
        header("location:/project/index.php?controller=pages&action=login");
    }

    // đăng ký không thành công
    else {
        echo "<script>alert('Đăng ký không thành công....! Số điện thoại này đã được sử dụng'); history.go(-1);</script>";
    }
    mysqli_close($connect);
?>