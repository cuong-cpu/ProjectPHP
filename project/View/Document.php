<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Khóa học</title>
    <link rel="stylesheet" href="./css/khoa-hoc-ai.css">
    <meta name="viewport" content="width=diveci-width, initial-scale=1">

    <link rel="stylesheet" href="./View/css/css-chung.css">
    <link rel="stylesheet" href="./View/css/Document.css">
    <link rel="stylesheet" href="./View/css/fontawesome-free-6.1.1-web/css/all.css">

</head>
<body>

    <!-- header -->
    <?php 
        include("pages/header.php");
    ?>

    <!-- main -->
    <div id="main">
        <!-- banner -->
        <div id="banner">
            <h2 class="banner-heading"> TÀI LIỆU HỌC AI </h2>

            <p class="text-mota">
                Tài liệu AI bằng pythone được phát triển bởi "TEAM AI"<br>
                lộ trình học từ cơ bản đến nâng cao.
            </p>
        </div>
        <!-- end banner -->

        <!-- hiển thị video tài liệu -->
        <div class="tai-lieu section">
            <div class="content">
                <h2 class="section-heading"> Tài liệu </h2>
                <div class="divider"></div>

                <!-- hiển thi thông tin và xem video -->
                <div class="row">
                    <?php
                        include ('./Model/Handle/db-connect.php');
                        $sql = 'SELECT * FROM `video` WHERE 1';
                        $video = mysqli_query($connect, $sql);

                        $i = 0;
                        foreach($video as $v) {
                            $i ++;
                    ?>
                            <div class='column'>
                                <!-- button mở video -->
                                <div class='top-column'>
                                    <button class='js-btns'>Hoc ngay</button>
                                </div>
                                <!-- end button mở video -->

                                <!-- bài và tên video -->
                                <p>
                                    <span>Bai <?php echo $i?> : </span> <?php echo $v['name']?>
                                </p>
                                <!-- end và tên video -->

                                <!-- Modal hiển thị video -->
                                <div class='modal-show-video'>
                                    <div class='modal-content'>
                                        <iframe src= <?php echo $v['src']?> frameborder='0' allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- edn Modal hiển thị video -->

                            </div>
                    <?php
                        }
                        mysqli_close($connect);
                    ?>
                </div>
                <!-- end hiển thi thông tin và xem video -->

                <div class="cl-fl"></div>
            </div>
        </div>

    </div>

    <!-- footer -->
    <?php 
        include("pages/footer.php");
    ?>
</body>
</html>

<!-- js modal show video -->
<script>
    const btns = document.querySelectorAll(".js-btns");
    const modals = document.querySelectorAll(".modal-show-video");
    const modalsContent = document.querySelectorAll(".modal-content");

    for(let i = 0; i < btns.length; i++) {

        // khi click vào button nào thì hiển thị modal đấy
        btns[i].addEventListener("click", function() {
            modals[i].classList.add("open");

            // khi người ta click vào modal thì thoát modal
            modals[i].addEventListener("click", function() {
                modals[i].classList.remove("open");
            });

            // khi người ta click vào modal content thì không thoát modal
            modalsContent[i].addEventListener("click", function() {
                event.stopPropagation();
            });
        });
    }
</script>