<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Trang chủ"; ?></title>
  <link rel="icon" type="image/png" href="<?php echo _WEB_HOST_TEMPLATES ?>/image/art.png">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- css của slider -->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/sidebar_mobile.css?ver=<?php echo rand(); ?>"> <!-- CSS sidebar mobile-->

  <!-- css của menu -->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style_2.css?ver=<?php echo rand(); ?>"> <!-- Resource style -->
  <script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/modernizr.js"></script> <!-- Modernizr -->
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/bootstrap.min.css">
  <!-- cdn của slider
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css"> -->
  <!-- Style css-->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style.css?ver=<?php echo rand(); ?>">
  <!-- Style css product -->
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/style_product.css?ver=<?php echo rand(); ?>">
  <!-- chatting -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
  <span class="close-btn" onclick="closeHeader()"><i class="fa-regular fa-circle-xmark"></i></span>
  <div class="container" id="header">
    <img src="https://file.hstatic.net/200000722513/file/pc_-_topbar_ae727c35df2d4cff9f0c611a7d19cc15.png" alt="" width="100%" height="40px">
  </div>
</header>

<body style="background-color: #ececec;">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-nav sticky-top fixed-top">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fs-4 mx-4" style="font-family: 'Prosto One', sans-serif; color: white; font-size: larger;" href="#">LAPTOP 64</a>
      <!-- Toggle btn -->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Sidebar -->
      <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">




        <!-- Sidebar header -->
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Danh mục sản phẩm</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Sidebar body -->
        <div class="offcanvas-body">



          <!-- Search -->
          <form class="d-flex my-2 d-none d-lg-block">
            <div class="input-group">
              <input class="form-control rounded-start word" type="search" placeholder="" aria-label="Search">
              <button type="submit" style="background-color: white;border:none;padding:10px 15px" class="btn rounded-end">
                <i class="fa-solid fa-magnifying-glass" style="color: black;"></i>
              </button>
            </div>
          </form>
          <!-- Search -->
          <!-- Sidebar content-->
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Laptop Gaming</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Thương hiệu</h6>
                </li>
                <li><a href="#">Acer Gaming</a></li>
                <li><a href="#">Asus Gaming</a></li>
                <li><a href="#">MSI Gaming</a></li>
                <li><a href="#">Gigabyte Gaming</a></li>
                <li><a href="#">Dell Gaming</a></li>
                <li><a href="#">HP Gaming</a></li>
                <li><a href="#">Lenovo Gaming</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Giá bán</h6>
                </li>
                <li><a href="#">Dưới 20 triệu</a></li>
                <li><a href="#">Từ 20 triệu đến 25 triệu</a></li>
                <li><a href="#">Từ 25 triệu đến 30 triệu</a></li>
                <li><a href="#">Trên 30 triệu</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Card đồ họa</h6>
                </li>
                <li><a href="#">GTX 1650</a></li>
                <li><a href="#">RTX 3050</a></li>
                <li><a href="#">RTX 3060</a></li>
                <li><a href="#">RTX 3070</a></li>
                <li><a href="#">AMD Redeon RX</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Laptop Văn Phòng</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Thương hiệu</h6>
                </li>
                <li><a href="#">Acer văn phòng</a></li>
                <li><a href="#">Asus văn phòng</a></li>
                <li><a href="#">MSI văn phòng</a></li>
                <li><a href="#">Gigabyte văn phòng</a></li>
                <li><a href="#">Dell văn phòng</a></li>
                <li><a href="#">HP văn phòng</a></li>
                <li><a href="#">Lenovo văn phòng</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Giá bán</h6>
                </li>
                <li><a href="#">Dưới 20 triệu</a></li>
                <li><a href="#">Từ 20 triệu đến 25 triệu</a></li>
                <li><a href="#">Từ 25 triệu đến 30 triệu</a></li>
                <li><a href="#">Trên 30 triệu</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Laptop theo nhu cầu</h6>
                </li>
                <li><a href="#">Laptop đồ họa</a></li>
                <li><a href="#">Laptop học sinh - sinh viên</a></li>
                <li><a href="#">Laptop mỏng nhẹ</a></li>
                <li><a href="#">Laptop khuyến mãi</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Linh kiện máy tính</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">CPU</h6>
                </li>
                <li><a href="#">CPU Intel</a></li>
                <li><a href="#">Intel thế hệ 10</a></li>
                <li><a href="#">Intel thế hệ 11</a></li>
                <li><a href="#">Intel thế hệ 12</a></li>
                <li><a href="#">Intel thế hệ 13</a></li>
                <li><a href="#">Intel thế hệ 14(Mới)</a></li>
                <li><a href="#">Intel Xeon</a></li>
                <li><a href="#">Intel X-Series LGA2066</a></li>
                <li><a href="#">CPU AMD</a></li>
                <li><a href="#">AMD Ryzen 3000</a></li>
                <li><a href="#">AMD Ryzen 4000</a></li>
                <li><a href="#">AMD Ryzen 5000</a></li>
                <li><a href="#">AMD Ryzen 7000(Mới)</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">HHD (Ổ cứng)</h6>
                </li>
                <li><a href="#">HĐ Seagate</a></li>
                <li><a href="#">HDD Western</a></li>
                <li><a href="#">HDD Toshiba</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">RAM PC</h6>
                </li>
                <li><a href="#">RAM PC Kingmax</a></li>
                <li><a href="#">RAM PC Kingston</a></li>
                <li><a href="#">RAM PC Corsair</a></li>
                <li><a href="#">RAM DDR5</a></li>
                <li><a href="#">RAM PC Gigabyte</a></li>
                <li><a href="#">RAM PC TeamGroup</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Main</h6>
                </li>
                <li><a href="#">Main Asus</a></li>
                <li><a href="#">Main Gigabyte</a></li>
                <li><a href="#">Mainboard cho CPU AMD</a></li>
                <li><a href="#">Mainboard cho CPU Intel</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">RAM LAPTOP</h6>
                </li>
                <li><a href="#">RAM Laptop Kingmax</a></li>
                <li><a href="#">RAM Laptop G.Skill</a></li>
                <li><a href="#">RAM Laptop Kingston</a></li>
                <li><a href="#">RAM Laptop Cosair</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">SSD</h6>
                </li>
                <li><a href="">SSD 120G - 128G</a></li>
                <li><a href="">SSD 240G - 256G</a></li>
                <li><a href="">SSD 480G - 512G</a></li>
                <li><a href="">SSD trên 1TB</a></li>
                <li><a href="">SSD Gigabyte - Corsair</a></li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Màn hình máy tính</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Thương hiệu</h6>
                </li>
                <li><a href="">LG</a></li>
                <li><a href="">Asus</a></li>
                <li><a href="">Dell</a></li>
                <li><a href="">Acer</a></li>
                <li><a href="">Samsung</a></li>
                <li><a href="">HP</a></li>
                <li><a href="">Gigabyte</a></li>
                <li><a href="">ViewSonic</a></li>
                <li><a href="">AOC</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Giá bán</h6>
                </li>
                <li><a href="">Dưới 3 triệu</a></li>
                <li><a href="">Từ 3 triệu đến 5 triệu</a></li>
                <li><a href="">Từ 5 triệu đến 10 triệu</a></li>
                <li><a href="">Từ 10 triệu đến 20 triệu</a></li>
                <li><a href="">Trên 20 triệu</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Độ phân giải</h6>
                </li>
                <li><a href="">HD 720p</a></li>
                <li><a href="">Full HD 1080p</a></li>
                <li><a href="">2K 1440p</a></li>
                <li><a href="">4K UHD</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Màn hình cong</h6>
                </li>
                <li><a href="">24" Curved</a></li>
                <li><a href="">27" Curved</a></li>
                <li><a href="">32" Curved</a></li>
                <li><a href="">Trên 32" Curved</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Tần số quét</h6>
                </li>
                <li><a href="">60Hz</a></li>
                <li><a href="">75Hz</a></li>
                <li><a href="">100Hz</a></li>
                <li><a href="">144Hz</a></li>
                <li><a href="">240Hz</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Kích thước</h6>
                </li>
                <li><a href="">19"</a></li>
                <li><a href="">22"</a></li>
                <li><a href="">24"</a></li>
                <li><a href="">27"</a></li>
                <li><a href="">29"</a></li>
                <li><a href="">32"</a></li>
                <li><a href="">Trên 32"</a></li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Thiết bị ngoại vi</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Chuột</h6>
                </li>

                <li><a href="">Dareu - Akko</a></li>
                <li><a href="">Corsair - Razer</a></li>
                <li><a href="">Newmen - Lighting</a></li>
                <li><a href="">Logitech - Redragon</a></li>
                <li><a href="">Havit</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Bàn phím</h6>
                </li>
                <li><a href="">Dareu - Akko</a></li>
                <li><a href="">Corsair - Razer</a></li>
                <li><a href="">Lighting</a></li>
                <li><a href="">Logitech</a></li>
                <li><a href="">Havit</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Tai nghe</h6>
                </li>
                <li><a href="">SoundMax - Logitech</a></li>
                <li><a href="">Sony - Razer</a></li>
                <li><a href="">Consair - Zidli</a></li>
                <li><a href="">Lighting - Dareu</a></li>
                <li><a href="">Havit</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Thẻ nhớ</h6>
                </li>
                <li><a href="">Samsung</a></li>
                <li><a href="">Sandisk</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">Webcam</h6>
                </li>
                <li><a href="">Logitech</a></li>
                <li><a href="">Rapoo</a></li>
                <li><a href="">Dahua</a></li>
                <li>
                  <h6 href="#" style="font-weight: bold;color:red" class="mt-2">SSD</h6>
                </li>
                <li><a href="">SSD 120G - 128G</a></li>
                <li><a href="">SSD 240G - 256G</a></li>
                <li><a href="">SSD 480G - 512G</a></li>
                <li><a href="">SSD trên 1TB</a></li>
                <li><a href="">SSD Gigabyte - Corsair</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Camera</span>
            </a>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Thiết bị âm thanh</span>
            </a>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Máy in</span>
            </a>
          </li>
          <li class="sidebar-dropdown d-lg-none list-unstyled">
            <a href="#" class="dropdown-toggle">
              <span>Điện thoại thông minh</span>
            </a>
          </li>
          <!-- Sidebar content-->





          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2 fw-bold" href="#"><img src="templates/image/headphone.png" class="me-2" alt="" width="30px"> </i>Hotline <br>1902.2009</a>
            </li>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2 fw-bold" href="#"><img src="templates/image/checklist.png" class="me-2" alt="" width="30px">Tra cứu <br>đơn hàng</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2 fw-bold" href="#"><img src="templates/image/location-pointer.png" class="me-2" alt="">Hệ thống <br>cửa hàng</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2 fw-bold position-relative d-inline-flex align-items-center" href="?module=users&action=cart" style="text-decoration: none;">
                <span class="me-2 position-relative">
                  <img src="templates/image/shopping-cart.png" alt="" style="width: 30px;">
                  <span class="badge rounded-circle position-absolute top-0 start-100 translate-middle bg-warning text-dark d-none d-lg-flex justify-content-center align-items-center" style="width: 20px; height: 20px; border: 2px solid white; font-size: 12px;">
                    <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">1</span>
                  </span>
                </span>
                <span class="mx-2">Giỏ<br>hàng</span>
              </a>
              
            </li>
            <li class="nav-item d-none d-lg-block" style="background-color: #be1529;border-radius:10px">
              <a class="nav-link mx-2 fw-bold" href="?module=auth&action=login"><img src="templates/image/user.png" class="me-2 " alt="">Đăng<br>nhập</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Fixed Menu Container -->
  <div style="background-color: #ffffff;" class="nav-container">
    <nav class="navbar navbar-expand-lg navbar-dark"> <!-- Add bg-dark for background color on mobile -->
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/ticket.png" class="me-2" alt="">Tổng hợp khuyến mãi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/info.png" class="me-2" alt="">Thông tin tuyển dụng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/technical-support.png" class="me-2" alt="">Hỗ trợ kỹ thuật</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/hand.png" class="me-2" alt="">Hướng dẫn trả góp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/credit-card.png" class="me-2" alt="">Hướng dẫn thanh toán</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-item text-dark" href="#"><img src="templates/image/protected.png" class="me-2" alt="">Tra cứu bảo hành</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
  <!-- container main menustart -->
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- Menu danh mục sản phẩm -->
        <div class="container-lg my-3 container-menu">
          <div class="cd-dropdown-wrapper">
            <nav>
              <ul class="cd-dropdown-content d-none d-lg-block" style="margin-left:-35px">
                <li class="has-children" style="background-color: #f5f6f8;">
                  <div style="background-color: #9ad7f2;"> <!-- màu nền danh mục sản phẩm -->
                    <h3 class="text-dark text-uppercase fw-bold" style="font-size: medium;"><i class="fa-solid fa-bars" style="color: black;font-size:25px;margin:7px 7px;background-color: #9ad7f2;"></i>DANH MỤC SẢN PHẨM</h3>
                  </div>
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none;">LAPTOP GAMING</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thương hiệu</a></li>
                        <li><a class="menu-link" href="">Acer Gaming</a></li>
                        <li><a class="menu-link" href="">Asus Gaming</a></li>
                        <li><a class="menu-link" href="">MSI Gaming</a></li>
                        <li><a class="menu-link" href="">Gigabyte Gaming</a></li>
                        <li><a class="menu-link" href="">Dell Gaming</a></li>
                        <li><a class="menu-link" href="">HP Gaming</a></li>
                        <li><a class="menu-link" href="">Lenovo Gaming</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 20 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 20 triệu đến 25 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 25 triệu đến 30 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 30 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Card đồ họa</a></li>
                        <li><a class="menu-link" href="">GTX 1650</a></li>
                        <li><a class="menu-link" href="">RTX 3050</a></li>
                        <li><a class="menu-link" href="">RTX 3060</a></li>
                        <li><a class="menu-link" href="">RTX 3070</a></li>
                        <li><a class="menu-link" href="">AMD Redeon RX</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Asus Gamng</a></li>
                        <li><a class="menu-link" href="">ROG Series</a></li>
                        <li><a class="menu-link" href="">TUF Series</a></li>
                        <li><a class="menu-link" href="">Zephyrus Series</a></li>
                        <li><a class="menu-link" href="">ROG Trix G</a></li>
                        <li><a class="menu-link" href="">ROG Flow Series</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Acer Gaming</a></li>
                        <li><a class="menu-link" href="">Nitro Series</a></li>
                        <li><a class="menu-link" href="">Aspire Series</a></li>
                        <li><a class="menu-link" href="">Predator Series</a></li>
                        <li><a class="menu-link" href="">ConseptD Series</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Dell Gaming</a></li>
                        <li><a class="menu-link" href="">Dell Gaming G Series</a></li>
                        <li><a class="menu-link" href="">Alienware Series</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Lenovo Gaming</a></li>
                        <li><a class="menu-link" href="">Legion Gaming</a></li>
                        <li><a class="menu-link" href="">Ideapad Gaming</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Gigabyte Gaming</a></li>
                        <li><a class="menu-link" href="">Gigabyte G5</a></li>
                        <li><a class="menu-link" href="">Gigabyte G7</a></li>
                        <li><a class="menu-link" href="">Gigabyte Aorus</a></li>
                        <li><a class="menu-link" href="">Gigabyte Aero</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">HP Gaming</a></li>
                        <li><a class="menu-link" href="">HP Victus 15</a></li>
                        <li><a class="menu-link" href="">HP Victus 16</a></li>
                        <li><a class="menu-link" href="">HP Omen 16</a></li>
                        <li><a class="menu-link" href="">HP Envy 16</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">LAPTOP VĂN PHÒNG</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thương hiệu</a></li>
                        <li><a class="menu-link" href="">Acer văn phòng</a></li>
                        <li><a class="menu-link" href="">Asus văn phòng</a></li>
                        <li><a class="menu-link" href="">MSI văn phòng</a></li>
                        <li><a class="menu-link" href="">Gigabyte văn phòng</a></li>
                        <li><a class="menu-link" href="">Dell văn phòng</a></li>
                        <li><a class="menu-link" href="">HP văn phòng</a></li>
                        <li><a class="menu-link" href="">Lenovo văn phòng</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 20 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 20 triệu đến 25 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 25 triệu đến 30 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 30 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Laptop theo nhu cầu</a></li>
                        <li><a class="menu-link" href="">Laptop đồ họa</a></li>
                        <li><a class="menu-link" href="">Laptop học sinh - sinh viên</a></li>
                        <li><a class="menu-link" href="">Laptop mỏng nhẹ</a></li>
                        <li><a class="menu-link" href="">Laptop khuyến mãi</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Asus văn phòng</a></li>
                        <li><a class="menu-link" href="">ProArt StudioBook Series</a></li>
                        <li><a class="menu-link" href="">ExpertBook Series</a></li>
                        <li><a class="menu-link" href="">Asus Oled Series</a></li>
                        <li><a class="menu-link" href="">ZenBook Series</a></li>
                        <li><a class="menu-link" href="">VivoBook Pro Series</a></li>
                        <li><a class="menu-link" href="">VivoBook Series</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Acer văn phòng</a></li>
                        <li><a class="menu-link" href="">Aspire Series</a></li>
                        <li><a class="menu-link" href="">Swift Series</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Dell văn phòng</a></li>
                        <li><a class="menu-link" href="">Dell Inspiron 14</a></li>
                        <li><a class="menu-link" href="">Dell Inspiron 15</a></li>
                        <li><a class="menu-link" href="">Dell Vostro 14</a></li>
                        <li><a class="menu-link" href="">Dell Vostro 15</a></li>
                        <li><a class="menu-link" href="">Dell XPS 13</a></li>
                        <li><a class="menu-link" href="">Dell XPS 15</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Lenovo văn phòng</a></li>
                        <li><a class="menu-link" href="">ThinkBook Series</a></li>
                        <li><a class="menu-link" href="">IdeaPad Series</a></li>
                        <li><a class="menu-link" href="">IdeaPad Pro Series</a></li>
                        <li><a class="menu-link" href="">ThinkPad Series</a></li>
                        <li><a class="menu-link" href="">Yoga Series</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">MSI văn phòng</a></li>
                        <li><a class="menu-link" href="">Modern Series</a></li>
                        <li><a class="menu-link" href="">Prestige Series</a></li>
                        <li><a class="menu-link" href="">Summit Series</a></li>
                        <li><a class="menu-link" href="">Creator Series</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">HP văn phòng</a></li>
                        <li><a class="menu-link" href="">Pavilion Series</a></li>
                        <li><a class="menu-link" href="">Envy Series</a></li>
                        <li><a class="menu-link" href="">ProBook Series</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">LINH KIỆN MÁY TÍNH</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">CPU</a></li>
                        <li><a class="menu-link" href="">CPU Intel</a></li>
                        <li><a class="menu-link" href="">Intel thế hệ 10</a></li>
                        <li><a class="menu-link" href="">Intel thế hệ 11</a></li>
                        <li><a class="menu-link" href="">Intel thế hệ 12</a></li>
                        <li><a class="menu-link" href="">Intel thế hệ 13</a></li>
                        <li><a class="menu-link" href="">Intel thế hệ 14 (Mới)</a></li>
                        <li><a class="menu-link" href="">Intel Xeon</a></li>
                        <li><a class="menu-link" href="">Intel X-Series LGA2066</a></li>
                        <li><a class="menu-link" href="">CPU AMD</a></li>
                        <li><a class="menu-link" href="">AMD Ryzen 3000</a></li>
                        <li><a class="menu-link" href="">AMD Ryzen 4000</a></li>
                        <li><a class="menu-link" href="">AMD Ryzen 5000</a></li>
                        <li><a class="menu-link" href="">AMD Ryzen 7000 (Mới)</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">HDD (Ổ cứng)</a></li>
                        <li><a class="menu-link" href="">HDD Seagate</a></li>
                        <li><a class="menu-link" href="">HDD Western</a></li>
                        <li><a class="menu-link" href="">HDD Toshiba</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">RAM PC</a></li>
                        <li><a class="menu-link" href="">RAM PC Kingmax</a></li>
                        <li><a class="menu-link" href="">RAM PC Kingston</a></li>
                        <li><a class="menu-link" href="">RAM PC Corsair</a></li>
                        <li><a class="menu-link" href="">RAM DDR5</a></li>
                        <li><a class="menu-link" href="">RAM PC Gigabyte</a></li>
                        <li><a class="menu-link" href="">RAM PC TeamGroup</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Main</a></li>
                        <li><a class="menu-link" href="">Main Asus</a></li>
                        <li><a class="menu-link" href="">Main Gigabyte</a></li>
                        <li><a class="menu-link" href="">Mainboard cho CPU AMD</a></li>
                        <li><a class="menu-link" href="">Mainboard cho CPU Intel</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">RAM LAPTOP</a></li>
                        <li><a class="menu-link" href="">RAM Laptop Kingmax</a></li>
                        <li><a class="menu-link" href="">RAM Laptop G.Skill</a></li>
                        <li><a class="menu-link" href="">RAM Laptop Kingston</a></li>
                        <li><a class="menu-link" href="">RAM Laptop Cosair</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">SSD</a></li>
                        <li><a class="menu-link" href="">SSD 120G - 128G</a></li>
                        <li><a class="menu-link" href="">SSD 240G - 256G</a></li>
                        <li><a class="menu-link" href="">SSD 480G - 512G</a></li>
                        <li><a class="menu-link" href="">SSD trên 1TB</a></li>
                        <li><a class="menu-link" href="">SSD Gigabyte - Corsair</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">MÀN HÌNH MÁY TÍNH</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thương hiệu</a></li>
                        <li><a class="menu-link" href="">LG</a></li>
                        <li><a class="menu-link" href="">Asus</a></li>
                        <li><a class="menu-link" href="">Dell</a></li>
                        <li><a class="menu-link" href="">Acer</a></li>
                        <li><a class="menu-link" href="">Samsung</a></li>
                        <li><a class="menu-link" href="">HP</a></li>
                        <li><a class="menu-link" href="">Gigabyte</a></li>
                        <li><a class="menu-link" href="">ViewSonic</a></li>
                        <li><a class="menu-link" href="">AOC</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 3 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 3 triệu đến 5 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 5 triệu đến 10 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 10 triệu đến 20 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 20 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Độ phân giải</a></li>
                        <li><a class="menu-link" href="">HD 720p</a></li>
                        <li><a class="menu-link" href="">Full HD 1080p</a></li>
                        <li><a class="menu-link" href="">2K 1440p</a></li>
                        <li><a class="menu-link" href="">4K UHD</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Màn hình cong</a></li>
                        <li><a class="menu-link" href="">24" Curved</a></li>
                        <li><a class="menu-link" href="">27" Curved</a></li>
                        <li><a class="menu-link" href="">32" Curved</a></li>
                        <li><a class="menu-link" href="">Trên 32" Curved</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Tần số quét</a></li>
                        <li><a class="menu-link" href="">60Hz</a></li>
                        <li><a class="menu-link" href="">75Hz</a></li>
                        <li><a class="menu-link" href="">100Hz</a></li>
                        <li><a class="menu-link" href="">144Hz</a></li>
                        <li><a class="menu-link" href="">240Hz</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Kích thước</a></li>
                        <li><a class="menu-link" href="">19"</a></li>
                        <li><a class="menu-link" href="">22"</a></li>
                        <li><a class="menu-link" href="">24"</a></li>
                        <li><a class="menu-link" href="">27"</a></li>
                        <li><a class="menu-link" href="">29"</a></li>
                        <li><a class="menu-link" href="">32"</a></li>
                        <li><a class="menu-link" href="">Trên 32"</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">THIẾT BỊ NGOẠI VI</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Chuột</a></li>
                        <li><a class="menu-link" href="">Dareu - Akko</a></li>
                        <li><a class="menu-link" href="">Corsair - Razer</a></li>
                        <li><a class="menu-link" href="">Newmen - Lighting</a></li>
                        <li><a class="menu-link" href="">Logitech - Redragon</a></li>
                        <li><a class="menu-link" href="">Havit</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Bàn Phím</a></li>
                        <li><a class="menu-link" href="">Dareu - Akko</a></li>
                        <li><a class="menu-link" href="">Corsair - Razer</a></li>
                        <li><a class="menu-link" href="">Lighting</a></li>
                        <li><a class="menu-link" href="">Logitech</a></li>
                        <li><a class="menu-link" href="">Havit</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Tai nghe</a></li>
                        <li><a class="menu-link" href="">SoundMax - Logitech</a></li>
                        <li><a class="menu-link" href="">Sony - Razer</a></li>
                        <li><a class="menu-link" href="">Consair - Zidli</a></li>
                        <li><a class="menu-link" href="">Lighting - Dareu</a></li>
                        <li><a class="menu-link" href="">Havit</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thẻ nhớ</a></li>
                        <li><a class="menu-link" href="">Samsung</a></li>
                        <li><a class="menu-link" href="">Sandisk</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Webcam</a></li>
                        <li><a class="menu-link" href="">Logitech</a></li>
                        <li><a class="menu-link" href="">Rapoo</a></li>
                        <li><a class="menu-link" href="">Dahua</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">CAMERA</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">THƯƠNG HIỆU</a></li>
                        <li><a class="menu-link" href="">Ezviz</a></li>
                        <li><a class="menu-link" href="">Imou</a></li>
                        <li><a class="menu-link" href="">Hikvision</a></li>
                        <li><a class="menu-link" href="">Dahua</a></li>
                        <li><a class="menu-link" href="">KBvision</a></li>
                        <li><a class="menu-link" href="">Yoosee</a></li>
                        <li><a class="menu-link" href="">Vantech</a></li>
                        <li><a class="menu-link" href="">Uniview</a></li>
                        <li><a class="menu-link" href="">Tenda</a></li>
                        <li><a class="menu-link" href="">HD Paragon</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 500 nghìn</a></li>
                        <li><a class="menu-link" href="">Từ 500 nghìn tới 1 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 1 triệu đến 5 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 5 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Độ phân giải</a></li>
                        <li><a class="menu-link" href="">2MP</a></li>
                        <li><a class="menu-link" href="">4MP</a></li>
                        <li><a class="menu-link" href="">8MP</a></li>
                        <li><a class="menu-link" href="">4MP</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">THIẾT BỊ ÂM THANH</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Loa vi tính</a></li>
                        <li><a class="menu-link" href="">SoundMax</a></li>
                        <li><a class="menu-link" href="">Microlab</a></li>
                        <li><a class="menu-link" href="">Creative</a></li>
                        <li><a class="menu-link" href="">Bosston</a></li>
                        <li><a class="menu-link" href="">Havit</a></li>
                        <li><a class="menu-link" href="">Microtek</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 500 nghìn</a></li>
                        <li><a class="menu-link" href="">Từ 500 nghìn tới 1 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 1 triệu đến 5 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 5 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Loa di động</a></li>
                        <li><a class="menu-link" href="">SoundMax</a></li>
                        <li><a class="menu-link" href="">Sony</a></li>
                        <li><a class="menu-link" href="">Creative</a></li>
                        <li><a class="menu-link" href="">Microlab</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">MÁY IN</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thương hiệu</a></li>
                        <li><a class="menu-link" href="">Cannon</a></li>
                        <li><a class="menu-link" href="">HP</a></li>
                        <li><a class="menu-link" href="">Epson</a></li>
                        <li><a class="menu-link" href="">Brother</a></li>
                        <li><a class="menu-link" href="">OKI</a></li>
                        <li><a class="menu-link" href="">Xprinter</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Máy in theo nhu cầu</a></li>
                        <li><a class="menu-link" href="">Máy in cá nhân, gia đình</a></li>
                        <li><a class="menu-link" href="">Máy in doanh nghiệp, văn phòng</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Máy in theo chức năng</a></li>
                        <li><a class="menu-link" href="">Máy in đa năng</a></li>
                        <li><a class="menu-link" href="">Máy in đơn năng</a></li>
                        <li><a class="menu-link" href="">Máy in có màu</a></li>
                        <li><a class="menu-link" href="">Máy in đen trắng</a></li>
                        <li><a class="menu-link" href="">Máy in 2 mặt</a></li>
                        <li><a class="menu-link" href="">Máy in mã vạch</a></li>
                        <li><a class="menu-link" href="">Máy in hóa đơn</a></li>
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="has-children" style="background-color: #f5f6f8;">
                  <a href="http://codyhouse.co/?p=748" style="font-size: medium;text-decoration:none">ĐIỆN THOẠI THÔNG MINH</a>
                  <ul class="cd-secondary-dropdown is-hidden" style="z-index: 999;">
                    <div class="row" style="margin-top: 20px;">
                      <!-- Cột 1 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Thương hiệu</a></li>
                        <li><a class="menu-link" href="">Acer văn phòng</a></li>
                        <li><a class="menu-link" href="">Asus văn phòng</a></li>
                        <li><a class="menu-link" href="">MSI văn phòng</a></li>
                        <li><a class="menu-link" href="">Gigabyte văn phòng</a></li>
                        <li><a class="menu-link" href="">Dell văn phòng</a></li>
                        <li><a class="menu-link" href="">HP văn phòng</a></li>
                        <li><a class="menu-link" href="">Lenovo văn phòng</a></li>
                      </div>
                      <!-- Cột 2 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Giá bán</a></li>
                        <li><a class="menu-link" href="">Dưới 20 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 20 triệu đến 25 triệu</a></li>
                        <li><a class="menu-link" href="">Từ 25 triệu đến 30 triệu</a></li>
                        <li><a class="menu-link" href="">Trên 30 triệu</a></li>
                      </div>
                      <!-- Cột 3 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Laptop theo nhu cầu</a></li>
                        <li><a class="menu-link" href="">Laptop đồ họa</a></li>
                        <li><a class="menu-link" href="">Laptop học sinh - sinh viên</a></li>
                        <li><a class="menu-link" href="">Laptop mỏng nhẹ</a></li>
                        <li><a class="menu-link" href="">Laptop khuyến mãi</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Asus văn phòng</a></li>
                        <li><a class="menu-link" href="">ProArt StudioBook Series</a></li>
                        <li><a class="menu-link" href="">ExpertBook Series</a></li>
                        <li><a class="menu-link" href="">Asus Oled Series</a></li>
                        <li><a class="menu-link" href="">ZenBook Series</a></li>
                        <li><a class="menu-link" href="">VivoBook Pro Series</a></li>
                        <li><a class="menu-link" href="">VivoBook Series</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Acer văn phòng</a></li>
                        <li><a class="menu-link" href="">Aspire Series</a></li>
                        <li><a class="menu-link" href="">Swift Series</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Dell văn phòng</a></li>
                        <li><a class="menu-link" href="">Dell Inspiron 14</a></li>
                        <li><a class="menu-link" href="">Dell Inspiron 15</a></li>
                        <li><a class="menu-link" href="">Dell Vostro 14</a></li>
                        <li><a class="menu-link" href="">Dell Vostro 15</a></li>
                        <li><a class="menu-link" href="">Dell XPS 13</a></li>
                        <li><a class="menu-link" href="">Dell XPS 15</a></li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Cột 4 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">Lenovo văn phòng</a></li>
                        <li><a class="menu-link" href="">ThinkBook Series</a></li>
                        <li><a class="menu-link" href="">IdeaPad Series</a></li>
                        <li><a class="menu-link" href="">IdeaPad Pro Series</a></li>
                        <li><a class="menu-link" href="">ThinkPad Series</a></li>
                        <li><a class="menu-link" href="">Yoga Series</a></li>
                      </div>
                      <!-- Cột 5 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">MSI văn phòng</a></li>
                        <li><a class="menu-link" href="">Modern Series</a></li>
                        <li><a class="menu-link" href="">Prestige Series</a></li>
                        <li><a class="menu-link" href="">Summit Series</a></li>
                        <li><a class="menu-link" href="">Creator Series</a></li>
                      </div>
                      <!-- Cột 6 -->
                      <div class="col-lg-4">
                        <li><a class="menu-header text-uppercase" href="">HP văn phòng</a></li>
                        <li><a class="menu-link" href="">Pavilion Series</a></li>
                        <li><a class="menu-link" href="">Envy Series</a></li>
                        <li><a class="menu-link" href="">ProBook Series</a></li>
                      </div>
                    </div>
                  </ul>
                </li> <!-- .has-children -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- Menu danh mục sản phẩm -->
      </div>
      <div class="col-6 my-3 carousel-banner">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
          </ol>

          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/slider_1.jpg?1717233335960" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/slider_2.jpg?1717233335960" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/slider_2.jpg?1717233335960" class="d-block w-100" alt="Slide 3">
            </div>
          </div>

          <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <!-- Additional images below carousel -->
        <div class="row mt-3">
          <div class="col-6">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_1.jpg?1717233335960" alt="" class="img-fluid img-bottom">
          </div>
          <div class="col-6">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_2.jpg?1717233335960" alt="" class="img-fluid img-bottom">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-6 extra-img-row">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_1.jpg?1717233335960" alt="" class="img-fluid img-bottom">
          </div>
          <div class="col-6 extra-img-row">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_2.jpg?1717233335960" alt="" class="img-fluid img-bottom">
          </div>
        </div>

      </div>
      <div class="col banner-column">
        <div class="row">
          <div class="col">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_1.jpg?1717233335960" alt="" class="img-fluid img-banner">
          </div>
        </div>
        <div class="row">
          <div class="col img-left">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_2.jpg?1717233335960" alt="" class="img-fluid img-banner">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_3.jpg?1717233335960" alt="" class="img-fluid img-banner">
          </div>
        </div>
        <div class="row extra-img-row">
          <div class="col">
            <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/bottom_banner_3.jpg?1717233335960" alt="" class="img-fluid img-banner ">
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Search -->
   <form class="d-flex my-2 mx-4 d-block d-lg-none">
            <div class="input-group">
              <input class="form-control rounded-start word" type="search" placeholder="" aria-label="Search">
              <button type="submit" style="background-color: #e30019;padding:10px 15px;border:none" class="rounded-end">
                <i class="fa-solid fa-magnifying-glass" style="color: white;"></i>
              </button>
            </div>
          </form>
          <!-- Search -->
  <!-- Container only show slider on mobile start -->
  <!-- <div class="container"  >
        <div class="swiper header-sample-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="">
            <img src="https://file.hstatic.net/200000722513/file/bot_2_52563cb8e940437bade56e0a309cb088.png" alt="" >
            </a>
            </div>
            <div class="swiper-slide">
            <a href="">
            <img src="https://file.hstatic.net/200000722513/file/right_3_41b504bb8f4c4539adaf8155cbf7499c.png" alt="">
            </a>
            </div>
            <div class="swiper-slide">
            <a href="">
            <img src="https://file.hstatic.net/200000722513/file/bottom_4_b3766d51aee44b38bcad1b7e74a71968.png" alt="">
            </a>
            </div>             
              </div>
            </div>         
          <div class="swiper-pagination"></div>       -->
  <!-- </div>  -->


  <!-- Slider Laptop giảm giá sốc start -->
  <?php
  require_once('includes/connect.php');

  // Kết nối đến CSDL
  $conn = connectDB();

  // Chuẩn bị câu truy vấn SQL
  $sql = "SELECT card_id, img_src, price, price_del, sale, title, link_product FROM cards_laptop_sale";
  $result = $conn->query($sql);

  // Kiểm tra và hiển thị dữ liệu nếu có
  if ($result->num_rows > 0) {
  ?>

    <div class="container my-6 p-3" id="container-slider-sale">
      <div class="header-container ">
        <h4 class="text-uppercase" style="color:#ffee12; font-weight:800;font-size:x-larger;font-style:italic">DEAL SỐC - GIÁ HỜI <img class="flash-image" src="templates/image/pngtree-thunder-and-bolt-lighting-flash-vector-png-image_1502121-removebg-preview.png" alt="hot-sale"></h4>
        <p id="countdown-text" style="color: #f5f6f8;">Chương trình đang diễn ra: <span id="countdown"></span></p>
      </div>
      <div class="slide-container swiper">
        <div class="slide-content">

          <div class="card-wrapper swiper-wrapper">
            <?php
            // Lặp qua từng bản ghi và hiển thị
            while ($row = $result->fetch_assoc()) {
              $card_id = $row['card_id'];
              $img_src = $row['img_src'];
              $price = $row['price'];
              $price_del = $row['price_del'];
              $sale = $row['sale'];
              $title = $row['title'];
              $link_product = $row['link_product'];
            ?>
              <div class="card swiper-slide" id="card-product">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="<?php echo $img_src; ?>" alt="" class="card-img">
                  </div>
                </div>
                <div class="card-content">
                  <h5 class="card-title"><?php echo $title; ?></h5>
                  <p class="card-price"><?php echo number_format($price); ?>₫</p>
                  <p>
                    <del class="card-price-del"><?php echo number_format($price_del); ?>₫</del>
                    <span class="card-price-sale" style="margin-left: 5px;">-<?php echo $sale; ?>%</span>
                    <a href="<?php echo $link_product; ?>" class="add-to-cart">
                      <i class="fa-solid fa-cart-shopping ms-2" style="font-size: large;"></i>
                    </a>
                  </p>
                  <p class="slogan">Số lượng có hạn</p>
                </div>
              </div>
            <?php
            }
            ?>
          </div> <!-- close card-wrapper -->
          <!-- Nút điều hướng -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- Đánh dấu trang -->
          <div class="swiper-pagination"></div>
        </div> <!-- close slide-content -->
      </div> <!-- close slide-container -->
    </div> <!-- close container -->
  <?php
  } else {
    echo "Không có dữ liệu để hiển thị.";
  }
  // Đóng kết nối
  closeDB($conn);
  ?>
  <!-- Slider Laptop giảm giá sốc end-->












  <!-- product top sản phẩm bán chạy start -->
  <?php
  // Kết nối đến cơ sở dữ liệu
  require_once('includes/connect.php');

  // Kết nối đến CSDL
  $conn = connectDB();

  // Mặc định truy vấn sẽ lấy dữ liệu từ bảng 'cards_laptop'
  $table_name = "cards_laptop";
  $sql = "SELECT * FROM $table_name";

  // Kiểm tra nếu người dùng bấm vào "Màn hình"
  if (isset($_GET['category']) && $_GET['category'] == 'man-hinh') {
    $table_name = "cards_manhinh";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'linh-kien') {
    $table_name = "cards_linkkien";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'camera') {
    $table_name = "cards_camera";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'chuot') {
    $table_name = "cards_chuot";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'ban-phim') {
    $table_name = "cards_banphim";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'tai-nghe') {
    $table_name = "cards_tainghe";
    $sql = "SELECT * FROM $table_name";
  }
  if (isset($_GET['category']) && $_GET['category'] == 'loa') {
    $table_name = "cards_loa";
    $sql = "SELECT * FROM $table_name";
  }
  $result = $conn->query($sql);

  // Kiểm tra số lượng bản ghi trả về từ truy vấn
  if ($result->num_rows > 0) {
  ?>
    <div class="container p-3" id="container-slider-sale">

      <div class="header-container" style="background-color: #217adc;">
        <h4 class="text-uppercase" style="color:#ffee12; font-weight:800;font-size:x-larger;font-style:italic">TOP SẢN PHẨM BÁN CHẠY</h4>
      </div>
      <div class="container bg-trasparent p-3" id="container-product" style="background-color: #ffffff;">
        <div class="category-links">
          <a href="?category=man-hinh">Màn hình</a>
          <a href="?category=laptop">Laptop</a>
          <a href="?category=linh-kien">Linh kiện</a>
          <a href="?category=camera">Camera</a>
          <a href="?category=ban-phim">Bàn phím</a>
          <a href="?category=chuot">Chuột</a>
          <a href="?category=loa">Loa</a>
          <a href="?category=tai-nghe">Tai nghe</a>
        </div>

        <div id="product-list" class="row row-cols-2 row-cols-xs-3 row-cols-sm-3 row-cols-lg-5 gx-3 g-3">
          <?php
          // Lặp qua từng bản ghi và hiển thị các card
          while ($row = $result->fetch_assoc()) {
            $card_id = $row['card_id'];
            $img_src = $row['img_src'];
            $label = $row['label'];
            $price = $row['price'];
            $price_del = $row['price_del'];
            $sale = $row['sale'];
            $link_review = $row['link_review'];
            $title = $row['title'];
            $link_product = $row['link_product'];
          ?>
            <div class="col hp" id="card<?= $card_id ?>">
              <div class="card h-100 shadow-sm">
                <a href="<?= $link_product ?>">
                  <img src="<?= $img_src ?>" class="card-img-top" alt="<?= $title ?>" />
                  <div class="label-top shadow-sm">
                    <a class="text-white" href="#" id="label<?= $card_id ?>"><?= $label ?></a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title" id="product-title<?= $card_id ?>">
                      <?= $title ?>
                    </h5>
                </a>
                <div class="clearfix mb-3">
                  <span class="float-start card-price"><?= number_format($price, 0, ',', '.') ?>₫</span>
                </div>
                <p>
                  <del class="card-price-del"><?= number_format($price_del, 0, ',', '.') ?>₫</del>
                  <span class="card-price-sale" style="margin-left: 10px;">-<?= $sale ?>%</span>
                  <a href="#" class="add-to-cart">
                    <i class="fa-solid fa-cart-shopping ms-2" style="font-size: large;"></i>
                  </a>
                </p>
                <div class="clearfix mb-1">
                  <!-- <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span> -->
                  <span class="float-end"><a href="<?= $link_review ?>" class="small text-muted text-uppercase aff-link">reviews</a></span>
                </div>
              </div>
            </div>
        </div>
      <?php
          }
      ?>
      </div> <!-- end #product-list -->
    </div> <!-- end #container-product -->
  <?php
  } else {
    echo "0 results";
  }

  // Đóng kết nối với cơ sở dữ liệu
  closeDB($conn);
  ?>
  <!-- product top sản phẩm bán chạy end -->





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Bắt sự kiện click vào các liên kết danh mục
      $('.category-links a').click(function(e) {
        e.preventDefault();
        var category = $(this).attr('href').split('?category=')[1];

        // Gửi yêu cầu AJAX để lấy sản phẩm từ server
        $.ajax({
          url: 'index.php', // Đường dẫn đến chính file này để xử lý PHP
          type: 'GET',
          data: {
            category: category
          },
          success: function(response) {
            $('#product-list').html($(response).find('#product-list').html()); // Cập nhật danh sách sản phẩm
          },
          error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
          }
        });
      });
    });
  </script>






  <!-- Laptop gaming start -->
  <?php
  // Kết nối đến cơ sở dữ liệu
  require_once('includes/connect.php');

  // Kết nối đến CSDL
  $conn = connectDB();

  // Mặc định truy vấn sẽ lấy dữ liệu từ bảng 'cards_laptop'
  $table_name = "cards_laptop";
  $sql = "SELECT * FROM $table_name";

  $result = $conn->query($sql);

  // Kiểm tra số lượng bản ghi trả về từ truy vấn
  if ($result->num_rows > 0) {
  ?>
  <div class="header-container mt-4" style="background-color: #217adc;">
  <div>
    <h4 class="text-uppercase" style="color:#ffee12; font-weight:800; font-size:x-large; font-style:italic; white-space: nowrap;padding:5px">LAPTOP GAMING</h4> 
  </div>
</div> 
    <div class="container p-3" id="container-product" style="background-color: #ffffff;">
      <div id="product-list" class="row row-cols-2 row-cols-xs-3 row-cols-sm-3 row-cols-lg-5 gx-3 g-3">
        <?php
        // Lặp qua từng bản ghi và hiển thị các card
        while ($row = $result->fetch_assoc()) {
          $card_id = $row['card_id'];
          $img_src = $row['img_src'];
          $label = $row['label'];
          $price = $row['price'];
          $price_del = $row['price_del'];
          $sale = $row['sale'];
          $link_review = $row['link_review'];
          $title = $row['title'];
          $link_product = $row['link_product'];
        ?>
          <div class="col hp" id="card<?= $card_id ?>">
            <div class="card h-100 shadow-sm">
              <a href="<?= $link_product ?>">
                <img src="<?= $img_src ?>" class="card-img-top" alt="<?= $title ?>" />
                <div class="label-top shadow-sm">
                  <a class="text-white" href="#" id="label<?= $card_id ?>"><?= $label ?></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title" id="product-title<?= $card_id ?>">
                    <?= $title ?>
                  </h5>
              </a>
              <div class="clearfix mb-3">
                <span class="float-start card-price"><?= number_format($price, 0, ',', '.') ?>₫</span>
              </div>
              <p>
                <del class="card-price-del"><?= number_format($price_del, 0, ',', '.') ?>₫</del>
                <span class="card-price-sale">-<?= $sale ?>%</span>
                <a href="#" class="add-to-cart">
                  <i class="fa-solid fa-cart-shopping ms-2" style="font-size: large;"></i>
                </a>
              </p>
              <div class="clearfix mb-1">
                <!-- <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span> -->
                <span class="float-end"><a href="<?= $link_review ?>" class="small text-muted text-uppercase aff-link">reviews</a></span>
              </div>
            </div>
          </div>
      </div>
    <?php
        }
    ?>
    </div> <!-- end #product-list -->
    </div> <!-- end #container-product -->
  <?php
  } else {
    echo "0 results";
  }

  // Đóng kết nối với cơ sở dữ liệu
  closeDB($conn);

  ?>
  <!-- Laptop gaming end -->




