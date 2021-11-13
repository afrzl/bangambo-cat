<?php foreach ($informasi as $key) {
    $kegiatan = $key->nama_kegiatan;
    $alur_pendaftaran = $key->alur_pendaftaran;
} ?>
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <img src="<?php echo base_url(); ?>assets/academy/img/bg-img/breadcumb.jpg" class="breadcumb-area bg-img">
    <div class="bradcumbContent">
        <h2>Alur Pendaftaran</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3><?php echo $kegiatan;  ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                    <img src="<?php echo base_url('uploads/pengumuman/'.$alur_pendaftaran); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->
