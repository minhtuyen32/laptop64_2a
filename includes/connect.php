<!-- Các hàm về kết nối database -->
<?php
if(!defined('_CODE')){
    die('Access denied...');
}

function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "QuanLyCuaHang";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDB($conn) {
    $conn->close();
}
?>