<!-- Container only show slider on mobile start -->
<?php
// Kết nối đến cơ sở dữ liệu
require_once('includes/connect.php');

// Kết nối đến CSDL
$conn = connectDB();

// Mặc định truy vấn sẽ lấy dữ liệu từ bảng 'cards_laptop'
$table_name = "cards_pc";
$sql = "SELECT * FROM $table_name";

$result = $conn->query($sql);

// Kiểm tra số lượng bản ghi trả về từ truy vấn
if ($result->num_rows > 0) {
?>
<!-- Container only show slider on mobile start -->
<div class="header-container mt-4" style="background-color: #217adc;">
  <div>
    <h4 class="text-uppercase mb-0" style="color:#ffee12; font-weight:800; font-size:x-large; font-style:italic; white-space: nowrap;padding:5px">PC GAMING</h4> 
  </div>
  
</div> 
<div class="container p-3" id="container-product" style="background-color: #ffffff;">
<div class="container container-marquee mb-3">  <div class="scrolling-text-container">
    <div class="scrolling-text-inner" style="--marquee-speed: 30s; --direction:scroll-left" role="marquee">
        <div class="scrolling-text">
          <div class="scrolling-text-item">PC Gaming giảm giá cực sốc</div>
            <div class="scrolling-text-item">Giá chỉ từ 5.590.000₫</div>
            <div class="scrolling-text-item">Bảo hành chính hãng</div>
            <div class="scrolling-text-item">Vận chuyển toàn quốc</div>
            <div class="scrolling-text-item">Mua hàng ngay, kèm nhiều ưu đãi</div>
        </div>
        <div class="scrolling-text">
        <div class="scrolling-text-item">PC Gaming giảm giá cực sốc</div>
        <div class="scrolling-text-item">Giá chỉ từ 5.590.000₫</div>
            <div class="scrolling-text-item">Bảo hành chính hãng</div>
            <div class="scrolling-text-item">Vận chuyển toàn quốc</div>
            <div class="scrolling-text-item">Mua hàng ngay, kèm nhiều ưu đãi</div>
        </div>
    </div>
</div></div>
  <div class="swiper sample-slider p-3">
    <div class="swiper-wrapper">    
      <?php
      // Loop through each record fetched from the database
      while ($row = $result->fetch_assoc()) {
        $card_id = $row['card_id'];
        $img_src = $row['img_src'];
        $label = $row['label'];
        $price = number_format($row['price'], 0, ',', '.'); // Định dạng số tiền price
        $price_del = number_format($row['price_del'], 0, ',', '.'); // Định dạng số tiền price_del
        $sale = $row['sale'];
        $link_review = $row['link_review'];
        $title = $row['title'];
        $link_product = $row['link_product'];
      ?>
        <div class="swiper-slide">
          <a href="<?= $link_product ?>" class="card-link">
            <div class="card h-100 shadow-sm">
              <div class="card-image">
                <img src="<?= $img_src ?>" class="card-img-top" alt="...">
                <div class="label-top shadow-sm">
                  <a class="text-white" href="#"><?= $label ?></a>
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $title ?></h5>
                <p class="card-price"><?= $price ?>₫</p>
                <p>
                  <del class="card-price-del"><?= $price_del ?>₫</del>
                  <span class="card-price-sale"><?= $sale ?>%</span>
                  <a href="#" class="add-to-cart">
                    <i class="fa-solid fa-cart-shopping ms-2" style="font-size: large;"></i>
                  </a>
                </p>
                <div class="clearfix mb-1">
                  <span class="float-end"><a href="<?= $link_review ?>" class="small text-muted text-uppercase aff-link">reviews</a></span>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev d-none"></div>
    <div class="swiper-button-next d-none"></div>
  </div>
    <!-- Xem tất cả -->
    <div class="text-center mt-4 mb-2">
  <a href="#" class="custom-link">
    Xem tất cả <i class="fa-solid fa-chevron-right"></i>
  </a>
</div>

</div>
<!-- Container only show slider on mobile end -->
<?php
}
?>

<!-- Logo slider-->



  </div> <!-- container main end -->
  <!-- Biểu tượng Zalo -->
  <div class="zalo-icon">
    <a href="" target="_blank" title="Gửi tin nhắn cho chúng tôi qua zalo">
      <img data-sizes="auto" class="lazyautosizes lazyloaded" src="https://file.hstatic.net/200000722513/file/icon_zalo__1__f5d6f273786c4db4a3157f494019ab1e.png" data-src="https://file.hstatic.net/200000722513/file/icon_zalo__1__f5d6f273786c4db4a3157f494019ab1e.png" alt="laptop64" sizes="45px">
    </a>
  </div>
  <a href="" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button" target="_blank" rel="nofollow"><img src="templates/image/messenger.png" alt="" width="50" height="50" style=" position: fixed;
    bottom: 270px;   /* Khoảng cách từ dưới lên */
    right: 20px;    /* Khoảng cách từ phải qua */
    z-index: 1;  /* Độ sâu hiển thị */"></a>

  <a href="" title="Gọi cho chúng tôi qua số điện thoại"><img class="fixed-image" src="//bizweb.dktcdn.net/100/410/941/themes/851040/assets/addthis-phone.svg?1720662061685" alt="Gọi ngay cho chúng tôi" width="50" height="50" style=" position: fixed;
    bottom: 180px;   /* Khoảng cách từ dưới lên */
    right: 20px;    /* Khoảng cách từ phải qua */
    z-index: 1;  /* Độ sâu hiển thị */"></a>
  

  <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment" title="Gửi tin nhắn trực tuyến với chúng tôi"></i> <i class="fa fa-close close"></i> </label>
  <div class="wrapper">
    <div class="header">
      <h6>Chat - Online</h6>
    </div>
    <div class="text-center p-2"> <span>Vui lòng điền vào mẫu sau, chúng tôi sẽ phản hồi lại sớm nhất.</span> </div>
    <div class="chat-form"> <input type="text" class="form-control" placeholder="Họ và tên"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Nội dung"></textarea> <button class="btn btn-success btn-block">Gửi</button> </div>
  </div>
 


<!-- Logo thương hiệu sản phẩm start -->
<div class="section-title mt-4">
	<h2>Thương hiệu sản phẩm</h2>
</div>
<div class="container" style="background-color: #ececec;">
<div id="wrapper">
      <div id="carousel">
        <div id="content">
          <img
            class="item"
            src="templates/image/acer.png"
          />
          <img
            src="templates/image/asus.png"
            class="item"
          />
          <img
            src="templates/image/Msi_Logo2.png"
            class="item"
          />
          <img
            src="templates/image/dell.png"
            class="item"
          />
          <img
            src="templates/image/hp.png"
            class="item"
          />
          <img
            src="templates/image/gigabyte.png"
            class="item"
          />
          <img
            src="templates/image/hkvision.png"
            class="item"
          />
          <img
            src="templates/image/d-link.png"
            class="item"
          />
          <img
            src="templates/image/tenda.png"
            class="item"
          />
          <img
            src="templates/image/kbvision.png"
            class="item"
          />
          <img
            class="item"
            src="templates/image/viewsonic.png"
          />
          <img
            src="templates/image/toshiba.png"
            class="item"
          />
          <img
            src="templates/image/philips.png"
            class="item"
          />
          <img
            src="templates/image/tp-link.png"
            class="item"
          />
          <img
            src="templates/image/dahua.png"
            class="item"
          />
          <img
            src="templates/image/lenovo.png"
            class="item"
          />
          <img
            src="templates/image/lg.png"
            class="item"
          />
          <img
            src="templates/image/aoc.png"
            class="item"
          />
        </div>
      </div>
      <button id="prev" class="d-lg-block d-none">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
      </button>
      <button id="next" class="d-lg-block d-none">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
      </button>
    </div>
</div>
<!-- Logo thương hiệu sản phẩm end -->

<script>
	const gap = 16;

const carousel = document.getElementById("carousel"),
  content = document.getElementById("content"),
  next = document.getElementById("next"),
  prev = document.getElementById("prev");

next.addEventListener("click", e => {
  carousel.scrollBy(width + gap, 0);
  if (carousel.scrollWidth !== 0) {
    prev.style.display = "flex";
  }
  if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.style.display = "none";
  }
});
prev.addEventListener("click", e => {
  carousel.scrollBy(-(width + gap), 0);
  if (carousel.scrollLeft - width - gap <= 0) {
    prev.style.display = "none";
  }
  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.style.display = "flex";
  }
});

