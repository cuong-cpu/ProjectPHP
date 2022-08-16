<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <meta name="viewport" content="width=diveci-width, initial-scale=0.9">
    <link rel="stylesheet" href="./View/css/login_and_register.css">
</head>
<body>
    <div id="main">
        <form id="content" action="./Model/Handle/Handle_Register.php" method="post">
            <h2 id="heading">TEAM AI</h2>

            <span class="error" id="error_fullname"></span>
            <input name="fullname" id="fullname" type="text" placeholder="Họ và tên (*)">

            <span class="error" id="error_phoneNb"></span>
            <input name="phoneNb_Register" id="phoneNb_Register" type="text" placeholder="Số điện thoại (*)">

            <span class="error" id="error_password"></span>
            <input name="password_Register" id="password_Register" type="password" placeholder="Mật Khẩu (*)">

            <button class="btn_Register" onclick="return validateRegister()">
                Đăng ký
            </button>
        </form>
    </div>
</body>
    <script src="./View/js/login_and_register.js"></script>
</html>