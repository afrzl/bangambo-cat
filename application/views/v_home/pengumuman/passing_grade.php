<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <img src="<?php echo base_url(); ?>assets/academy/img/bg-img/breadcumb.jpg" class="breadcumb-area bg-img">
    <div class="bradcumbContent">
        <h2>Passing Grade</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Elements Area Start ##### -->
<section class="elements-area mt-50 section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- ========== Loaders ========== -->
            <div class="col-12">
                <div class="elements-title mb-50">
                    <h2>Passing Grade</h2>
                </div>
            </div>

            <div class="col-12">
                <!-- Loaders Area Start -->
                <div class="our-skills-area text-center mb-100">
                    <div class="row">
                        <?php foreach ($jenis_soal as $key) {
                            $tot = $key->total_nilai;
                            $pas = $key->passing_grade;
                            $pesentase = ($pas/$tot)*100;
                             ?>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-pie-bar mb-30" data-percent="<?php echo $pesentase; ?>">
                                <canvas class="bar-circle" width="70" height="70"></canvas>
                                <h6><?php echo $key->nama_soal; ?></h6>
                                <p>Jumlah Soal = <?php echo $key->jumlah_soal; ?> </p>
                                <p>Total Nilai = <?php echo $tot; ?></p>
                                <p>Passing Grade = <?php echo $pas; ?></p>

                            </div>
                        </div>
                        <?php
                        } 
                         ?>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ***** Elements Area End ***** -->
