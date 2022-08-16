<?php
    session_start();
?>

<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];

}
else{
    $action = '';
}


// nếu đã đăng nhập trên wed
if(isset($_SESSION['login'])) {
    // nếu là admin thì cho truy cập admin
    if ($_SESSION['login']['access_rights'] == 1) {
        switch ($action){
            case'manageUser': {
                require_once('View/admin/manageUser.php');
                break;
            }
            case'manageContact': {
                require_once('View/admin/manageContact.php');
                break;
            }
            case'editUser': {
                require_once('View/admin/editUser.php');
                break;
            }
            case'editVideo': {
                require_once('View/admin/editVideo.php');
                break;
            }
            default:{
                require_once('View/admin/index.php');
                break;
            }
        }
    }
    // không thì quy lại trang đăng nhập admin
    else {
        require_once('View/admin/admin_Login.php');
    }
}
// chưa đăng nhập trên web -> chuyển đến trang đăng nhập admin
else {
    require_once('View/admin/admin_Login.php');
}
?>
