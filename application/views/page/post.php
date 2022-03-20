
  <main id="main">
    
    <?php $this->load->view('page/_partial/breadcumb'); ?>

    
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            
            <?php foreach($data->result() as $row) { ?>
              <article class="entry">
  
                <div class="entry-img">
                  <img src="<?= base_url() ?>assets/images/<?= $row->featured_image ?>" class="img-fluid" alt="<?= $row->judul ?>">
                </div>
  
                <h2 class="entry-title">
                  <a href="<?= base_url() ?><?= $row->posttype_slug ?>/<?= $row->slug ?>" style="color:black"><?= limit_words($row->judul, 5); ?></a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                <?=  limit_words($row->deskripsi, 40); ?> 
                  <div class="read-more">
                    <a href="<?= base_url() ?><?= $row->posttype_slug ?>/<?= $row->slug ?>">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            <?php } ?>

            <div class="blog-pagination">
            <?php echo $pagination; ?>
            </div>

          </div><!-- End blog entries list -->
          
          <?php $this->load->view('page/_partial/sidebar'); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->
</main>