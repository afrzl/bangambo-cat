<?php
    foreach ($nama_soal as $nama) {
        $n_soal = $nama->nama_soal;
    }
    foreach ($tampil_edit as $tam) {
        # code...
    }
    foreach ($nama_event as $event) {
        # code...
    }
?>
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $title." ".$n_soal; ?>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Pertanyaan Soal <?= $n_soal; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <?php echo form_open('pertanyaan_soal/edit_proses/'.$event->id_informasi.'/'.$tam->id_soal.'/'.$tam->id_pertanyaan); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <textarea name="pertanyaan" id="editor1" cols="80" rows="10" required><?= $tam->pertanyaan; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan A</label>
                            <textarea name="option_1" id="editor2" cols="80" rows="10" required><?= $tam->option_1; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan B</label>
                            <textarea name="option_2" id="editor3" cols="80" rows="10" required><?= $tam->option_2; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan C</label>
                            <textarea name="option_3" id="editor4" cols="80" rows="10" required><?= $tam->option_3; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan D</label>
                            <textarea name="option_4" id="editor5" cols="80" rows="10" required><?= $tam->option_4; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan E</label>
                            <textarea name="option_5" id="editor6" cols="80" rows="10" required><?= $tam->option_5; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Jawaban Pertanyaan</label>
                            <select name="jawaban" id="" class="form-control select2" style="width: 100%" required>
                                <option value="A" <?php if ($tam->jawaban == "A") {echo "selected";} ?>>Pilihan A</option>
                                <option value="B" <?php if ($tam->jawaban == "B") {echo "selected";} ?>>Pilihan B</option>
                                <option value="C" <?php if ($tam->jawaban == "C") {echo "selected";} ?>>Pilihan C</option>
                                <option value="D" <?php if ($tam->jawaban == "D") {echo "selected";} ?>>Pilihan D</option>
                                <option value="E" <?php if ($tam->jawaban == "E") {echo "selected";} ?>>Pilihan E</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pull-left">Submit</button>
                        <button class="btn btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>