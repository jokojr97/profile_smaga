
  <main id="main">
    
    <?php $this->load->view('page/_partial/breadcumb'); ?>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">            
                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio">
                    <div class="container">
                       
                    <div class="row" data-aos="fade-up" data-aos-delay="100" style="margin-top:-50px;">
                        <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-makanan">Makanan</li>
                            <li data-filter=".filter-minuman">Minuman</li>
                            <li data-filter=".filter-rempah">Rempah</li>
                        </ul>
                        </div>
                    </div>
            
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php foreach($products->result() as $row) { 
                        if($row->category === "foods") {
                            $kategori = "filter-makanan";
                        }else if ($row->category === "drinks") {
                            $kategori = "filter-minuman";
                        }else {
                            $kategori = "filter-rempah";
                        }
                        ?>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item <?= $kategori ?>">
                        <img src="<?= base_url() ?>assets/home/img/product/<?= $row->image ?>" class="img-fluid" alt="<?= $row->name ?>">
                        <div class="portfolio-info">
                            <h4><?= $row->name ?></h4>
                            <p style="padding-right:50px;"><?= limit_words($row->description, 10); ?></p>
                            <a href="<?= base_url() ?>assets/home/img/product/<?= $row->image ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $row->name ?>"><i class="bx bx-plus"></i></a>
                            <a href="<?= base_url() ?>product/<?= $row->slug ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                        </div>

                        <?php } ?>

                        
            
                    </div>
            
                    </div>
                </section><!-- End Portfolio Section -->
            </div><!-- End blog entries list -->
            </div>

        </div>
        </section><!-- End Blog Single Section -->
</main>