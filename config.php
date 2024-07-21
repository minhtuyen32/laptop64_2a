<!-- Các hằng số của project -->
<?php
const _MODULE = 'home';
const _ACTION = 'dashboard';

const _CODE = true; // hằng để kiểm tra đăng nhập hợp lệ hay không
// // Thiết lập host
define('_WEB_HOST','http://'.$_SERVER['HTTP_HOST'].'/quanlycuahang/manager_users');
define('_WEB_HOST_TEMPLATES',_WEB_HOST. '/templates');
// //Thiết lập path (Đường dẫn tới thư mục)
define('_WEB_PATH',__DIR__);
define('_WEB_PATH_TEMPLATES',_WEB_PATH. '/templates');
