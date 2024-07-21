<?php

session_start();
require_once('config.php');
// require_once('./includes/connect.php');
// // Thư viện php mailer
// require_once('./includes/phpmailer/Exception.php');
// require_once('./includes/phpmailer/PHPMailer.php');
// require_once('./includes/phpmailer/SMTP.php');
// require_once('./includes/functions.php');
// require_once('./includes/database.php');
// require_once('./includes/session.php');

// biến module và action được khai báo ở file config.php
$module = _MODULE; 
$action = _ACTION;
if(!empty($_GET ['module'])){
   if(is_string($_GET['module'])){ // nếu module là dạng chuỗi thì gán module vào biến $module
       $module = trim($_GET['module']);
   }
}
if(!empty($_GET ['action'])){ // kiểm tra action có tồn tại không 
   if(is_string($_GET['action'])){  // kiểm tra action có phải là chuỗi không
       $action = trim($_GET['action']);
   }
}

$path = 'modules/'.$module.'/'.$action.'.php';
if(file_exists($path)){
   require_once ($path);
}else{
   require_once 'modules/error/404.php';
}
