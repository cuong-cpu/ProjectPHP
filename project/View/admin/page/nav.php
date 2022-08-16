<div class="column-left">
    <!-- header -->
    <div class="header header-left">
        <i class="fa-solid fa-gauge"></i>
        Admin
    </div>
    <!-- end header -->

    <!-- menu -->
    <div class="nav">
        <button class="nav_item" onclick="Home ()" >
            <i class="fa-solid fa-camera"></i>
            Quản lý video
        </button>

        <button class="nav_item" onclick="manageUser ()">
            <i class="fa-solid fa-user"></i>
            Quản lý user
        </button>

        <button class="nav_item" onclick="manageContact ()" >
            <i class="fa-solid fa-message"></i>
            Phản hồi của khách hàng
        </button>
    </div>
    <!-- end menu -->

    <!-- đăng xuất -->
    <button id="btn_logout" onclick="Logout()">
        Đăng xuất
    </button>
    <!-- end đăng xuất -->

</div>

<script>
    function Home () {
        location = "/project/index.php?controller=admin";
    }
    function manageUser () {
        location = "/project/index.php?controller=admin&action=manageUser";
    }
    function manageContact () {
        location = "/project/index.php?controller=admin&action=manageContact";
    }
    function Logout() {
        location = '/project/index.php?controller=pages&action=logout&id=admin';
    }
</script>