<main id="main">

    <?php $this->load->view('page/_partial/breadcumb'); ?>


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?= base_url() ?>assets/home/img/portfolio/portfolio-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>SMA Negeri 3 Bojonegoro</h3>
                        <ul>
                            <li><strong>NPSN</strong>: 20504479</li>
                            <li><strong>NSS</strong>: 301050501031</li>
                            <li><strong>Akreditasi</strong>: A</li>
                            <li><strong>Alamat</strong>: Jl.Monginsidi No.09 Bojonegoro</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Profile Singkat</h2>
                        <p>SMA Negeri 3 Bojonegoro merupakan sekolah unggulan dengan akreditasi A yang berlokasi di Jln. Monginsidi No. 09 Kabupaten Bojonegoro. SMA Negeri 3 juga telah mencetak banyak murid berprestasi dengan memenangkan banyak perlombaan dan kopetensi baik di bidang akademik maupun di bidang olah raga.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about bg-smaga text-white">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2 class="text-white">Visi dan Misi</h2>
                        <p class="text-white h6">Mewujudkan Insan yang Bertaqwa, Berakhlak Mulia, Berprestasi, Mandiri, dan Berdaya
                            Saing Global serta Peduli Lingkungan</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title">
                            <p>Misi</p>
                        </h4>
                        <ol class="description">
                            <li>Menanamkan keimanan, dan ketaqwaan serta menerapkan tuntunan agama melalui kegiatan pembiasaan dalam kehidupan sehari hari.</li>
                            <li>Menciptakan insan yang unggul, dan terampil dalam prestasi akademik, olahraga, dan seni.</li>
                            <li>Meningkatkan kecakapan hidup melalui kegiatan pembelajaran, dan pengembangan diri yang berwawasan gender.</li>
                            <li>Mengembangkan potensi, bakat minat serta menumbuhkan jiwa kewirausahaan peserta didik yang mandiri dan berdaya saing global</li>
                            <li>Mewujudkan lingkungan sekolah yang berkualitas dengan semangat peduli pelestarian fungsi lingkungan, mencegah pencemaran, dan kerusakan lingkungan.</li>
                        </ol>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title">
                            <p>Tujuan</p>
                        </h4>
                        <ol class="description">
                            <li>Tahun 2008 siswa memiliki kompetensi penguasaan konsep untuk seluruh mata pelajaran secara komprehensif dan benar sehingga mampu berkompetisi ditingkat nasional dan tahun 2012 mampu berkompetisi di tingkat internasional</li>
                            <li>Tahun 2008 siswa mampu menggunakan Bahasa Inggris sebagai alat komunikasi untuk mendapatkan pengetahuan yang lebih luas</li>
                            <li>Tahun 2008 siswa mampu membangun kebiasaan yang aktif untuk mencari informasi menggunakan teknologi informasi.</li>
                            <li>Tahun 2008 sekolah memiliki sarana dan prasarana penunjang PBM yang lengkap.</li>
                            <li>Tahun 2008 sekolah memiliki guru dan tenaga pendukung yang handal untuk mendukung seluruh manajemen sekolah.</li>
                            <li>Sekolah memiliki hubungan kemitraan yang baik dengan seluruh warga sekolah, <em>stake holders</em> dan instansi serta institusi pendukung pendidikan lainnya.</li>
                            <li>Siswa memiliki, mengaplikasikan dan meningkatkan nilai-nilai ketuhanan serta nilai-nilai kehidupan yang bersifat universal dalam kehidupannya.111</li>
                        </ol>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>FASILITAS</h2>
                <p>Sekolah Menengah Atas (SMA) Negeri 3 Bojonegoro Memiliki Fasilitas lengkap mulai dari laboratorium, perpustakaan, dll.</p>
            </div>

            <div class="row">
                <?php foreach ($fasilitas->result() as $row) { ?>
                    <div class="col-lg-3 col-md-6 icon-box bg-white p-3" data-aos="fade-up">
                        <img src="<?= base_url() ?>assets/home/img/<?= (isset($row->image)) ? $row->image : 'perpustakaan.jpg' ?>" alt="" class="img-fluid">
                        <h4 class="title mt-3"><a href=""><?= $row->name ?></a></h4>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section class="counts bg-smaga">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $site['students'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Peserta Didik</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $site['teachers'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Guru</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $site['employee'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Tenaga Pendidik</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $site['extra'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Ekstrakulikuler</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="extra" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Ekstrakulikuler</h2>
            </div>

            <div class="row">
                <?php foreach ($ekstra->result() as $row) { ?>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="<?= $row->icon ?>"></i></div>
                        <h4 class="title"><a href=""><?= $row->nama ?></a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum
                            mollit anim id est laborum</p>
                        <!-- <p class="description"><?= (isset($row->keterangan)) ? $row->keterangan : '' ?></p> -->

                    </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <section id="prestasi" class="bg-section text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Prestasi SMA Negeri 3 Bojonegoro</h2>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped" style="font-size: 13px;" id="example">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Tanggal</th>
                                    <th scope="col" class="text-center">Jenis Kejuaraan</th>
                                    <th scope="col" class="text-center">Piala Bergilir/Tetap</th>
                                    <th scope="col" class="text-center">Juara</th>
                                    <th scope="col" class="text-center">Tingkat Kejuaraan</th>
                                    <th scope="col" class="text-center">Juara Dibidang</th>
                                    <th scope="col" class="text-center">Atas Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($prestasi->result() as $row) {
                                ?>

                                    <tr>
                                        <td width="40" class="text-center">
                                            <?= $no ?>
                                        </td>
                                        <td width="85" class="text-center"><?= (isset($row->tanggal)) ? $row->tanggal : '' ?></td>
                                        <td width="125"><?= (isset($row->jenis_kejuaraan)) ? $row->jenis_kejuaraan : '' ?></td>
                                        <td width="95" class="text-center"><?= (isset($row->jenis_piala)) ? $row->jenis_piala : '' ?></td>
                                        <td width="64" class="text-center">
                                            <?= (isset($row->juara)) ? $row->juara : '' ?>
                                        </td>
                                        <td width="81" class="text-center"><?= (isset($row->tingkat_kejuaraan)) ? $row->tingkat_kejuaraan : '' ?></td>
                                        <td width="136" class="text-center">
                                            <?= (isset($row->bidang)) ? $row->bidang : '' ?>
                                        </td>
                                        <td width="211" class="text-center">
                                            <?= (isset($row->nama)) ? $row->nama : '' ?>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>