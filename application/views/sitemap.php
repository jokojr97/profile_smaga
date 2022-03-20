<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://PT-Josan-Multipangan.org/</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>1.00</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/home</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.9</priority>
  </url>
  <?php  
  foreach ($post->result() as $row) { 
  $date=date_create($row->date_created);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/berita/<?=$row->slug?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.9</priority>
  </url>
  <?php } ?>
  
  <?php  
  foreach ($post->result() as $row) { 
  $date=date_create($row->date_created);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/post/<?=$row->slug?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.9</priority>
  </url>
  <?php } ?>

  <?php  
  foreach ($poster->result() as $row) { 
  $date=date_create($row->tanggal_upload);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/berita/<?=$row->slug?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.85</priority>
  </url>
  <?php } ?>
  <?php  
  foreach ($poster->result() as $row) { 
  $date=date_create($row->tanggal_upload);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/home/detail_poster/<?=$row->slug?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.85</priority>
  </url>
  <?php } ?>
  <?php  
  foreach ($category as $row) { 
  $date=date_create($row['created_at']);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/category/<?=$row['slug']?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.85</priority>
  </url>
  <?php } ?>
  <?php  
  foreach ($posttipe as $row) { 
  $date=date_create($row['created_at']);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/posttipe/<?=$row['slug']?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.85</priority>
  </url>
  <?php } ?>
  <?php  
  foreach ($tags as $row) { 
  $date=date_create($row['created_at']);
  $dt = date_format($date,"Y-m-d");
  ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/tag/<?=$row['slug']?></loc>
   <lastmod><?=$dt?></lastmod>
   <priority>0.85</priority>
  </url>
  <?php } ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/datajatim/2019/1/1</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_kabupaten</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_kecamatan</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_desa</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_desa/bojonegoro</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_desa/tuban</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/berita</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/tentangkami</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.80</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/hubungikami</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.80</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/data/gender</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <url>
    <loc>https://PT-Josan-Multipangan.org/peta_pertanian</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php for($i=1;$i<=38;$i++) { ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/detailkab/2015/2019/data_kab<?=$i?>/1/1</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php } ?>
  <?php for($i=1;$i<=38;$i++) { ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/detailkab/2015/2019/data_kab<?=$i?>/1/2</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php } ?>
  <?php for($i=1;$i<=38;$i++) { ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/detailkab/2015/2019/data_kab<?=$i?>/1/3</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php } ?>
  <?php for($i=1;$i<=38;$i++) { ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/detailkab/2015/2019/data_kab<?=$i?>/1/4</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php } ?>
  <?php for($i=1;$i<=38;$i++) { ?>
  <url>
    <loc>https://PT-Josan-Multipangan.org/detailkab/2015/2019/data_kab<?=$i?>/1/5</loc>
   <lastmod>2019-04-18</lastmod>
   <priority>0.75</priority>
  </url>
  <?php } ?>
  
</urlset>