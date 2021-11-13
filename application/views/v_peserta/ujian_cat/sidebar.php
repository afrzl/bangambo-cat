<div class="col-sm-12">
    <?php
    //nomor soal
    foreach ($data_jawaban as $data_j) {
        $list_jawaban = $data_j->list_jawaban;
    }
    $jawaban = explode(",", $list_jawaban);
    $nomor = sizeof($jawaban);

    for ($i=1; $i <= $nomor ; $i++) { 
        $a = $i-1;
        $jwb = explode(":", $jawaban[$a]);
        if ($no_soal == $i) {
            if ($jwb[1] == "X") {
                echo "<div>";
                echo "<a>";
                echo "<button type=\"button\" class=\"btn btn-primary btn-sm pilda\">".$i." .</button>";
                echo "</a>";
                echo "</div>";
            } else {
                echo "<div>";
                echo "<a>";
                echo "<button type=\"button\" class=\"btn btn-primary btn-sm pilda\">".$i." .</button>";
                echo "</a>";
                echo "</div>";
            }
        } elseif ($jwb[2] == "N") {
            echo "<div>";
            echo "<a href='".base_url('peserta/ujian_cat/'.$i)."'>";
            echo "<button type=\"button\" class=\"btn btn-default btn-sm pilda\">".$i." .</button>";
            echo "</a>";
            echo "</div>";
        } else {
            echo "<div>";
            echo "<a href='".base_url('peserta/ujian_cat/'.$i)."'>";
            echo "<button type=\"button\" class=\"btn btn-success btn-sm pilda\">".$i." .</button>";
            echo "</a>";
            echo "</div>";
        }
    }
    ?>
</div>

<div class="col-sm-12 selesai">
    <a href="<?= base_url('peserta/selesai_ujian') ?>">
        <button class="btn btn-success pull-right" type="button"><i class="fa fa-check-circle"></i> Selesai</button>
    </a>
</div>
