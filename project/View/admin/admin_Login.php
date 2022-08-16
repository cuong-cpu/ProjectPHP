
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login ADMIN</title>
    <meta name="viewport" content="width=diveci-width, initial-scale=0.9">

    <link rel="stylesheet" href="./View/admin/css/admin_Login.css">

</head>
<body>

    <div id="main">
        <form id="content" action="/project/Model/handle/Handle_admin_Login.php" method="post" >
            <h2 id="heading">TEAM AI</h2>

            <span class="error" id="error_phone"></span>
            <input name="phone" id="phone" type="text" placeholder="Số điện thoại (*)">

            <span class="error" id="error_pass_login"></span>
            <input name="password" id="password" type="password" placeholder="Mật Khẩu (*)">

            <button name="btn_login" id="btn_login" type="submit" onclick="return validateFormLogin () ">
                Đăng nhập
            </button>

        </form>
    </div>

    <script src="./View/admin/js/admin_Login.js"></script>
</body>
</html>