let width = carousel.offsetWidth;
window.addEventListener("resize", e => (width = carousel.offsetWidth));

  </script>

</body>



<div class="container">
  <div class="d-flex flex-wrap">
    <div class="col-12 col-lg-6 border p-3 rounded mb-3">
      <div class="technology-news1">
        <h4 style="font-weight: bold;">TIN TỨC CÔNG NGHỆ</h4>
        <img src="https://bizweb.dktcdn.net/100/410/941/articles/3132123.jpg?v=1718274796983" alt="" style="float: left; margin-right: 10px;" class="img-news">
        <div>
          <a href="#" style="text-decoration: none;">Computex 2024: MSI ra mắt dòng laptop mỏng nhẹ, đạt chuẩn AI+ cho doanh nhân và dân văn phòng</a>
          <div class="text-muted mt-0">
            Thứ Hai, 01/07/2024	  
          </div>
          <p>MSI - một trong những thương hiệu laptop hàng đầu đã mang đến sự kiện Computex 2024 với hàng loạt mẫu máy tính xách tay thế hệ mới...</p>
        </div>
      </div>
      <div class="technology-news">
        <img src="https://bizweb.dktcdn.net/100/410/941/articles/capsule-616x353.jpg?v=1719828338623" alt="" style="float: left; margin-right: 10px;" class="img-news">
        <div>
          <a href="#" style="text-decoration: none;">🎮 Khám Phá Danh Sách Các Tựa Game PS5 Hay Nhất Bạn Phải Chơi 🎮</a>
          <div class="text-muted mt-0">
            Thứ Hai, 01/07/2024	  
          </div>
          <p>Bạn là một fan hâm mộ của PlayStation 5 và đang tìm kiếm những trò chơi tuyệt vời để trải nghiệm? Đây là danh sách...</p>
        </div>
      </div>
      <br> 
      <br>
      <a href="" style="text-decoration:none;color:black"><div class="text-center rounded" style="background-color:#e5e6ed; padding:5px;margin-top:10px; font-weight:initial;">
