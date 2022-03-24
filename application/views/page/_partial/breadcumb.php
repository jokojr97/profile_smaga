<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li><a href="<?= base_url() ?>berita"><?= isset($berita) ? "Post" : $breadcumb ?></a></li>
    </ol>
    <h2><?= isset($berita) ? limit_words($berita['judul'], 5) : $title ?></h2>
  </div>
</section><!-- End Breadcrumbs -->