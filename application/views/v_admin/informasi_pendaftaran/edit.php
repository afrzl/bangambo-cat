<div class="modal fade" id="myModalEdit<?php echo $id_informasi; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit Informasi</h4>
      </div>
      <?php echo form_open_multipart('informasi_pendaftaran/edit/'.$id_informasi); ?>
        <?php 
            $tgl1 = ubah_tgl2($key->tgl_awal);
            $tgl2 = ubah_tgl2($key->tgl_akhir);
            $tgl3 = $tgl1." - ".$tgl2;
         ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Event</label>
            <input type="text" name="nama_kegiatan" value="<?php echo $key->nama_kegiatan; ?>" class="form-control" placeholder="Nama Kegiatan" required>
          </div>
          <div class="form-group">
            <label>Tanggal Pelaksanaan</label>
            <input type="text" name="tgl_pelaksanaan" value="<?php echo $tgl3; ?>" class="form-control tgl_pelaksanaan" required>
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