Xem tất cả
</div></a>


    </div>
    
    <div class="col-12 col-lg-6 border p-3 rounded mb-3">
      <div class="promotion-news1">
        <h4 style="font-weight: bold;">CHƯƠNG TRÌNH KHUYẾN MÃI</h4>
        <img src="https://bizweb.dktcdn.net/100/410/941/articles/6018.jpg?v=1720750687977" alt="" style="float: left; margin-right: 10px;" class="img-news">
        <div>
          <a href="#" style="text-decoration: none;">NHẬN NGAY BỘ PHẦN MỀM MICROSOFT OFFICE 365 PERSONAL KHI MUA SẢN PHẨM ASUS</a>
          <div class="text-muted mt-0">
            Thứ Sáu, 12/07/2024	  
          </div>
          <p>LÀM CHỦ CUỘC CHƠI - NHẬN NGAY BỘ PHẦN MỀM MICROSOFT OFFICE 365 PERSONAL KHI MUA SẢN PHẨM ASUS ÁP DỤNG TỪ 01/07/2024 ĐẾN 30/09/2024</p>
        </div>
      </div>

      <div class="promotion-news">
        <img src="https://bizweb.dktcdn.net/100/410/941/articles/6016.png?v=1720239575687" alt="" style="float: left; margin-right: 10px;" class="img-news">
        <div>
          <a href="#" style="text-decoration: none;">ĐẠI HỘI KHUYẾN MÃI LINH KIỆN MÁY TÍNH ASUS</a>
          <div class="text-muted mt-0">
            Thứ Bảy, 06/07/2024	  
          </div>
          <p>
