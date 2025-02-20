<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= isset($page_title) ? $page_title . ' | ' : ''; ?><?= get_setting_general('name'); ?></title>

    <!-- Meta -->
    <meta name="description" content="<?= get_setting_general('meta_description'); ?>">
    <meta name="keywords" content="<?= get_setting_general('meta_keywords'); ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:locale" content="zh_TW">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= isset($page_title) ? $page_title . ' - ' : ''; ?><?= get_setting_general('name'); ?>">
    <meta property="og:url" content="<?= base_url(); ?>">
    <meta property="og:site_name" content="<?= get_setting_general('name'); ?>">
    <meta property="og:image" content="<?= base_url('assets/uploads/' . get_setting_general('logo')); ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($page_title) ? $page_title . ' - ' : ''; ?><?= get_setting_general('name'); ?>">
    <meta name="twitter:image" content="<?= base_url('assets/uploads/' . get_setting_general('logo')); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico'); ?>">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/turquoise.css?v=1.0">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/styleSwitcher.js'); ?>"></script>

    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/custom.js'); ?>"></script>

    <!-- owl.carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <script src="/assets/js/owl.carousel.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>




<header role="banner" id="fh5co-header">
  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url('assets/images/logo.png'); ?>" width="155" height="47" alt="Thermalution">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



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
