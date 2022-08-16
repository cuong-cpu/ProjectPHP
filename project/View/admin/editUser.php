<?php 
    $id = $_GET['id'];
    include("./Model/Handle/db-connect.php");
    
    $sql = "SELECT * FROM `users` WHERE 1";
    $values = mysqli_query($connect, $sql);
?>

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
                        <h2>Sửa user</h2>
                        <hr>
                        <?php
                            foreach($values as $v) {
                                if ($v['id'] == $id) {
                        ?>
                            <div class="infor_edit" >
                                <span>Tên User: </span> <?php echo $v['name'] ?>
                            </div>
                            <div class="infor_edit">
                                <span>Số điện thoại: </span> <?php echo $v['phone'] ?>
                            </div>
                        <?php
                                }
                            }
                        ?>
                        <!-- form sửa thêm người dùng -->
                        <form class="form_insert" action="./Model/Handle/Handle_user/update_user.php?id=<?php echo $id?>" method="post">
                            <div>
                                <span id="error_name_new_user" ></span>
                                <input id="name_new_user" name="name_user_update" type="text" placeholder="Tên mới (*)">
                            </div>

                            <div>
                                <span id="error_pass_new_user"></span>
                                <input id="pass_new_user" name="pass_user_update" type="password" placeholder="Mật khẩu mới">
                            </div>

                            <div>
                                <span id="error_access_rights"></span>
                                <select name="access_rights" id="access_rights">
                                    <option value="2"> - Chọn quền try cập- </option>
                                    <option value="1"> User Admin </option>
                                    <option value="0"> User thường </option>
                                </select>
                            </div>

                            <button type="submit" onclick="return validateUpdate_user()">
                                Cập nhật
                            </button>
                        </form>
                        <!-- end form sửa người dùng -->
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