NHẬN NGAY QUÀ CỰC CHẤT KHI MUA CÁC SẢN PHẨM CASE, NGUỒN, TẢN ASUS/ ASUS ROG TỪ NGÀY 01/07/2024...		
			</p>
        </div>
      </div>
      <br> 
      <br>
      <br>
      <a href="" style="text-decoration:none;color:black"><div class="text-center rounded" style="background-color:#e5e6ed; padding:5px;margin-top:10px; font-weight:initial;">
Xem tất cả
</div></a>
    
    </div>
  </div>
</div>




<!-- Footer start-->
<footer class="text-center text-lg-start text-dark" style="background-color:  #edf1f8;margin-top:20px">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3" style="margin-bottom: 20px;">
          <h6 class="text-uppercase mb-4 font-weight-bold">
            Cửa hàng Laptop 64
          </h6>
          <p>
            Chuyên bán các loại máy tính và laptop chính hãng, phụ kiện, linh kiện máy vi tính, thiết bị văn phòng, thiết bị ngoại vi...
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="margin-bottom: 20px;">
          <h6 class="text-uppercase mb-4 font-weight-bold">Chính sách</h6>
          <p>
            <a class="text-dark policy">Chính sách bảo mật</a>
          </p>
          <p>
            <a class="text-dark policy">Chính sách bảo hành</a>
          </p>
          <p>
            <a class="text-dark policy">Chính sách thanh toán</a>
          </p>
          <p>
            <a class="text-dark policy">Chính sách đặt cọc sản phẩm</a>
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="margin-bottom: 10px;">
          <h6 class="text-uppercase mb-4 font-weight-bold">Thông tin liên hệ</h6>
          <p><i class="fas fa-home mr-3 me-2"></i>11 Phạm Thái Bường, P4, TP. Vĩnh Long</p>
          <p><i class="fas fa-envelope mr-3 me-2"></i>Email: info@laptop64.vn</p>
          <p><i class="fas fa-phone mr-3 me-2"></i>Số điện thoại: 077 456 7877</p>
          <hr class="w-100 clearfix d-md-none" />

          <h6 class="text-uppercase mb-4 font-weight-bold" style="margin-top: 30px;">Phương thức thanh toán</h6>
          <img src="https://bizweb.dktcdn.net/100/410/941/themes/851040/assets/footer_trustbadge.jpg?1717233335960" alt="">


        </div>
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="margin-top: 20px;">
          <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

          <!-- Facebook -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
          <!-- Github -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
        </div>
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
</footer>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);margin-bottom:-15px">
  © 2024 Copyright:
  <a class="text-primary" href="#" style="text-decoration: none;">Laptop64.com</a>
