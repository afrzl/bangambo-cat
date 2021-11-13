  <?php
    foreach ($nama_soal as $nama) {
        $n_soal = $nama->nama_soal;
        $id_soal = $nama->id_soal;
    }

    
    foreach ($nama_event as $nama) {
      $id_event = $nama->id_informasi;
      $n_event = $nama->nama_kegiatan;
  }
?>
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
          <?= $n_event; ?>
          <button class="btn btn-warning btn-flat pull-right" style="margin-bottom: 10px" type="button" onclick="window.history.back();">Kembali</button>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Input Mapel <?= $n_soal; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <?php echo form_open('pertanyaan_soal/input_proses/'.$id_event.'/'.$id_soal); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <textarea name="pertanyaan" id="editor1" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan A</label>
                            <textarea name="option_1" id="editor2" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan B</label>
                            <textarea name="option_2" id="editor3" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan C</label>
                            <textarea name="option_3" id="editor4" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan D</label>
                            <textarea name="option_4" id="editor5" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Pilihan E</label>
                            <textarea name="option_5" id="editor6" cols="80" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Jawaban Pertanyaan</label>
                            <select name="jawaban" id="" class="form-control select2" style="width: 100%" required>
                                <option value="A"> >Pilihan A</option>
                                <option value="B"> >Pilihan B</option>
                                <option value="C"> >Pilihan C</option>
                                <option value="D"> >Pilihan D</option>
                                <option value="E"> >Pilihan E</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>