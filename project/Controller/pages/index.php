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

    switch ($action){
        case 'home':
        {
            require_once('View/index.php');
            break;
        }
        case 'demo':
        {
            if (isset($_SESSION['login'])) {
                require_once('View/sp-demo.php');
            }
            else {
                require_once ('View/Login.php');
            }
            break;
        }
        case 'document':
        {
            if (isset($_SESSION['login'])) {
                require_once ('View/Document.php');
            }
            else {
                require_once ('View/Login.php');
            }
            break;
        }
        case 'info':
        {
            require_once ('View/goi-thieu-ai.php');
            break;
        }
        case 'login':
        {
            require_once ('View/Login.php');
            break;
        }
        case 'login':
        {
            require_once ('View/Login.php');
            break;
        }
        case 'logout':
        {
            require_once ('Model/Handle/Logout.php');
            break;
        }
        case 'register':
        {
            require_once ('View/Register.php');
            break;
        }
        case 'contact':
        {   
            if (isset($_SESSION['login'])) {
                require_once ('View/Contact.php');
            }
            else {
                require_once ('View/Login.php');
            }
            break;
        }
        default:{
            require_once('View/index.php');
            break;
        }
    }
?>
