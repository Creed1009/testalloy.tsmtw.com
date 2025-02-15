<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_setting_general('meta_description'); ?>" />
    <meta name="keywords" content="<?php echo get_setting_general('meta_keywords'); ?>" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' : ''; ?><?php echo get_setting_general('name'); ?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:site_name" content="<?php echo get_setting_general('name'); ?>" />
    <meta property="og:image" content="<?php echo base_url(); ?>assets/uploads/<?php echo get_setting_general('logo'); ?>" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - ' : ''; ?><?php echo get_setting_general('name'); ?>" />
    <meta name="twitter:image" content="<?php echo base_url(); ?>assets/uploads/<?php echo get_setting_general('logo'); ?>" />

    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?><?php echo get_setting_general('name'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

  </head>
<body>
    <!-- <style>
      body{
        /* 先套用 Noto Sans TC 這個 思源黑體 */
        font-family: '微軟正黑體', sans-serif;
      }
      .navbar-logo-header img {
        width: 50px;
        height: 50px;
      }
    </style> -->

<header role="banner" id="fh5co-header">
  <div class="container">

    <!-- <div class="row"> -->
    <nav class="navbar navbar-default">
      <div class="navbar-header">
      <!-- Mobile Toggle Menu Button -->
      <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="155" height="47" alt="Thermalution"></a></div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
          <li><a href="#" data-nav-section="about"><span>About</span></a></li>
          <li><a href="#" data-nav-section="press"><span>Product</span></a></li>
          <li><a href="#" data-nav-section="services"><span>Contact</span></a></li>
          <li><a href="#" data-nav-section="features"><span>News</span></a></li>
          <li><a href="#" data-nav-section="testimonials"><span>Feedback</span></a></li>
          <li><a href="#"><span>Login</span></a></li>
        </ul>
      </div>
    </nav>

  </div>
</header>




<!-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-logo-header" href="/">
        <img src="/assets/images/tacc_header.png" alt="home">
      </a>
      <div class="collapse navbar-collapse" id="navbarExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link about" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link contact" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link products" href="/products">products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">portfolio</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">個性住宅1</a></li>
              <li><a class="dropdown-item" href="#">商業空間2</a></li>
              <li><a class="dropdown-item" href="#">建築改造3</a></li>
              <li><a class="dropdown-item" href="#">細部展演4</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link posts" href="/posts">News</a>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
 -->
