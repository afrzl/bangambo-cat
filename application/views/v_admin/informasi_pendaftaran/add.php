<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('informasi_pendaftaran/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Event</label>
            <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Event" required>
          </div>
          <div class="form-group">
            <label>Tanggal Pelaksanaan</label>
            <input type="text" name="tgl_pelaksanaan" class="form-control" id="reservation" required>
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