<main id="main">

  <?php $this->load->view('page/_partial/breadcumb'); ?>

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="<?= base_url() ?>assets/images/<?= $berita['featured_image'] ?>" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <?= limit_words($berita['judul'], 25);  ?>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $berita['date_created'] ?></time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">0 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <?= $berita['deskripsi'] ?>

            </div>

            <div class="entry-footer">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#"><?= $berita['post_type_name'] ?></a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                <?php
                $keyword = $berita['keywords'];
                $key = explode(',', $keyword);
                foreach ($key as $result) {
                  $result = trim($result);
                  $slugs = make_slug($result);
                ?>
                  <li><a href="<?= base_url() ?>tag/<?= $slugs ?>">#<?= $result ?></a></li>
                <?php } ?>
              </ul>
            </div>

          </article><!-- End blog entry -->

          <?php // $this->load->view('page/_partial/comment'); 
          ?>

        </div><!-- End blog entries list -->

        <?php $this->load->view('page/_partial/sidebar'); ?>

      </div>

    </div>
  </section><!-- End Blog Single Section -->
</main>