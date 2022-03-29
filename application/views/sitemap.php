<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://sman3bjn.sch.id/</loc>
    <lastmod>2022-03-18</lastmod>
    <priority>1.00</priority>
  </url>
  <url>
    <loc>https://sman3bjn.sch.id/home</loc>
    <lastmod>2022-03-18</lastmod>
    <priority>0.9</priority>
  </url>
  <?php
  foreach ($post->result() as $row) {
    $date = date_create($row->date_created);
    $dt = date_format($date, "Y-m-d");
  ?>
    <url>
      <loc>https://sman3bjn.sch.id/berita/<?= $row->slug ?></loc>
      <lastmod><?= $dt ?></lastmod>
      <priority>0.9</priority>
    </url>
  <?php } ?>

  <?php
  foreach ($post->result() as $row) {
    $date = date_create($row->date_created);
    $dt = date_format($date, "Y-m-d");
  ?>
    <url>
      <loc>https://sman3bjn.sch.id/post/<?= $row->slug ?></loc>
      <lastmod><?= $dt ?></lastmod>
      <priority>0.9</priority>
    </url>
  <?php } ?>

  <?php
  foreach ($category as $row) {
    $date = date_create($row['created_at']);
    $dt = date_format($date, "Y-m-d");
  ?>
    <url>
      <loc>https://sman3bjn.sch.id/category/<?= $row['slug'] ?></loc>
      <lastmod><?= $dt ?></lastmod>
      <priority>0.85</priority>
    </url>
  <?php } ?>
  <?php
  foreach ($posttipe as $row) {
    $date = date_create($row['created_at']);
    $dt = date_format($date, "Y-m-d");
  ?>
    <url>
      <loc>https://sman3bjn.sch.id/posttipe/<?= $row['posttype_slug'] ?></loc>
      <lastmod><?= $dt ?></lastmod>
      <priority>0.85</priority>
    </url>
  <?php } ?>
  <?php
  foreach ($tags as $row) {
    $date = date_create($row['created_at']);
    $dt = date_format($date, "Y-m-d");
  ?>
    <url>
      <loc>https://sman3bjn.sch.id/tag/<?= $row['slug'] ?></loc>
      <lastmod><?= $dt ?></lastmod>
      <priority>0.85</priority>
    </url>
  <?php } ?>
  <url>
    <loc>https://sman3bjn.sch.id/berita</loc>
    <lastmod>2019-04-18</lastmod>
    <priority>0.75</priority>
  </url>
  <url>
    <loc>https://sman3bjn.sch.id/ppdb</loc>
    <lastmod>2019-04-18</lastmod>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>https://sman3bjn.sch.id/galeri/foto</loc>
    <lastmod>2019-04-18</lastmod>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>https://sman3bjn.sch.id/profiles</loc>
    <lastmod>2019-04-18</lastmod>
    <priority>0.80</priority>
  </url>

</urlset>