</div>
<!-- Khi checkbox được chọn (checked), thêm lớp active vào .wrapper để cho phép các sự kiện chuột. Ngược lại, loại bỏ lớp active để tắt pointer-events. (Icon chat trên giao diện gốc phải dưới màn hình)-->

<script>
  $(document).ready(function() {
    $('#check').change(function() {
      if ($(this).is(':checked')) {
        $('.wrapper').addClass('active');
      } else {
        $('.wrapper').removeClass('active');
      }
    });
  });
</script>
<!--Tắt quảng cáo đầu trang-->
<script>
  function closeHeader() {
    document.querySelector('header').style.display = 'none';
  }
  // JS tắt slider khi ở giao diện lớn, bật khi ở giao diện nhỏ với id là header-sample-slider
</script>
<script>
$(document).ready(function () {
    var words = [
        'Hôm nay bạn cần tìm gì?',
        'Nhập tên sản phẩm tại đây...',
    ];
    var part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 15,
        speed = 70;

    var wordflick = function () {
        setInterval(function () {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = false;
                        skip_count = 0;
                    }
                }
            } else {
                if (offset == 0) {
                    forwards = true;
                    i++;
                    offset = 0;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                } else {
                    offset--;
                }
            }
            $('.rounded-start').attr('placeholder', part); // Thay đổi placeholder của input
        }, speed);
    };

    // Gọi hàm wordflick để chạy hiệu ứng
    wordflick();
});
</script>
<!-- Swiper JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.header-sample-slider', {
      loop: false, // Enable loop mode
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // },
      on: {
        resize: function enableOnlyMobile(swiper) {
          // Disable the slider when the window width is less than or equal to 960
          if (1024 < window.innerWidth) {
            swiper.disable();
            swiper.el.classList.add('-non-slider');
          } else {
            swiper.enable();
            swiper.el.classList.remove('-non-slider');
          }
        },
      }
    });

    // Initial check on page load
    if (window.innerWidth <= 960) {
      swiper.params.slidesPerView = 1;
      swiper.update(); // Update swiper params
      swiper.el.classList.add("-non-slider"); // Add class to indicate non-slider state
    } else {
      swiper.params.slidesPerView = 1; // Adjusted to display 6 images per row
      swiper.update(); // Update swiper params
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.sample-slider', {
      loop: false, // Enable loop mode
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // },
      on: {
        resize: function enableOnlyMobile(swiper) {
          // Disable the slider when the window width is less than or equal to 960
          if (960 < window.innerWidth) {
            swiper.disable();
            swiper.el.classList.add('-non-slider');
          } else {
            swiper.enable();
            swiper.el.classList.remove('-non-slider');
          }
        },
      }
    });

    // Initial check on page load
    if (window.innerWidth <= 960) {
      swiper.params.slidesPerView = 2;
      swiper.update(); // Update swiper params
      swiper.el.classList.add("-non-slider"); // Add class to indicate non-slider state
    } else {
      swiper.params.slidesPerView = 2; // Adjusted to display 6 images per row
      swiper.update(); // Update swiper params
    }
  });
