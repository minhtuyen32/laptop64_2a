jQuery(function ($) {
   // Ẩn tất cả các submenu khi trang được tải
   $(".sidebar-submenu").hide();
 
   // Xử lý khi click vào mục sidebar-dropdown
   $(".sidebar-dropdown > a").click(function (e) {
     e.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
 
     // Lấy submenu của sidebar-dropdown hiện tại
     var submenu = $(this).siblings(".sidebar-submenu");
 
     // Đóng tất cả các submenu khác trước khi mở submenu này
     $(".sidebar-submenu").not(submenu).slideUp(200);
 
     // Toggle hiển thị submenu của sidebar-dropdown hiện tại
     submenu.slideToggle(200);
 
     // Đảm bảo các dropdown khác đều không active
     $(".sidebar-dropdown").not($(this).parent()).removeClass("active");
 
     // Toggle active cho sidebar-dropdown hiện tại
     $(this).parent().toggleClass("active");
   });
 
   // Xử lý khi click vào nút đóng sidebar
   $("#close-sidebar").click(function () {
     $(".page-wrapper").removeClass("toggled");
     $(".sidebar-dropdown").removeClass("active");
     $(".sidebar-submenu").slideUp(200); // Đóng tất cả các submenu khi đóng sidebar
   });
 
   // Xử lý khi click vào nút mở sidebar
   $("#show-sidebar").click(function () {
     $(".page-wrapper").addClass("toggled");
     $(".sidebar-dropdown").removeClass("active");
     $(".sidebar-submenu").slideUp(200); // Đóng tất cả các submenu khi mở sidebar
   });
 });
 