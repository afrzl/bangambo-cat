<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <?php foreach ($informasi as $key) {
            $kegiatan = $key->nama_kegiatan;
            $tgl_pendaftaran = tgl_indonesia($key->tgl_pendaftaran);
            $tgl_tutup = tgl_indonesia($key->tgl_tutup);
            $tgl_lulus_adm = tgl_indonesia($key->tgl_lulus_adm);
            $tgl_ujian_cat = tgl_indonesia($key->tgl_ujian_cat);
        } ?>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/bg-1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Bang Ambo University</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>University</h2>
                            <a href="<?php echo base_url('home/about_us'); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/bg-2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Panitia Seleksi Asisten Laboratorium</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms"><?php echo $kegiatan; ?></h2>
                            <a href="<?php echo base_url('home/alur_pendaftaran'); ?>"" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/bg-3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Bang Ambo University</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>University</h2>
                            <a href="<?php echo base_url('home/about_us'); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Best University</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Amazing Teachers</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Great Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="course-icon">
                        <i class="icon-id-card"></i>
                    </div>
                    <div class="course-content">
                        <h4>Pendaftaran</h4>
                        <p>Pendaftaran dapat dilakukan melalui website pada tanggal <?php echo $tgl_pendaftaran; ?> sampai dengan tanggal <?php echo $tgl_tutup; ?>.</p>
                    </div>
                </div>
            </div>
            
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="course-icon">
                        <i class="icon-responsive"></i>
                    </div>
                    <div class="course-content">
                        <h4>Administrasi</h4>
                        <p>Pengumuman lulus administrasi pada tanggal <?php echo $tgl_lulus_adm; ?> melalui website.</p>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                    <div class="course-icon">
                        <i class="icon-message"></i>
                    </div>
                    <div class="course-content">
                        <h4>CAT</h4>
                        <p>Ujian CAT dilaksanakan pada tanggal <?php echo $tgl_ujian_cat; ?>. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->



<!-- ##### CTA Area Start ##### -->
<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3><?php echo $kegiatan; ?> !</h3>
                    <a href="<?php echo base_url('home/alur_pendaftaran'); ?>" class="btn academy-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->