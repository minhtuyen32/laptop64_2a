<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="css/jquery.gScrollingCarousel.css" rel="stylesheet" />
  <title> G Scrolling Carousel</title>
    <style>
 
        .g-scrolling-carousel .items{
            padding: 5px 0;
			
        }
        .g-scrolling-carousel .items img{
            display: inline-block; /* notice the comments between inline-block items */
			
            margin-right: 10px;
            width: 170px;
            height: 150px;
			line-height: 150px;
            box-shadow: 0 0 5px #000;
            text-align: center;
        }
		h1{ 
		text-align:center; 
		margin-top: 30px;
		padding: 20px;
		color: #515151;
		}
        .g-scrolling-carousel {
            position: relative;
        }
        .g-scrolling-carousel .items {
            overflow-x: scroll;
            white-space: nowrap;
            width: 100%;
            -webkit-overflow-scrolling: touch;
        }
        .g-scrolling-carousel .items::-webkit-scrollbar { 
            display: none; 
        }
        .jc-right,
        .jc-left {
            width: 36px;
            height: 36px;
            color:#757575;
            margin-bottom: auto;
            margin-top:auto;
            box-shadow: 0 0 0 1px rgba(0,0,0,0.04), 0 4px 8px 0 rgba(0,0,0,0.20);
            background: #fff;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 0;
            bottom: 0;
            z-index:2;
            opacity: 0.94;

        }
        .jc-right {
            right:-18px;
        }
        .jc-left {
            left:-18px;
        }

        .jc-right:hover,
        .jc-left:hover{
            opacity: 0.98;
        }
        .jc-right svg,
        .jc-left svg{
            position: absolute;
            left: 0;right: 0;bottom: 0;top: 0;
            margin: auto;
            width: 24px;
            height: 24px;
            fill: #757575;
        }
        .jc-right:hover svg,
        .jc-left:hover svg{
           fill: #000;
        }
        @media (pointer: coarse) {
          .jc-right,
          .jc-left {
            display: none !important;
          }
        }
        .noselect {
          -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
             -khtml-user-select: none; /* Konqueror HTML */
               -moz-user-select: none; /* Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                    user-select: none;
        }

    </style>
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
<body>

<main>
<h1> G Scrolling Carousel Example</h1>
<div class="g-scrolling-carousel">
  <div class="items">
        <img src="https://source.unsplash.com/600x300/?prayer">
		<img src="https://source.unsplash.com/600x300/?walking">
		<img src="https://source.unsplash.com/600x300/?rose">
		<img src="https://source.unsplash.com/600x300/?man">
		<img src="https://source.unsplash.com/600x300/?cat">
        <img src="https://source.unsplash.com/600x300/?flower">
		<img src="https://source.unsplash.com/600x300/?student">
		<img src="https://source.unsplash.com/600x300/?way">
		<img src="https://source.unsplash.com/600x300/?river">
		<img src="https://source.unsplash.com/600x300/?crow">
 </div>
</div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> 
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/jquery.gScrollingCarousel.js"></script> 
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/swiper-bundle.min.js"></script>
<!-- JavaScript của menu -->
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/style_product.js?ver=<?php echo rand(); ?>"></script>
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/script.js?ver=<?php echo rand(); ?>"></script>
<script src="<?php echo _WEB_HOST_TEMPLATES ?>/js/jquery-2.1.1.js"></script>
<script>
  $(document).ready(function(){
    $(".g-scrolling-carousel .items").gScrollingCarousel();
  });
</script>
</body>
</html>
