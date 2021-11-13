<script type="text/javascript">
    <?php
        $link = site_url('pertanyaan_soal/ajax_get_pertanyaan/'.$kode2.'/'.$kode1);
    ?>
    $(document).ready(function() {
        //data tables
        $('#example').DataTable({
            "processing" : true, //Feature control processing indicator.
            "serverSide" : true, //Feature control server-side processing.
            "order" : [], //Initial no order.
            //Load data for the table's content from an Ajax source
            "ajax" : {
                "url" : "<?= $link; ?>",
                "type" : "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs" : [
                {
                    "targets" : [ 0 ], //first column / numbering column
                    "orderable" : false, ///set not orderable
                },
            ],
        });
    });
</script>