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
                    <!-- Quản lý phản hồi -->
                    <div class="functions" v-else>
                        <h2>Phản hồi của người dùng</h2>
                        <hr>
                        <!-- Bảng phản hồi -->
                        <?php include('./View/admin/page/tableContact.php') ?>
                        <!-- end Bảng phản hồi -->
                    </div>
                    <!-- end Quản lý phản hồi -->
                </div>
                <!-- end các chức năng -->
            </div>
            <!-- cột bên trái -->
        </div>
    </div>
</body>
    <script src="./View/admin/js/main.js"></script>
</html>