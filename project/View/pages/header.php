<link rel="stylesheet" href="../css/css-chung.css">
<link rel="stylesheet" href="../css/fontawesome-free-6.1.1-web/css/all.css">
<link rel="stylesheet" href="../css/themify-icons/themify-icons.css">

<div id = "header">      
    
    <a href="./index.php?controller=pages&action=home">
        <div id="logo"></div>
    </a>

    <!-- ======= PC ======== -->

    <!-- nav PC -->
    <div class="nav">
        <a class="nav_link" href="./index.php?controller=pages&action=home">Trang Chủ</a>
        <a class="nav_link" href="./index.php?controller=pages&action=info">Giới thiệu AI</a>
        <a class="nav_link" href="./index.php?controller=pages&action=document">Tài Liệu</a>
        <a class="nav_link" href="./index.php?controller=pages&action=demo">Trải nghiệm AI</a>
        <a class="nav_link" href="./index.php?controller=pages&action=contact">Liên Hệ</a>
    </div>
    <!-- end PC -->
    
    <!-- Button header PC -->
    <?php 
        if (isset($_SESSION['login'])) {
    ?>
        <div id="header-right">
            <i id="icons_user" class="fa-solid fa-user-large"></i> 
            <span> <?php echo $_SESSION['login']['name']?> </span> 
            <div id="space"></div>
            <Button class="btn_pc btn_logout" onclick="Logout()">Đăng Xuất </Button>
        </div>
    <?php
        }
        else {
    ?>
        <div id="header-right">
            <Button class="btn_pc" onclick="Login()">Đăng Nhập </Button>
        </div>
        
    <?php
        }
    ?>
    <!-- end Button header PC -->

    <!-- ======= Moble and tablet ======== -->
    <!-- bars hiển thị nav mobile -->
    <label for="check_nav_mobile" class="bars">
        <i class="fa-solid fa-bars"></i>
    </label>

    <!-- bars hiển thị nav mobile -->
    <input type="checkbox" id="check_nav_mobile" hidden>

    <!-- nav_overlay mobile -->
    <label for="check_nav_mobile" class="nav_overlay"></label>

    <!-- nav mobile -->
    <div class="nav_mobile">
        <div class="top_nav_mobile" >
            <h3>MENU</h3>
        </div>
        
        <!-- nav link -->
        <ul>
            <li>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" class="svg-inline--fa fa-house " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"></path></svg>
                <a class="nav_link" href="./index.php?controller=pages&action=home">Trang Chủ</a>
            </li>
            <li>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-info" class="svg-inline--fa fa-circle-info " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S224 177.7 224 160C224 142.3 238.3 128 256 128zM296 384h-80C202.8 384 192 373.3 192 360s10.75-24 24-24h16v-64H224c-13.25 0-24-10.75-24-24S210.8 224 224 224h32c13.25 0 24 10.75 24 24v88h16c13.25 0 24 10.75 24 24S309.3 384 296 384z"></path></svg>
                <a class="nav_link" href="./index.php?controller=pages&action=info">Giới thiệu AI</a>
            </li>
            <li>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" class="svg-inline--fa fa-book-open " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M144.3 32.04C106.9 31.29 63.7 41.44 18.6 61.29c-11.42 5.026-18.6 16.67-18.6 29.15l0 357.6c0 11.55 11.99 19.55 22.45 14.65c126.3-59.14 219.8 11 223.8 14.01C249.1 478.9 252.5 480 256 480c12.4 0 16-11.38 16-15.98V80.04c0-5.203-2.531-10.08-6.781-13.08C263.3 65.58 216.7 33.35 144.3 32.04zM557.4 61.29c-45.11-19.79-88.48-29.61-125.7-29.26c-72.44 1.312-118.1 33.55-120.9 34.92C306.5 69.96 304 74.83 304 80.04v383.1C304 468.4 307.5 480 320 480c3.484 0 6.938-1.125 9.781-3.328c3.925-3.018 97.44-73.16 223.8-14c10.46 4.896 22.45-3.105 22.45-14.65l.0001-357.6C575.1 77.97 568.8 66.31 557.4 61.29z"></path></svg>
                <a class="nav_link" href="./index.php?controller=pages&action=document">Tài Liệu</a>
            </li>
            <li>
                <i class="fa-solid fa-brain iconphone"></i>
                <a class="nav_link" href="./index.php?controller=pages&action=demo">Trải nghiệm AI</a>
            </li>
            <li>
                <i class="fa fa-phone iconphone" aria-hidden="true"></i>
                <a class="nav_link" href="./index.php?controller=pages&action=contact">Liên Hệ</a>
            </li>
        </ul>

        <?php 
            if (isset($_SESSION['login']['name'])) {
        ?>
            <Button class="btn_mobile" onclick="Logout()">
                Đăng Xuất
            </Button>
        <?php
            }
            else {
        ?>
            <Button class="btn_mobile" onclick="Login()">
                Đăng Nhập
            </Button>
        <?php
            }
        ?>
    </div>
    <!-- end nav mobile -->
        
</div>     
<script>
    function Login() {
        location = 'index.php?controller=pages&action=login';
    }
    function Logout() {
        location = 'index.php?controller=pages&action=logout';
    }
</script>