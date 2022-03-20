
  <main id="main">
    
    <?php $this->load->view('page/_partial/breadcumb'); ?>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 entries">            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <h2 data-aos="fade-up">Contact</h2>
                <p data-aos="fade-up">Berikut kontak kami mulai dari alamat, nomor telepon, email dan kami juga menyediakan form langsung dari website untuk anda meninggalkan pesan.</p>
                </div>

                <div class="row justify-content-center">

                <div class="col-xl-5 col-lg-6" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-12">                      
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Jl. Sorosutan RT. 05 RW. 04 Yogyakarta 55162</p>
                            </div>
                        </div>
                        <div class="col-lg-12">                      
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p class="mt-2">Jl Turi-Tempel No.19 Bibis Tempel Sleman 55552</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-6">
                    <div class="row">                
                        <div class="col-xl-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>Josanmultipangan@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-box">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+62 812 3206 2741</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

                </div>

            </div>
            </section><!-- End Contact Section -->
            </div><!-- End blog entries list -->
            </div>

        </div>
        </section><!-- End Blog Single Section -->
</main>