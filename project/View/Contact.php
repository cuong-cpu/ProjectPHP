<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>liên hệ</title>
    <meta name="viewport" content="width=diveci-width, initial-scale=1">

    <link rel="stylesheet" href="./View/css/css-chung.css">
    <link rel="stylesheet" href="./View/css/Contact.css">
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
            <h2 class="banner-heading"> LIÊN HỆ </h2>

            <p class="text-mota">
                Mục tiêu của chúng tôi là giúp người dùng<br>
                có trải nghiệm tốt nhất về sản phẩm AI của chúng tôi.
            </p>
        </div>
        <!-- end banner -->

        <!-- section Thông tin liên hệ -->
        <div class="thong-tin-lien-he section">
            <div class="content">

                <h2 class="section-heading"> THÔNG TIN LIÊN HỆ </h2>
                <div class="divider"></div>

                <div class="row">
                    <!-- form phản hồi -->
                    <div class="column">
                        <form class="form-lien-he" action="/project/Model/Handle/Handle_Contact.php" method="post">
                            <h3>Gửi thông tin phản hồi</h3>
                            <span class="thong-bao-error" id="error-email"></span>
                            <input type="email" id = "email" name="email" placeholder="Email">

                            <span class="thong-bao-error" id="error-content"></span>
                            <textarea rows="5" id = "content" name="content" placeholder="Nội dung phản hồi"></textarea>

                            <button onclick="return validateLienHe ()" >
                                Gửi phản hồi
                            </button>
                        </form>
                    </div>
                    <!-- end form phản hồi -->

                    <!-- thông tin và mô tả -->
                    <div class="column">
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Địa Chỉ : B5b KTX Đại Học Bách Khoa, HN
                        </p>

                        <p>
                            <i class="fa-solid fa-phone"></i>  Điện Thoại : 0326660728
                        </p>

                        <p>
                            <i class="fa-solid fa-envelope"></i> Email: teamai@gmail.com
                        </p>

                        <p>
                            <i class="fa-solid fa-clock"></i>  THỜI GIAN LÀM VIỆC<br>
                            &emsp;&emsp;Thứ 2 - Thứ 6: 14h - 17h <br>
                            &emsp;&emsp;Thứ 7: 8h - 11h<br>
                        </p>

                        <p>
                            <i class="fa-solid fa-people-group"></i> "TEAM AI" sẽ cố gắng phản hồi trong thời sớm nhất
                        </p>
                    </div>
                    <!-- end thông tin và mô tả -->
                </div>
            </div>
        </div>
        <!-- end section Thông tin liên hệ -->
    </div>

    <!-- footer -->
    <?php 
        include("pages/footer.php");
    ?>

    <script src="./View/js/Contact.js"></script>
</body>
</html>