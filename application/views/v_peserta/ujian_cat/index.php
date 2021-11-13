<div class="content-wrapper">
    <div class="container">
        <!-- content header (page header) -->
        <section class="content-header">
        </section>
        <!-- main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4><?= $key->nama_kegiatan; ?></h4>
                <h4>Formasi - <?= $pstr->nama_lab; ?></h4>
            </div>
            <div class="row">
                
                <div class="message"></div>
                <?php
                //list jawaban
                foreach ($tampil_soal as $tampil_s) {
                    $id_soal = $tampil_s->id_soal;
                    $nama_soal = $tampil_s->nama_soal;
                    $pertanyaan = $tampil_s->pertanyaan;
                    $option_1 = $tampil_s->option_1;
                    $option_2 = $tampil_s->option_2;
                    $option_3 = $tampil_s->option_3;
                    $option_4 = $tampil_s->option_4;
                    $option_5 = $tampil_s->option_5;
                }
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Soal Nomor <button class="btn btn-primary btn-flat"><b><?= $no_soal; ?></b></button></h3>
                    </div>
                    <div class="box-body">
                        <?php echo form_open('peserta/simpan_jawaban/'.$no_soal); ?>
                            <input type="hidden" name="id_soal" value="<?= $id_soal; ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <?= $pertanyaan; ?>
                                    <label>
                                        <input type="radio" name="jawaban_peserta" value="A" class="flat-red" <?php if($jawaban_peserta == 'A') echo "checked"; ?>> A. <?= $option_1; ?> <br>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="jawaban_peserta" value="B" class="flat-red" <?php if($jawaban_peserta == 'B') echo "checked"; ?>> B. <?= $option_2; ?> <br>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="jawaban_peserta" value="C" class="flat-red" <?php if($jawaban_peserta == 'C') echo "checked"; ?>> C. <?= $option_3; ?> <br>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="jawaban_peserta" value="D" class="flat-red" <?php if($jawaban_peserta == 'D') echo "checked"; ?>> D. <?= $option_4; ?> <br>
                                    </label><br>
                                    <label>
                                        <input type="radio" name="jawaban_peserta" value="E" class="flat-red" <?php if($jawaban_peserta == 'E') echo "checked"; ?>> E. <?= $option_5; ?> <br>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <?php
                                    $prev = $no_soal-1;
                                    if ($prev != 0) {
                                        echo "<a href='".base_url('peserta/ujian_cat/'. $prev)."'>
                                            <button type='button' class='btn btn-success btn-flat pull-left' data-dismiss='modal'><i class='fa fa-arrow-circle-left'></i> Soal Sebelumnya</button>
                                            </a>";
                                    }
                                ?>
                                <button type="submit" class="btn btn-success btn-flat">Soal Selanjutnya <i class=" fa fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container -->
    </div>
</div>