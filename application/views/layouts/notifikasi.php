<?php if($this->session->flashdata('danger')): ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-ban"></i> Hapus!</h4>
	<?php echo $this->session->flashdata('danger'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('info')): ?>
<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-info"></i> Info!</h4>
	<?php echo $this->session->flashdata('info'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('warning')): ?>
<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
	<?php echo $this->session->flashdata('warning'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Berhasil!</h4>
	<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>