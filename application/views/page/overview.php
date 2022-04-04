<!-- ======= Hero Section ======= -->
<section id="hero">
  <img src="<?= base_url() ?>assets/header3.jpg" alt="" class="img-fluid" style="width: 105%;">
</section><!-- End Hero -->

<main id="main">
  <section id="slider">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url() ?>assets/home/img/slide/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>assets/home/img/slide/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>assets/home/img/slide/slider3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="col-lg-6 video-box">
          <img src="<?= base_url() ?>assets/home/img/about.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=llL7Yr92ueg" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

          <div class="section-title">
            <h2>Visi dan Misi</h2>
            <p>Mewujudkan Insan yang Bertaqwa, Berakhlak Mulia, Berprestasi, Mandiri, dan Berdaya
              Saing Global serta Peduli Lingkungan</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Misi</a></h4>
            <ol class="description">
              <li>Menanamkan keimanan, dan ketaqwaan serta menerapkan tuntunan agama melalui kegiatan pembiasaan dalam
                kehidupan sehari hari.</li>
              <li class="mt-1"> Menciptakan insan yang unggul, dan terampil dalam prestasi akademik, olahraga, dan
                seni.</li>
              <li class="mt-1">...</li>
            </ol>
          </div>
          <a href="<?= base_url() ?>profiles" class="btn btn-primary btn-block"> Read Mode>></a>

        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->


  <!-- ======= Our Portfolio Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2>FASILITAS LENGKAP</h2>
        <p>Sekolah Menengah Atas (SMA) Negeri 3 Bojonegoro Memiliki Fasilitas lengkap mulai dari laboratorium, perpustakaan, dll.</p>
      </div>

      <div class="row">
        <?php foreach ($fasilitas->result() as $row) { ?>
          <div class="col-lg-4 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
            <img src="<?= base_url() ?>assets/home/img/<?= $row->image ?>" alt="" class="img-fluid">
            <h4 class="title mt-3"><a href=""><?= $row->name ?></a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident</p>
          </div>
        <?php } ?>
        <a href="<?= base_url() ?>profiles#services" class="btn btn-block btn-primary text-white bg-smaga" data-aos="fade-up"> Selengkapnya>></a>
      </div>

    </div>
  </section>


  <!-- ======= Counts Section ======= -->
  <section class="counts bg-smaga">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $site['students'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Peserta Didik</p>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="count-box">
            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $site['teachers'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Guru</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $site['employee'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Tenaga Pendidik</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="count-box">
            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?= $site['extra'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Ekstrakulikuler</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->


  <!-- ======= Our Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2>Galeri</h2>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <!-- <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app"></li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> -->
        </div>
      </div>

      <div class="row portfolio-container">

        <?php foreach ($photos->result() as $row) { ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url() ?>assets/home/img/portfolio/<?= $row->image ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $row->title ?></h4>
                <div class="portfolio-links">
                  <a href="<?= base_url() ?>assets/home/img/portfolio/<?= $row->image ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row->title ?>"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>

  </section><!-- End Our Portfolio Section -->


  <!-- ======= Counts Section ======= -->
  <section class="counts bg-smaga">
    <div class="container">

      <div class="row">

        <div class="col text-center" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>

            <div class="section-title">
              <h2 style="margin-bottom:0;padding-bottom:0"><a href="https://www.unair.ac.id/" target="_blank" style="margin-bottom:0;"><img src="https://www.unair.ac.id/assets/img/icon/ua-logo.png" alt=""></a></h2>
              <p>Link Universitas</p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->


  <!-- ======= Our Portfolio Section ======= -->
  <section id="services" class="blog section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2>Berita Terbaru</h2>
        <p>Update Informasi Terbaru seputar Sekolah Menengah Atas (SMA) Negeri 3 Bojonegoro.</p>
      </div>

      <div class="row">
        <?php
        foreach ($news->result() as $row) {
        ?>
          <div class="col-lg-4 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
            <article>
              <img src="<?= base_url() ?>assets/images/<?= $row->featured_image ?>" alt="" class="img-fluid">
              <h6 class="title mt-3"><b><a href="<?= base_url() ?>berita/<?= $row->slug ?>"><?= $row->judul ?></a></b></h5>
                <p class="blog-description"><?= limit_words($row->deskripsi, 20) ?></p>
            </article>
          </div>
        <?php
        }
        ?>
        <!-- <a href="#" class="btn btn-block btn-info text-white" data-aos="fade-up"> Selengkapnya>></a> -->
      </div>
    </div>
  </section>

</main><!-- End #main -->