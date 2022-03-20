<?php
$des = $deskripsi;
$key = $keyword;
if (!isset($title)) {
  $title = "SMAN 3 Bojonegoro";
} else {
  $title = $title . " - SMAN 3 Bojonegoro";
}
if (!$url) {
  $url = base_url();
}
$str = explode(" ", $key);
$data = "";
$no = 0;
foreach ($str as $result) {
  $result = str_replace(",", "", $result);
  if ($no == 0) {
    $data = $result;
  } else {
    $data = $data . ", " . $result;
  }
  $no++;
}
$metaimg = 'logoo.PNG';

function limit_words($string, $word_limit)
{
  $words = explode(" ", $string);
  $words = str_replace('</p>', '', $words);
  $words = str_replace('<p>', '', $words);
  return implode(" ", array_splice($words, 0, $word_limit));
}

function make_slug($string)
{
  $slug = strtolower($string);
  $slug = str_replace(" ", "-", $slug);
  $slug = str_replace(";", "", $slug);
  $slug = str_replace(",", "", $slug);
  $slug = str_replace("?", "", $slug);
  $slug = str_replace("!", "", $slug);
  $slug = str_replace(".", "", $slug);
  $slug = str_replace("'", "", $slug);
  $slug = str_replace('"', "", $slug);
  $slug = str_replace('&', "", $slug);
  return $slug;
}

if ($deskripsi == 1) {
  $des = limit_words($berita['judul'], 20);
  $des = str_replace("<p>", "", $des);
  $des = str_replace('<p style="text-align: left;">', "", $des);
  $des = str_replace("<strong>", "", $des);
  $des = str_replace("</strong>", "", $des);
  $des = str_replace("&ndash;", "-", $des);
  $des = str_replace("&nbsp;", " ", $des);
  $des = str_replace("</p>", "", $des);
  $des = str_replace("<em>", "", $des);
  $des = str_replace("*", "", $des);
  $des = str_replace("</em>", "", $des);
  $des = str_replace("<b>", "", $des);
  $des = str_replace("</b>", "", $des);
  $des = trim($des);
  $key = $berita['keywords'] . ", " . $des;
  $title = $berita['judul'] . " - ";
  $metaimg = $berita['featured_image'];
} else {
  $des = $deskripsi;
  $key = $keyword;
  $metaimg = 'logoo.PNG';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= $des ?>" />
  <meta name="author" content="JosanMultiPangan" />
  <meta name="keywords" content="<?= $key ?>, <?= $data ?>" />
  <link rel="shortcut icon" sizes="196x196" href="<?= base_url(); ?>assets/images/logoo.PNG">
  <!--<link rel="shortcut icon" sizes="196x196" href="<?= base_url(); ?>assets/iconhead.png">-->

  <!-- update meta -->

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--<meta http-equiv="Cache-Control" content="public" />-->
  <!--<meta http-equiv="Pragma" content="no-cache" />-->
  <meta property="og:title" content="<?= $title ?>SMAN 3 Bojonegoro" />
  <meta property="og:type" content="article" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta property="og:url" content="<?= $url ?>" />
  <meta property="og:site_name" content="prc-initiative.org" />
  <meta property="og:description" content="<?= $key ?>" />
  <meta property="og:image" content="<?= base_url() ?>assets/images/<?= $metaimg ?>" />
  <meta name="twitter:description" content="<?= $key ?>">
  <meta name="twitter:domain" content="prc-initiative.org">

  <title><?= $title ?></title>

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/home/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/home/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/home/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v4.6.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:Josanmultipangan@gmail.com">Josanmultipangan@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="https://wa.me/6281232062741">+62 812 3206 2741</a></span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">Mulai</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">

        <h1><img src="<?= base_url() ?>assets/home/img/logo_jmp.png" alt=""> &nbsp;<a href="<?= base_url() ?>" style="margin-top:10px;">PT. JOSAN
            MULTI PANGAN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?= base_url() ?>assets/home/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= $menu == 'home' ? 'active' : '' ?>" href="<?= base_url() ?>#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto <?= $menu == 'product' ? 'active' : '' ?>" href="<?= base_url() ?>product">Produk</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Makanan Kaleng</span></a>
              </li>
              <li><a href="#">Bumbu (Spices)</a></li>
              <li><a href="#">Minuman Powder</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li><a href="<?= base_url() ?>berita" class="nav-link scrollto <?= $menu == 'berita' ? 'active' : '' ?>">Berita</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>#team">Team</a></li>
          <li><a class="nav-link scrollto <?= $menu == 'contact' ? 'active' : '' ?>" href="<?= base_url() ?>contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->