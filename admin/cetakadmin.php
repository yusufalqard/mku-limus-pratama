<?php
    require '../functions.php';
    $dbdata = query("SELECT*FROM user");
    $datalapor = query("SELECT*FROM rekapdata");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Laporan Data - ADMIN MKU</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
  </head>
<body class="adminPAGE">
	<section class="maindsb">
        <h2><?= date("l, d F Y");?></h2>
        <table class="rekapadmin" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach($datalapor as $row) : ?>
                <tr>
                    <td><?= $i; ?></th>
                    <td><?= $row["deskripsi"] ?></td>
                    <td><?=date("d F Y",strtotime($row["tgl"])); ?></td>
                    <td>Rp.<?= $row["nominal"] ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <th colspan="3">Total</th>
                <td>
                    Rp.<?=
                        $row["nominal"];
                    ?>
                </td>
            </tr>
        </table>
        </div>
	</section>
    <div class="mengetahui">
        <p>Bogor, <?= date("d F Y");?></p>
        <p>Mengetahui</p>
        <br>
        <p>(Admin)</p>
    </div>
</body>
</html>