</script>

<!-- JavaScripts thời gian đếm ngược SALES-->
<script>
  // Lấy các phần tử DOM cần thiết
  const countdownElement = document.getElementById('countdown');
  const countdownTextElement = document.getElementById('countdown-text');

  // Ngày bắt đầu và ngày kết thúc chương trình (định dạng yyyy-MM-dd HH:mm:ss)
  const startDate = new Date('2024-06-26 08:30:00'); // Ví dụ ngày 26/06/2024, lúc 08:30:00
  const endDate = new Date('2024-06-26 18:00:00'); // Ví dụ ngày 26/06/2024, lúc 18:00:00

  // Lấy ngày và giờ hiện tại
  const now = new Date();

  // Kiểm tra trạng thái của chương trình
  if (now < startDate) {
    // Chương trình chưa bắt đầu
    const timeUntilStart = startDate - now;
    const hoursUntilStart = Math.floor(timeUntilStart / (1000 * 60 * 60));
    const minutesUntilStart = Math.floor((timeUntilStart % (1000 * 60 * 60)) / (1000 * 60));
    const secondsUntilStart = Math.floor((timeUntilStart % (1000 * 60)) / 1000);
    countdownTextElement.textContent = `Chương trình sắp bắt đầu: ${hoursUntilStart} giờ ${minutesUntilStart} phút ${secondsUntilStart} giây`;

  } else if (now >= startDate && now <= endDate) {
    // Chương trình đang diễn ra
    updateCountdown(); // Bắt đầu tính đồng hồ đếm ngược
  } else {
    // Chương trình đã kết thúc
    countdownTextElement.textContent = 'Chương trình đã kết thúc';
  }

  // Hàm cập nhật đồng hồ đếm ngược
  function updateCountdown() {
    // Lấy ngày và giờ hiện tại sau mỗi giây
    const now = new Date();

    // Tính thời gian còn lại đến khi chương trình kết thúc
    const timeLeft = endDate - now;

    // Đổi thành đơn vị giờ, phút, giây
    const hoursLeft = Math.floor(timeLeft / (1000 * 60 * 60));
    const minutesLeft = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000);

    // Hiển thị đồng hồ đếm ngược
    countdownElement.textContent = `${hoursLeft} giờ ${minutesLeft} phút ${secondsLeft} giây`;

    // Cập nhật đồng hồ sau mỗi giây
    if (timeLeft > 0) {
      setTimeout(updateCountdown, 1000);
    } else {
      countdownTextElement.textContent = 'Chương trình đã kết thúc';
    }
  }
</script>

<!-- Swiper JS -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/swiper-bundle.min.js"></script>
<!-- JavaScript của menu -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/style_product.js?ver=<?php echo rand(); ?>"></script>
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/script.js?ver=<?php echo rand(); ?>"></script>
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/jquery.menu-aim.js"></script> <!-- menu aim -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/main.js"></script> <!-- Resource jQuery -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/sidebar_mobile.js?ver=<?php echo rand(); ?>"></script>

</html>