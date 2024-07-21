<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QuanLyCuaHang";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Chuẩn bị truy vấn SQL
$sql = "SELECT img_src FROM cards WHERE card_number = 1";

// Thực hiện truy vấn
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Lấy giá trị img_src từ hàng kết quả
  $row = $result->fetch_assoc();
  $imgSrc = $row['img_src'];
  echo $imgSrc; // Xuất giá trị imgSrc ra để JavaScript có thể lấy
} else {
  echo "Không tìm thấy bản ghi phù hợp";
}

// Đóng kết nối
$conn->close();
?>
