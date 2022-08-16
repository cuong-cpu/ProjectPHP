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
                    <!-- Quản lý video -->
                    <div class="functions">
                        <h2>Quản lý video</h2>
                        <hr>
                        <!-- form thêm video -->
                        <form class="form_insert" action="./Model/Handle/Handle_video_document/insert_video.php" method="post">
                            <div>
                                <span id="error_name_video" ></span>
                                <input id="name_video" name="name_video" type="text" placeholder="Tên video (*)">
                            </div>

                            <div>
                                <span id="error_link_video"></span>
                                <input id="link_video" name="link_video" type="text" placeholder="Link video (*)">
                            </div>
                            <button type="submit" onclick="return validateVideo ()">
                                Thêm video
                            </button>
                        </form>
                        <!-- end form thêm video -->
                        
                        <!-- Bảng quản lý video -->
                        <?php include('./View/admin/page/tableVideo.php') ?>
                        <!-- end bảng quản lý video -->
                    </div>
                    <!-- end Quản lý video -->
                </div>
                <!-- end các chức năng -->
            </div>
            <!-- cột bên trái -->
        </div>
    </div>
</body>
    <script src="./View/admin/js/main.js"></script>
</html>