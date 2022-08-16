<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm demo</title>
    <meta name="viewport" content="width=diveci-width, initial-scale=1">

    <link rel="stylesheet" href="./View/css/sp-demo.css">
    <link rel="stylesheet" href="./View/css/css-chung.css">
    <link rel="stylesheet" href="./View/css/themify-icons/themify-icons.css">
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
            <h2 class="banner-heading"> PHÂN TÍCH KHUÔN MẶT </h2>

            <p class="text-mota">
                Phát hiện và xác định vị trí của các khuôn mặt trong ảnh cùng với thông <br>
                tin gới tính của người trong ảnh.
            </p>
        </div>
        <!-- end banner -->

        <!-- section đặc điển nổi bật -->
        <div class="dac-diem-noi-bat section">
            <div class="content">
                <h2 class="section-heading"> ĐẶC ĐIỂM NỔI BẬT </h2>
                <div class="divider"></div>
                
                <div class="row">
                    <div class="column">
                        <img src="./View/images/icons/dac-diem-noi-bat-1.svg">

                        <p> Tốc độ nhanh và chính xác cao </p>
                    </div>

                    <div class="column">
                        <img src="./View/images/icons/dac-diem-noi-bat-2.svg">

                        <p> Không giới hạn số lượng khuôn mặt </p>
                    </div>

                    <div class="column">
                        <img src="./View/images/icons/dac-diem-noi-bat-3.svg">

                        <p> Làm việc tốt trong nhiều môi trường </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end section đặc điển nổi bật -->

        <!-- section ứng dụng thực tế -->
        <div class="ung-dung-thuc-te section">
            <div class="content">
                <h2 class="section-heading"> ỨNG DỤNG THỰC TẾ </h2>
                <div class="divider"></div>

                <div class="row">
                    <div class="column">
                        <img src="./View/images/icons/ung-dung-thuc-te-1.jpg">

                        <p> Đếm số lượng người dựa trên khuôn mặt </p>
                    </div>

                    <div class="column">
                        <img src="./View/images/icons/ung-dung-thuc-te-2.jpg">

                        <p> Xác định tính hợp lệ của ảnh chân dung </p>
                    </div>

                    <div class="column">
                        <img src="./View/images/icons/ung-dung-thuc-te-3.jpg">

                        <p> Xác định mức độ hài lòng của người học trực tuyến </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section ứng dụng thực tế -->

        <!-- section demo AI -->
        <div class="demo section" id="demo_section" >
            <div class="content">
                <h2 class="section-heading"> Trải nghiệm </h2>
                <div class="divider"></div>

                <div class="row">
                    <div class="column">
                        <div class="btns">
                            <form action="index.php?controller=pages&action=demo" method="POST" enctype="multipart/form-data">
                                <label for="choose_file">
                                    <i class="ti-upload icon_update"></i>
                                    Chọn file
                                </label>
                                <input id="choose_file" name="upload_file" type="file" hidden>

                                <button type="submit" name="submit">Gửi</button>
                            </form>
                        </div>

                        <?php
                            if(isset($_FILES['upload_file'])){
                                move_uploaded_file($_FILES['upload_file']['tmp_name'],'Model/MachineLearning/upload/'.$_FILES['upload_file']['name'] = 'test.png');
                                $command = escapeshellcmd('python Model/MachineLearning/face_recognition.py');
                                $output = shell_exec($command);
                                echo $output;
                            }
                            $src = "./Model/MachineLearning/end/test.png";
                        ?>
                        
                        <div class="image_result" style="
                            background: url(<?php echo $src ?>) no-repeat; 
                            background-size: cover; 
                            background-position: top center;
                            max-width: 100%;
                            height: 450px;
                            display: block;" >
                        </div> 
                    </div>

                    <div class="column">
                        <p>
                            Trong khoa học máy tính, trí tuệ nhân tạo hay AI (tiếng Anh: artificial intelligence), đôi khi được gọi là trí thông minh nhân tạo, là trí thông minh được thể hiện bằng máy móc, trái ngược với trí thông minh tự nhiên của con người. Thông thường, thuật ngữ "trí tuệ nhân tạo" thường được sử dụng để mô tả các máy móc (hoặc máy tính) có khả năng bắt chước các chức năng "nhận thức" mà con người thường phải liên kết với tâm trí, như "học tập" và "giải quyết vấn đề".[1][2]
                        </p>
                    </div>
                </div>
        </div>
        <!-- end section demo AI -->

        </div>
    </div>
    
    <!-- footer -->
    <?php 
        include("pages/footer.php");
    ?>

</body>
</html>
