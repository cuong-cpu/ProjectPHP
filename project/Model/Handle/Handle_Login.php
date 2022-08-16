<?php

    session_start();

    include "db-connect.php";
    $phone = $_POST ['phoneNb_login'];
    $pass = $_POST ['password_login'];

    $url = $_SERVER["HTTP_REFERER"];
    $navigation = $_GET["navigation"];
   
    $sql = "SELECT * FROM users WHERE 1";
    $values = mysqli_query($connect, $sql);

    $flag = 0;

    // đăng nhập user thường không cần kiểm tra quyền truy cấp
    // admin và user thường đều có thể trải nghiệm
    foreach($values as $v) {
        if ($phone == $v['phone'] && $pass == $v['password']) {
            $_SESSION['login']['name'] = $v['name'];
            $_SESSION['login']['phone'] = $v['phone'];
            $_SESSION['login']['id'] = $v['id'];
            $_SESSION['login']['access_rights'] = $v['access_rights'];
            $flag++;
        }

    }

    // đăng nhập thành công chuyển đến hướng về chọn
    if ($flag > 0) {
        if ($navigation == "login") {
            header("location:/project/index.php?controller=pages&action=home");
        }
        else {
            header("location:$url");
        }
    }

    // đăng nhập không thành công
    else {
        echo "<script>alert('Đăng nhập không thành công....! Vui lòng kiểm tra lại số điện thoại và mật khẩu'); history.go(-1);</script>";
    }

    mysqli_close($connect);
?>