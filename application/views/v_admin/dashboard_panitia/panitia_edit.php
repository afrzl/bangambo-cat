<?php
    foreach ($user as $key) {
        $id_admin = $key->id_admin;
        $password = $this->encryption->decrypt($key->password);
    }
?>

<!-- content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $title ?>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-12">
                <!-- horizontal form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Setting Password</h3>
                    </div>
                    <?php $this->load->view('layouts/notifikasi'); ?>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open('panitia/edit_password/'.$id_admin, 'class="form-horizontal"'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" id="password" class="form-control" value="<?= $password; ?>" placeholder="Password" readonly>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Tampilkan
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_password" class="col-sm-2 control-label">New Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="new_password" maxlength="15" minlength="8" id="new_password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" onchange="document.getElementById('new_password').type = this.checked ? 'text' : 'password'"> Tampilkan
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="col-sm-2 control-label">Confirm New Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="confirm_password" maxlength="15" minlength="8" id="confirm_password" class="form-control" placeholder="Confirm New Password">
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" onchange="document.getElementById('confirm_password').type = this.checked ? 'text' : 'password'"> Tampilkan
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger pull-right" type="button" onclick="window.history.back();">Cancel</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.section -->
</div>