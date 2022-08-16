<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team AI</title>
</head>
<body>
    
<?php

    $controller = "";
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller = "";
    }
    switch ($controller){
      case 'pages':{
           require_once ('Controller/pages/index.php');
          break;
       }
       case 'admin':{
           require_once ('Controller/admin/controller.php');
           break;
        }
        default:{
            require_once ('Controller/pages/index.php');
       }
    }
?>

</body>
</html>



