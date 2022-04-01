<main id="main">

    <?php $this->load->view('page/_partial/breadcumb'); ?>

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

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



</main>