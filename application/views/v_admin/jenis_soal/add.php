<div class="modal fade" id="modal_add".$id_event>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input Jenis Soal</h4>
      </div>
      <?php echo form_open('jenis_soal/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Mapel</label>
            <input type="hidden" name="id_event" value="<?= $id_event; ?>">
            <input type="text" name="nama_soal" class="form-control" placeholder="Nama Soal" required>
          </div>
          <div class="form-group">
            <label>Jumlah Soal</label>
            <input type="number" name="jumlah_soal" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Maksimal Nilai</label>
            <input type="number" name="nilai_max" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Passing Grade</label>
            <input type="number" name="passing_grade" class="form-control" required>
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