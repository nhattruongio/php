<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Phan_Nhat_Truong</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css"> 
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

</head>

<body>
    <?php
    require_once("./entities/product.class.php");
    require_once("./entities/category.class.php");
?>
    <?php 
    include_once("header.php");
    if(!isset($_GET["cateid"])){
        $prods = Product::list_product();
    }else{
        $cateid = $_GET["cateid"];
        $prods = Product::list_product_by_cateid($cateid);
    }
    $cates = Category::list_category();
?>
    <header class="header_area">
          <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light main_box">
                  <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                          <ul class="nav navbar-nav menu_nav ml-auto">
                              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                              <li class="nav-item submenu dropdown">
                                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                  <ul class="dropdown-menu">
                                      <li class="nav-item"><a class="nav-link" href="list_product.php">Xem tất cả sản phẩm</a>
                                      <li class="nav-item"><a class="nav-link" href="add_product.php">Thêm sản phẩm</a>
                                      <li class="nav-item"><a class="nav-link" href="register.php">Đăng ký</a>

                                  </ul>
                              </li> 
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                              <li class="nav-item"><a href="#" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
                              <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                          </ul>
                      </div> 
                  </div>
              </nav>
          </div>
      </header>