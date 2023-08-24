<?php
    require '../functions.php';
    $datalapor = query("SELECT*FROM rekapdata WHERE deskripsi NOT LIKE '%Infaq%'");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Laporan Data - [PENGURUS] MKU</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
  </head>
<body class="adminPAGE">
	<section class="maindsb">
        <h2>Masjid Khoiru Ummah</h2>
        <p>Berikut rekap data laporan terbaru saat ini</p>
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
                    <td>Rp<?= number_format($row["nominal"]); ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        </div>
	</section>
    <div class="mengetahui">
        <p><?php setlocale(LC_ALL, 'id-ID', 'id_ID');
                echo "Bogor, ";
                echo strftime("%A %d %B %Y");?></p>
        <p>Mengetahui</p>
        <br>
        <p>Pengurus DKM</p>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
