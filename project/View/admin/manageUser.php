<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="./View/admin/css/index.css">
    <link rel="stylesheet" href="./View/css/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div id="main">
        <div class="row">
            <!-- cột bên trái  -->
            <?php include('./View/admin/page/nav.php') ?>
            <!-- end cột bên  trai  -->

            <!-- cột bên trái -->
            <div class="column-right">

                <!-- header -->
                <?php include('./View/admin/page/header.php') ?>
                <!-- end header -->

                <!-- các chức năng -->
                <div class="column-right-button">
                    <!-- Quản lý user -->
                    <div class="functions">
                        <h2>Quản lý user</h2>
                        <hr>
                        <!-- form thêm người dùng -->
                        <form class="form_insert" action="./Model/Handle/Handle_user/insert_user.php" method="post">
                            <div>
                                <span id="error_name_new_user" ></span>
                                <input id="name_new_user" name="name_new_user" type="text" placeholder="Tên user (*)">
                            </div>

                            <div>
                                <span id="error_phone_new_user"></span>
                                <input id="phone_new_user" name="phone_new_user" type="text" placeholder="Số điện thoại user (*)">
                            </div>

                            <div>
                                <span id="error_pass_new_user"></span>
                                <input id="pass_new_user" name="pass_new_user" type="password" placeholder="Mật khẩu">
                            </div>

                            <div>
                                <span id="error_access_rights"></span>
                                <select name="access_rights" id="access_rights">
                                    <option value="2"> - Chọn quền try cập- </option>
                                    <option value="1"> User Admin </option>
                                    <option value="0"> User thường </option>
                                </select>
                            </div>

                            <button type="submit" onclick="return validateInsert_user()">
                                Thêm người dùng
                            </button>
                        </form>
                        <!-- end form thêm người dùng -->

                        <!-- Bảng quản lý user -->
                        <?php include('./View/admin/page/tableUser.php')?>
                        <!-- end user -->
                    </div>
                    <!-- end Quản lý user -->
                </div>
                <!-- end các chức năng -->
            </div>
            <!-- cột bên trái -->
        </div>
    </div>
</body>
    <script src="./View/admin/js/main.js"></script>
</html>