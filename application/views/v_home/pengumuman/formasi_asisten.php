<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <img src="<?php echo base_url(); ?>assets/academy/img/bg-img/breadcumb.jpg" class="breadcumb-area bg-img">
    <div class="bradcumbContent">
        <h2>Formasi Asisten</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <?php 
            foreach ($formasi_asisten as $key ) {
                 
             ?>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <div class="course-icon">
                        <i class="icon-assistance"></i>
                    </div>
                    <div class="course-content">
                        <h4><?php echo $key->nama_lab; ?></h4>
                        <p>Jumalah Formasi : <?php echo $key->jumlah_formasi; ?> </p>
                        <p>Jumlah Pelamar : <?php echo $key->jumlah_peserta; ?></p>
                        <a href="<?php echo base_url('home/download/'.$key->lampiran); ?>">Download Persyaratan</a>
                    </div>
                </div>
            </div>
            <?php 
            }
             ?>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->