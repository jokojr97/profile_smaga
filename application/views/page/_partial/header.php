<?php
$des = $deskripsi;
$key = $keyword;
if (!isset($title)) {
  $title = "Website Resmi SMAN 3 Bojonegoro";
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
$metaimg = 'header3.jpg';

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
  $des = limit_words($berita['judul'], 30);
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
  $des = limit_words($des, 30);
  $key = $keyword;
  $key = limit_words($key, 30);
  $metaimg = 'header3.jpg';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= $des ?>" />
  <meta name="author" content="JosanMultiPangan" />
  <meta name="keywords" content="<?= $key ?>, <?= $data ?>" />
  <link rel="shortcut icon" sizes="196x196" href="<?= base_url(); ?>assets/images/header3.jpg">

  <!-- update meta -->

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="Cache-Control" content="public" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:type" content="article" />

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta property="og:url" content="<?= $url ?>" />
  <meta property="og:site_name" content="sman3bjn.sch.id" />
  <meta property="og:description" content="<?= $key ?>" />
  <meta property="og:image" content="<?= base_url() ?>assets/images/<?= $metaimg ?>" />
  <meta name="twitter:description" content="<?= $des ?>">
  <meta name="twitter:domain" content="sman3bjn.sch.id">

  <title><?= $title ?></title>

  <!-- datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"> -->
  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/home/img/icon.jpg" rel="icon">
  <link href="<?= base_url() ?>assets/home/img/icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2f9d74a4a9.js" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/home/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- leaflet -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


  <!-- end leaflet -->

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/home/css/style.css" rel="stylesheet">

  <style>
    @media screen and (max-width: 768px) {
      section {
        padding: 20px 0;
        overflow: hidden;
      }

    }

    .blog-description {
      line-height: 24px;
      font-size: 14px;
    }

    #map {
      height: 210px;
    }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center text-white" style="background-color: #017cc4;">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <span class="text-white">Website Resmi SMA Negeri 3 Bojonegoro</span>
      </div>
      <div class="social-links d-none d-md-block">
        <!-- <a href="#" class="text-white twitter"><i class="bi bi-twitter"></i></a> -->
        <a href="<?= $site['facebook'] ?>" class="text-white facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="<?= $site['instagram'] ?>" class="text-white instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="<?= $site['tiktok'] ?>" class="text-white tiktok" target="_blank"><i class="bi bi-tiktok"></i></i></a>
        <a href="<?= $site['youtube'] ?>" class="text-white youtube" target="_blank"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/home/img/logo.png" alt=""></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= $menu == 'home' ? 'active' : '' ?>" href="<?= base_url() ?>"><b>Home</b></a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">Profile</a></li> -->
          <li><a class="nav-link scrollto <?= $menu == 'berita' ? 'active' : '' ?>" href="<?= base_url() ?>berita"><b>Berita</b></a></li>
          <li class="dropdown"><a href="<?= base_url() ?>profiles" class="<?= $menu == 'profile' ? 'active' : '' ?>"><span><b>Tentang Kami</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>profiles">Profile</a></li>
              <li><a href="<?= base_url() ?>profiles#extra">Ekstrakulikuler</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Program Kerja</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Program Kerja 1</a></li>
                  <li><a href="#">Program Kerja 2</a></li>
                  <li><a href="#">Program Kerja 3</a></li>
                  <li><a href="#">Program Kerja 4</a></li>
                  <li><a href="#">Program Kerja 5</a></li>
                </ul>
              </li> -->
              <li><a href="<?= base_url() ?>profiles#about">Visi Misi</a></li>
              <li><a href="<?= base_url() ?>profiles#services">Fasilitas</a></li>
              <li><a href="<?= base_url() ?>profiles#prestasi">Prestasi</a></li>
              <!-- <li><a href="#">Pegawai</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto <?= $menu == 'galeri' ? 'active' : '' ?>" href="<?= base_url() ?>galeri/foto"><b>Galeri</b></a></li>
          <li><a class="nav-link scrollto" href="#team"><b>Info Kelulusan</b></a></li>
          <li><a class="nav-link scrollto <?= $menu == 'PPDB' ? 'active' : '' ?>" href="<?= base_url() ?>ppdb"><b>PPDB</b></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->