<?php
    unset($_SESSION['login']);
    $url = $_SERVER["HTTP_REFERER"];

    // nếu là trang admin thì khi đăng xuất quay lại trang đăng nhập admin
    if ($_GET['id'] == 'admin') {
        header("location:index.php?controller=admin");
    }

    // nếu là trang thường thì khi đăng xuất quay lại trang index.php
    else {
        header("location:/project/index.php?controller=pages&action=home");
    }

    mysqli_close($connect);
?>