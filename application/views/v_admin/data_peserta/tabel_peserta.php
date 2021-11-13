<script type="text/javascript">
<?php 
$link = site_url('data_peserta/ajax_get_peserta/'.$kode1);
 ?>
  $(document).ready(function() {

    //datatables
    $('#example').DataTable({ 
      "processing" : true, //Feature control the processing indicator.
      "serverSide" : true, //Feature control DataTables' server-side processing mode.
      "order"    : [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url" : "<?php echo $link; ?>",
        "type"  : "POST"
      },

      //Set column definition initialisation properties.
      "columnDefs" : [
        { 
          "targets" : [ 0 ], //first column / numbering column
          "orderable" : false, //set not orderable
        },
      ],
    });
  });
</script>