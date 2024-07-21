<?php
if (!defined('_CODE')) {
   die('Access denied...');
}
$pageTitle = "Đăng nhập"; // Đặt tiêu đề cho trang Login
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

<body class="main-bg" >
   <!-- Login Form -->
   <div class="container">
      <div class="row justify-content-center mt-5">
         <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="card shadow">
               <div class=" text-center border-bottom">
                  <h4 class="p-3" style="color: #cc0000;">ĐĂNG NHẬP TÀI KHOẢN</h4>
               </div>
               <div class="card-body">
                  <form>
                     <div class="mb-4">
                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                        <div class="input-group">
                           <input type="password" class="form-control" id="id_password" />
                           <div class="input-group-append">
                              <button class="input-group-text" type="button" id="togglePassword" style="height:40px">
                                 <i class="far fa-eye"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="mb-4">
                        <div class="row">
                           <div class="col-md-6 text-center text-md-start">
                              <p><a href="?module=auth&action=register" class="lbl">Đăng ký tài khoản</a></p>
                           </div>
                           <div class="col-md-6 text-center text-md-end">
                              <p><a href="?module=auth&action=forgot" class="lbl">Quên mật khẩu?</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="d-grid">
                        <button type="submit" class="btn text-light btn-lg btn-login" style="background-color: #e60000;">Đăng nhập</button>
                     </div>
                     <div style="text-align: center; margin-bottom: 20px;margin-top:20px">
                        <hr style="width: 40%; float: left; margin-top: 8px;">
                        <span style="font-size: 15px; margin: 0 10px;">Hoặc</span>
                        <hr style="width: 40%; float: right; margin-top: 8px;">
                     </div>
                     <div class="text-center mt-3">
                        <div class="text-center mt-3">
                           <button type="button" class="btn bg-primary text-white btn-login-gg" style="padding-right:27px">
                              <img src="templates/image/icon-gg.png" alt="Google Icon" style="height: 24px; margin-right: 10px;">
                              Đăng nhập bằng Google
                           </button>
                        </div>
                     </div>
                     <div class="text-center mt-3">
                        <button type="button" class="btn text-white btn-login-fb" style="background-color: #3b5998;">
                           <img src="templates/image/facebook.png" alt="Facebook Icon" style="height: 24px; margin-right: 10px;">
                           Đăng nhập bằng Facebook
                        </button>
                     </div>
                 </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<footer>
    <p>Nếu bạn gặp khó khăn trong quá trình đăng nhập, đăng ký hoặc đặt lại mật khẩu. Vui lòng gọi <span style="color: red;">1900 1212</span> để được hỗ trợ.</p>
</footer>


<?php
require_once(_WEB_PATH_TEMPLATES . '/layout/footer.php');
?>