<?php
if(!defined('_CODE')){
    die('Access denied...');
}
$pageTitle = "Quên mật khẩu"; // Đặt tiêu đề cho trang Login
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
                  <h4 class="p-3" style="color: #cc0000;">KHÔI PHỤC MẬT KHẨU</h4>
               </div>
               <div class="card-body">
                  <form>              
                     <div class="mb-4">
                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" />
                     </div>
                     <div class="mb-4">
                        <div class="row">
                           <div  style="float:left">
                              <p><a href="?module=auth&action=login" class="lbl">Đăng nhập ngay</a></p>
                           </div>
                           <div  style="float:right">
                              <p><a href="?module=auth&action=register" class="lbl">Đăng ký ngay</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="d-grid">
                        <button type="submit" class="btn text-light btn-lg btn-login" style="background-color: #e60000;">Gửi yêu cầu</button>
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