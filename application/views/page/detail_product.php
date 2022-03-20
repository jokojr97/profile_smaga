
  <main id="main">
    
    <?php $this->load->view('page/_partial/breadcumb'); ?>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="row">
                <img src="<?= base_url() ?>assets/home/img/product/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="img-fluid" style="margin-top:-100px;">
              </div>

              <h2 class="entry-title">
                <?= limit_words($product['name'], 25);  ?>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $product['date_created'] ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">0 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <?= $product['description'] ?>

              </div>

              <div class="entry-footer">
                <!-- <i class="bi bi-folder"></i> -->

                <!-- <i class="bi bi-tags"></i>
                <ul class="tags">
                  <?php
                  $keyword = $product['keywords'];
                  $key = explode(',', $keyword);
                  foreach($key as $result) { 
                  $result = trim($result);
                  $slugs = make_slug($result);
                  ?>
                  <li><a href="<?= base_url() ?>tag/<?= $slugs ?>">#<?= $result ?></a></li>
                  <?php } ?>
                </ul> -->
              </div>

            </article><!-- End blog entry -->
            

          </div><!-- End blog entries list -->

          <?php $this->load->view('page/_partial/sidebar'); ?>

        </div>

      </div>
    </section><!-- End Blog Single Section -->
</main>