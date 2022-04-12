<main id="main">

    <?php $this->load->view('page/_partial/breadcumb'); ?>

    <section class="blog">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-8 entries">
                    <img src="<?= base_url() ?>assets/home/img/brosurppdb.jpg" alt="brosur ppdb sman 3 bojonegoro" class="img-fluid">
                    <br>
                    <br>
                    <?php foreach ($ppdb->result() as $row) { ?>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="<?= base_url() ?>post/<?= $row->slug ?>">
                                    <img src="<?= base_url() ?>assets/images/<?= $row->featured_image ?>" alt="" class="img-fluid mb-3">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-danger mb-1"><b>PPDB SMAN 3 Bojonegoro</b></h6>
                                <a href="<?= base_url() ?>post/<?= $row->slug ?>">
                                    <h6><b><?= limit_words($row->judul, 20) ?></b></h6>
                                </a>
                                <p><?= limit_words($row->deskripsi, 30) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php $this->load->view('page/_partial/sidebar'); ?>
            </div>
        </div>
    </section>
</main>