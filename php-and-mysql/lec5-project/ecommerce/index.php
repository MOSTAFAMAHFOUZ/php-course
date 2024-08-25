<?php
session_start();
$config = require_once  'src/config.php';
require_once ROOT_PATH. 'src/db.php';
require_once ROOT_PATH. 'src/functions.php';


if(isset($_GET['page'])){

    switch($_GET['page']){
        case 'home':
            require_once 'views/home.php';
            break;
        case 'about':
            require_once 'views/about.php';
            break;
        case 'contact':
            require_once 'views/contact.php';
            break;
        case 'shop':
            require_once 'views/shop.php';
            break;
        case 'shop-single':
            require_once 'views/shop-single.php';
            break;
        case 'send-message':
            require_once 'controllers/send-message.php';
            break;
        default:
            require_once 'views/404.php';
    }
}else{
    require_once 'views/home.php';
}











