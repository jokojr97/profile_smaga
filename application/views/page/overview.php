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
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
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
        <div class="col-lg-4 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
          <img src="<?= base_url() ?>assets/home/img/perpupstakaan.jpg" alt="" class="img-fluid">
          <h4 class="title mt-3"><a href="">Perpustakaan</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
            occaecati cupiditate non provident</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
          <img src="<?= base_url() ?>assets/home/img/kantin.jpg" alt="" class="img-fluid">
          <h4 class="title mt-3"><a href="">Kantin</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
            occaecati cupiditate non provident</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
          <img src="<?= base_url() ?>assets/home/img/mushola.jpg" alt="" class="img-fluid">
          <h4 class="title mt-3"><a href="">Mushola</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
            occaecati cupiditate non provident</p>
        </div>
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
            <span data-purecounter-start="0" data-purecounter-end="732" data-purecounter-duration="1" class="purecounter"></span>
            <p>Peserta Didik</p>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="count-box">
            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="14630" data-purecounter-duration="1" class="purecounter"></span>
            <p>Alumni</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="62" data-purecounter-duration="1" class="purecounter"></span>
            <p>Guru</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="count-box">
            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
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

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portofolio1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>App</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portofolio1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portofolio2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Web</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portofolio2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portofolio3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>App</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portofolio3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portofolio4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Card</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portofolio4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portofolio5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Web</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portofolio5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>App</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Card</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Card</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SMA N 3 Bojonegoro</h4>
              <!-- <p>Web</p> -->
              <div class="portfolio-links">
                <a href="<?= base_url() ?>assets/home/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SMA N 3 Bojonegoro"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Our Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
  <!-- <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pegawai</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
      </div>

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
          <div class="member">
            <div class="pic"><img src="<?= base_url() ?>assets/home/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="<?= base_url() ?>assets/home/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="<?= base_url() ?>assets/home/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="<?= base_url() ?>assets/home/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <a href="#" class="btn btn-block btn-info text-white" data-aos="fade-up"> Selengkapnya>></a>
      </div>

    </div>
  </section> -->
  <!-- End Our Team Section -->



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

  <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
              Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
              ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
              ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
              integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
              Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
              ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
              ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel
              risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida
              quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc
              vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in
              metus vulputate eu scelerisque.
            </p>
          </div>

        </div>

      </div>
    </section> -->
  <!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->