<?php 
    require '../functions.php';
    $lihatrekap = query("SELECT * FROM rekapdata WHERE deskripsi LIKE '%Infaq%'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cetak Print Laporan - Guest Mode</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>
    <center>
	<div class="cetaklaporanguest">
        <h2>Laporan Infaq Jum'at Masjid Khoiru Ummah</h2>
        <p>Assalamualaikum wr.wb</p>
        <p>Berikut merupakan data infaq jum'at tiap mingguan terbaru yang diakumulasikan<p>

        <table class="cekrekaptbl" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal Catat</th>
                <th>Nominal</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach($lihatrekap as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["deskripsi"] ?></td>
                <td><?= date("d F Y",strtotime($data["tgl"])); ?></td>
                <td>
                    Rp.<?= $data["nominal"] ?>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Total</td>
                <td>
                    Rp.<?=
                        $data["nominal"];
                    ?>
                </td>
            </tr>
        </table> 
		<br>
    </div>
    <div class="mengetahui">
        <p>Bogor, <?= date("d F Y");?></p>
        <p>Mengetahui</p>
        <br>
        <p>(Pengurus DKM)</p>
    </div>
    </center>
    <script>
        window.print();
    </script>
</body>
</html>