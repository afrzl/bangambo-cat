<!-- content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
            <button type="submit" class="btn btn-primary btn-flat pull-right" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Add</button>
            <div id="flash" data-flash="<?php echo $this->session->flashdata('success'); ?>"></div>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php include 'add.php'; ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tabel <?= $title; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered" id="tabelPanitia">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="dataPanitia">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>