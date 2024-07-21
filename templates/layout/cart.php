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
  <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES ?>/css/cart.css?ver=<?php echo rand(); ?>">
  <!-- Style css product -->
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-nav sticky-top">
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
              <input class="form-control form-control-search rounded-start word" type="search" placeholder="" aria-label="Search">
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
  <div style="background-color: #ffffff;" class="nav-container d-lg-block d-none" >
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


  <section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Iphone 11 pro</h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Samsung galaxy Note 10 </h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Canon EOS M50</h5>
                          <p class="small mb-0">Onyx Black</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$1199</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3 mb-lg-0">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>MacBook Pro</h5>
                          <p class="small mb-0">1TB, Graphite</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$1799</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$4798.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$20.00</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">$4818.00</p>
                    </div>

                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>$4818.00</span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>









  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  







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
 




</body>



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
<!-- JavaScript của menu -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/script.js?ver=<?php echo rand(); ?>"></script>

<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/sidebar_mobile.js?ver=<?php echo rand(); ?>"></script>

</html>