<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_panitia/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" maxlength="9" minlength="9" class="form-control" placeholder="Username" data-inputmask='"mask": "999999999"' data-mask required>
          </div>
          <div class="form-group">
            <label>Nama Panitia</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Panitia" required>
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