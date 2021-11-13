<div class="modal fade" id="myModalEdit<?php echo $id_soal; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit Jenis Soal</h4>
      </div>
     <?php echo form_open('jenis_soal/edit/'.$id_soal); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Soal</label>
            <input type="hidden" name="id_event" value="<?= $jso->id_informasi; ?>">
            <input type="text" name="nama_soal" value="<?php echo $jso->nama_soal; ?>" class="form-control" placeholder="Nama Soal" required>
          </div>
          <div class="form-group">
            <label>Jumlah Soal</label>
            <input type="number" name="jumlah_soal" value="<?php echo $jso->jumlah_soal; ?>" class="form-control"  data-mask required>
          </div>
          <div class="form-group">
            <label>Maksimal Nilai</label>
            <input type="number" name="nilai_max" class="form-control" value="<?php echo $jso->nilai_max; ?>"  required>
          </div>
          <div class="form-group">
            <label>Passing Grade</label>
            <input type="number" name="passing_grade" class="form-control" value="<?php echo $jso->passing_grade; ?>"  required>
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-left">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>