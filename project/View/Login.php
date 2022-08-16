<?php 
    $navigation = $_GET["action"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="./View/css/login_and_register.css">
    <meta name="viewport" content="width=diveci-width, initial-scale=1">
</head>
<body>
    <div id="main">
        <form id="content" action="./Model/Handle/Handle_Login.php?navigation=<?php echo $navigation?>" method="post">
            <h2 id="heading">TEAM AI</h2>

            <span class="error" id="error_phoneNb_login"></span>
            <input name="phoneNb_login" id="phoneNb_login" type="text" placeholder="Số điện thoại (*)">

            <span class="error" id="error_password_login"></span>
            <input name="password_login" id="password_login" type="password" placeholder="Mật Khẩu (*)">
            
            <button name="btn_login" id="btn_login" type="submit" onclick="return validateLogin() ">
                Đăng nhập
            </button>
            <hr>
            <div class="btn_Register">
                <a href="index.php?controller=pages&action=register">Đăng ký</a>
            </div>
        </form>
    </div>
    <script src="./View/js/login_and_register.js"></script>
</body>
</html>