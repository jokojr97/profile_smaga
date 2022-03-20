    <?php
    function limit_words($string, $word_limit)
    {
      $words = explode(" ", $string);
      $words = str_replace('<p>', '', $words);
      $words = str_replace('</p>', '', $words);
      $words = implode(" ", array_splice($words, 0, $word_limit));
      return $words;
    }
    function limit_words2($string, $word_limit)
    {
      $words = explode(" ", $string);
      $words = str_replace('</p>', '', $words);
      $words = str_replace('<p>', '', $words);
      $words = implode(" ", array_splice($words, 6, $word_limit));
      return $words;
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

    if (!$title) {
      $title = "SMAN 3 Bojonegoro (PRCI)";
    }
    if (!$url) {
      $url = base_url();
    }
    $str = explode(" ", $key);
    $data = "";
    $no = 0;
    foreach ($str as $result) {
      //   $result = str_replace(",", "", $result);
      $result = str_replace("-", "", $result);
      $result = str_replace("<em>", "", $result);
      $result = str_replace("</em>", "", $result);
      $result = str_replace("*", "", $result);
      $result = trim($result);
      // $result = str_replace(" ", "", $result);
      if ($result !== "" || $result !== "," || $result !== " ") {
        if ($no == 0) {
          $data = $result;
        } else {
          $data = $data . ", " . $result;
        }
      }
      $no++;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="<?= $des ?>" />
      <meta name="author" content="PRCI" />
      <meta name="keywords" content="SMAN 3 Bojonegoro, prc, <?= $key ?>, <?= $data ?>" />
      <link rel="shortcut icon" sizes="196x196" href="<?= base_url(); ?>assets/images/logoo.PNG">
      <!--<link rel="shortcut icon" sizes="196x196" href="<?= base_url(); ?>assets/iconhead.png">-->

      <!-- update meta -->

      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <!--<meta http-equiv="Cache-Control" content="public" />-->
      <!--<meta http-equiv="Pragma" content="no-cache" />-->
      <meta property="og:title" content="<?= $title ?>SMAN 3 Bojonegoro (PRCI)" />
      <meta property="og:type" content="article" />

      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta property="og:url" content="<?= $url ?>" />
      <meta property="og:site_name" content="PT-Josan-Multipangan.org" />
      <meta property="og:description" content="<?= $key ?>" />
      <meta property="og:image" content="<?= base_url() ?>assets/images/<?= $metaimg ?>" />
      <meta name="twitter:description" content="<?= $key ?>">
      <meta name="twitter:domain" content="PT-Josan-Multipangan.org">

      <!-- // update meta -->

      <title><?= $title ?>SMAN 3 Bojonegoro (PRCI)</title>

      <!-- Favicons -->
      <link href="<?= base_url() ?>assets/images/<?= $metaimg ?>" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> -->

      <link href="<?= base_url() ?>assets/home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

      <!-- Bootstrap CSS File -->
      <link href="<?= base_url() ?>assets/home/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Libraries CSS Files -->
      <link href="<?= base_url() ?>assets/home/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?= base_url() ?>assets/home/lib/animate/animate.min.css" rel="stylesheet">
      <link href="<?= base_url() ?>assets/home/lib/venobox/venobox.css" rel="stylesheet">
      <link href="<?= base_url() ?>assets/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

      <!-- Main Stylesheet File -->
      <link href="<?= base_url() ?>assets/home/css/style.css" rel="stylesheet">

      <!-- Owl Stylesheets -->

      <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/assets/css/docs.theme.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/assets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/assets/owlcarousel/assets/owl.theme.default.min.css">

      <!-- datatable -->

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <!-- //datatable -->

      <!-- Google Adsense -->

      <script data-ad-client="ca-pub-2876332236772544" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187795573-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-187795573-1');
        //   gtag('config', 'G-XXXXXXXXXX');
      </script>
      <!-- // Google Adsense -->



      <style type="text/css">
        .tipe-post {
          background-color: #ff4a1a;
          color: white;
          padding: 2px 6px;
          font-size: 10px;
          top: 5px;
          left: 10px;
          position: absolute;
          z-index: 2;
        }

        .tipe-post-berita {
          background-color: #ff4a1a;
          font-size: 14px;
          color: white;
          padding: 2px 0px;
          top: 21px;
          left: 17px;
          position: absolute;
          z-index: 2;
        }

        .berita-box {
          height: 480px;
          margin-top: 10px;
          padding: 10px;
          box-shadow: -5px 10px #f2f2f0;
          border: 1px solid lightgray;
        }

        @media only screen and (max-width: 600px) {
          .berita-box {
            height: 500px;
            margin-top: 10px;
            padding: 10px;
            box-shadow: -5px 10px #f2f2f0;
            border: 1px solid lightgray;
          }
        }

        .berita-box:hover {
          width: 103%;
          box-shadow: -5px 10px #e0e0e0;
        }

        .zoomss:hover {
          width: 103%;
        }

        .shadows {
          box-shadow: -5px 10px #f2f2f0;
        }

        .kategori-badge {
          margin-top: -5px;
          border-radius: 0;
          padding: 0 10px;
          margin-bottom: 10px;
          color: white;
        }

        .zooms:hover {
          overflow: hidden;
          -ms-transform: scale(0.9);
          /* IE 9 */
          -webkit-transform: scale(0.9);
          /* Safari 3-8 */
          transform: scale(0.9);
          opacity: 0.3;
          transition: transform .5s ease;
          background: blue;
        }

        .carousel-item {
          max-height: 670px;
        }

        .bg-image {
          /* Full height */
          height: 50%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .img1 {
          background-image: url("<?= base_url() ?>assets/home/img/slider-pertanian.jpg");
        }

        /* Position text in the middle of the page/image */
        .bg-text {
          background-color: rgb(0, 0, 0);
          /* Fallback color */
          background-color: rgba(0, 0, 0, 0.4);
          /* Black w/opacity/see-through */
          color: white;
          font-weight: bold;
          font-size: 80px;
          border: 10px solid #f1f1f1;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 2;
          width: 300px;
          padding: 20px;
          text-align: center;
        }

        @media (min-width: 768px) {
          .postdetail blockquote {
            padding: 25px 25px 25px 30px
          }
        }

        .postdetail blockquote {
          background: rgba(130, 139, 178, 0.1);
          padding: 15px;
          line-height: 1.733;
          color: #696969;
          font-style: italic;
          margin-top: 25px;
          margin-bottom: 25px;
          margin-left: 35px;
        }

        .desc img {
          width: 100%;
          height: auto;
        }

        .postdetail blockquote {
          background: #fff;
          padding: 15px 15px 15px 20px;
          border-left: 2px solid
        }

        .hr-judul {
          color: red;
          width: 30%;
          border: 2px solid red;
          margin-top: 1rem;
          margin-bottom: 10px;
          box-sizing: content-box;
          height: 0;
          overflow: visible;
          display: block;
          unicode-bidi: isolate;
          margin-block-start: 0.5em;
          margin-block-end: 0.5em;
          margin-inline-start: auto;
          margin-inline-end: auto;
        }

        .judul {
          font-size: 24px;
          text-transform: uppercase;
          text-align: center;
          margin-bottom: 0px;
        }
      </style>

      <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    </head>

    <body>
      <amp-auto-ads type="adsense" data-ad-client="ca-pub-2876332236772544">
      </amp-auto-ads>

      <!--==========================
    Header
  ============================-->
      <header id="header" class="header-fixed">
        <div class="container">

          <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="<?= base_url() ?>assets/home/#main">C<span>o</span>nf</a></h1>-->
            <a href="<?= base_url() ?>" class="scrollto"><img src="<?= base_url() ?>assets/home/img/logooo.png" alt="" title=""></a>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li<?php if ($menu == "home") {
                    echo " class=\"menu-active\"";
                  } ?>><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
                <!-- <li<?php if ($menu == "data") {
                          echo " class=\"menu-active\"";
                        } ?>><a href="<?= base_url() ?>home/datajatim/2019/1/1"><i class="fa fa-chart-bar"></i> Data</a></li> -->
                <li<?php if ($menu == "opini") {
                      echo " class=\"menu-active\"";
                    } ?>><a href="<?= base_url() ?>posttipe/opini"><i class="fas fa-comment-dots"></i> Opini </a></li>
                  <li<?php if ($menu == "berita") {
                        echo " class=\"menu-active\"";
                      } ?>><a href="<?= base_url() ?>berita"><i class="fa fa-newspaper"></i> Berita</a></li>
                    <li<?php if ($menu == "podcast") {
                          echo " class=\"menu-active\"";
                        } ?>><a href="<?= base_url() ?>podcast"><i class="fas fa-microphone-alt"></i> Podcast</a></li>
                      <li<?php if ($menu == "donasi") {
                            echo " class=\"menu-active\"";
                          } ?>><a href="<?= base_url() ?>donasi"><i class="far fa-handshake"></i> Donasi</a></li>
                        <li<?php if ($menu == "tentangkami") {
                              echo " class=\"menu-active\"";
                            } ?>><a href="<?= base_url() ?>tentangkami"><i class="fa fa-info-circle"></i> Tentang</a></li>
                          <!--<li<?php if ($menu == "ogp") {
                                    echo " class=\"menu-active\"";
                                  } ?>><a href="https://opengovbjn.PT-Josan-Multipangan.org/"><i class="fa fa-users"></i> OGP</a></li>-->
                          <!-- <li<?php if ($menu == "hubungiKami") {
                                    echo " class=\"menu-active\"";
                                  } ?>><a href="<?= base_url() ?>hubungikami"><i class="fa fa-phone"></i> Hubungi Kami</a></li> -->
                          <li class="buy-tickets"><a href="<?= base_url() ?>auth"><i class="fa fa-user"></i> Login</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->

        </div>
      </header><!-- #header -->