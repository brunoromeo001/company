<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/res/assets/img/favicon.png" rel="icon">
  <link href="/res/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/res/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/res/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/res/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/res/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/res/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/res/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/res/assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- <link href="/res/assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <link href="/res/assets/vendor/remixicon-2.5/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/res/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.0.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <?php if( $pageName == '' ){ ?>
          <li class="active"><a href="/">Home</a></li>
        <?php }else{ ?>
          <li><a href="/">Home</a></li>
        <?php } ?>
        
        <?php if( substr_count($pageName, 'sobre') ){ ?>
          <li class="drop-down active"><a href="">About</a>
            <ul>
              <li class="active"><a href="/sobre">About Us</a></li>
              <li><a href="/equipe">Team</a></li>
              <li><a href="/testemunhas">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <?php }elseif( substr_count($pageName, 'equipe') ){ ?>
          <li class="drop-down active"><a href="">About</a>
            <ul>
              <li><a href="/sobre">About Us</a></li>
              <li class="active"><a href="/equipe">Team</a></li>
              <li><a href="/testemunhas">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <?php }elseif( substr_count($pageName, 'testemunhas') ){ ?>
          <li class="drop-down active"><a href="">About</a>
            <ul>
              <li><a href="/sobre">About Us</a></li>
              <li><a href="/equipe">Team</a></li>
              <li class="active"><a href="/testemunhas">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <?php }else{ ?>
          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="/sobre">About Us</a></li>
              <li><a href="/equipe">Team</a></li>
              <li><a href="/testemunhas">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <?php } ?>
          <?php if( $pageName == 'servicos' ){ ?>
          <li class="active"><a href="/servicos">Services</a></li>
          <?php }else{ ?>
          <li><a href="/servicos">Services</a></li>
          <?php } ?>
          <?php if( $pageName == 'portifolio' ){ ?>
          <li class="active"><a href="/portifolio">Portfolio</a></li>
          <?php }else{ ?>
          <li><a href="/portifolio">Portfolio</a></li>
          <?php } ?>
          <?php if( $pageName == 'precos' ){ ?>
          <li class="active"><a href="/precos">Pricing</a></li>
          <?php }else{ ?>
          <li><a href="/precos">Pricing</a></li>
          <?php } ?>
          <?php if( $pageName == 'blog' ){ ?>
          <li class="active"><a href="/blog">Blog</a></li>
          <?php }else{ ?>
          <li><a href="/blog">Blog</a></li>
          <?php } ?>
          <?php if( $pageName == 'contato' ){ ?>
          <li class="active"><a href="/contato">Contact</a></li>
          <?php }else{ ?>
          <li><a href="/contato">Contact</a></li>
          <?php } ?>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->