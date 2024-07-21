<?php
if(!defined('_CODE')){
    die('Access denied...');
}
$pageTitle = "Đăng ký"; // Đặt tiêu đề cho trang Đăng ký

require_once(_WEB_PATH_TEMPLATES . '/layout/header.php');
?>
<!-- Shift + Alt + F để tự động sắp xếp code -->
<header style="background-color: #fe0000; color: #fff; padding: 10px 0;">
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-6">
            <a href="?module=home&action=dashboard" style="text-decoration: none;">
               <h5 style="margin: 0; font-family: 'Raleway', sans-serif; color:white">Trở về <i class="fa-solid fa-house"></i></h5>
            </a>
         </div>
         <div class="col-6 text-right">
            <h3 for="" style="margin: 0; font-family: 'Prosto One', sans-serif;float: right">LAPTOP 64</h3>
         </div>
      </div>
   </div>
</header>

<body class="main-bg">
   <!-- Login Form -->
   <div class="container">
      <div class="row justify-content-center mt-5">
         <div class="col-lg-5 col-md-5 col-sm-5">

            <div class="card shadow">
               <div class=" text-center border-bottom">
                  <h4 class="p-3" style="color: #cc0000;">ĐĂNG KÝ TÀI KHOẢN</h4>
               </div>
               <div class="card-body">
                  <form>
                     <div class="mb-4">
                        <label for="username" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <label for="username" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <label for="username" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <label for="username" class="form-label">Nhập lại mật khẩu <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="username" />
                     </div>

                     <div class="mb-4">
                        <div class="row">
                           <div class="col-md-6 text-center text-md-start">
                              <p><a href="?module=auth&action=login" class="lbl">Đăng nhập ngay</a></p>
                           </div>
                           <div class="col-md-6 text-center text-md-end">
                              <p><a href="?module=auth&action=forgot" class="lbl">Quên mật khẩu?</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="d-grid">
                        <button type="submit" class="btn text-light btn-lg btn-login" style="background-color: #e60000;">Đăng ký</button>
                     </div>                 
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<p style="margin-bottom: 50px;"></p>
<footer>
    <p>Nếu bạn gặp khó khăn trong quá trình đăng nhập, đăng ký hoặc đặt lại mật khẩu. Vui lòng gọi <span style="color: red;">1900 1212</span> để được hỗ trợ.</p>
</footer>

<?php
require_once(_WEB_PATH_TEMPLATES . '/layout/footer.php');
?>