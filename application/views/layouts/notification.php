<script>
    var flash = $('#flash').data('flash');
    if (flash) {
      Swal.fire({
        position: 'bottom-end',
        icon: 'success',
        title: 'Sukses!',
        text: flash,
        showConfirmButton: false,
        timer: 1500
        })
    }

    $(document).on('click', '#btn-hapus', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin Akan Menghapus?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })
</script>