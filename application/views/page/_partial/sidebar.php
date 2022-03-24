<div class="col-lg-4">

    <div class="sidebar">

        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">

            <!-- form -->
            <form action="<?= base_url() ?>searchproses" method="POST">
                <!-- form-row -->
                <div class="form-row">
                    <!-- div col -->
                    <div class="col-12">
                        <input type="text" name="keyword" placeholder="Search..." class="form-control">
                    </div>
                    <!-- //div col -->
                    <!-- div col -->
                    <div class="col-2">
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                    <!-- // div col -->
                </div>
                <!-- //form-row -->
            </form>

        </div><!-- End sidebar search formn-->

        <h3 class="sidebar-title">Categories</h3>
        <div class="sidebar-item categories">
            <ul>
                <?php foreach ($category_list as $row) { ?>
                    <li><a href="<?= base_url() ?>category/<?= $row['slug'] ?>"><?= $row['name'] ?> <span>(<?= $row['jml_post'] ?>)</span></a></li>
                <?php } ?>

            </ul>
        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Recent Posts</h3>
        <div class="sidebar-item recent-posts">

            <?php
            $n = 0;
            foreach ($berita_list->result() as $row) {
                $judul = $row->judul;
                if ($n < 6) {
                    $d = strtotime($row->date_created);
            ?>
                    <div class="post-item clearfix">
                        <img src="<?= base_url() ?>assets/images/<?= $row->featured_image ?>" alt="<?= $row->judul ?>" class="img-fluid">
                        <h4><a href="<?= base_url() ?><?= $row->posttype_slug ?>/<?= $row->slug ?>" style="color:black"><?= limit_words($row->judul, 5);  ?></a></h4>
                        <time datetime="<?= $row->date_created ?>"><?= date("D, j M Y", $d) ?></time>
                    </div>
            <?php
                }
                $n++;
            }
            ?>
        </div><!-- End sidebar recent posts-->

        <?php if (isset($berita['keywords'])) { ?>

            <h4 class="mt-3">Tags:</h4>
            <!-- div tag -->
            <div class="tag bg-gray p-2 border-rad">
                <!-- row -->
                <div class="form-row">
                    <!-- col -->
                    <div class="col">
                        <div class="sidebar-item tags">
                            <ul>
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
                        </div><!-- End sidebar tags-->
                    </div>
                    <!-- // col -->
                </div>
                <!-- // form row -->
            </div>
            <!-- // div tag -->
        <?php } ?>


    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->