
<script>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $awal = strtotime($tgl);
        $akhir = strtotime($waktu_selesai);
        
        $selesai = date('M d, Y H:i:s', $akhir);
    ?>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $selesai ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  if (seconds < 10) {
      var detik = "0" + seconds;
  } else {
      var detik = seconds;
  }

  if (minutes < 10) {
      var menit = "0" + minutes;
  } else {
      var menit = minutes;
  }

  if (hours < 10) {
      var jam = "0" + hours;
  } else {
      var jam = hours;
  }

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = jam + ":"
  + menit + ":" + detik;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = window.location.assign("<?= base_url(); ?>peserta/selesai_ujian");
  }
}, 0);
</script>