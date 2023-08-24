<?php
    require '../functions.php';
    $dbdata = query("SELECT*FROM user");
    $datalapor = query("SELECT*FROM rekapdata");
    $infaq = query("SELECT*FROM datainfaq");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekap Laporan - Pengurus</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
  </head>
  <body class="adminPAGE">
   <header>
    <button class="tombolmenu">Menu</button>
		<nav class="listmenu">
			<ul>
                <li class="kosong">
					<img src="../gambar/logomasjid.png">
				</li>
    			<li>
					<a href="../pengurus/mku_page.php">Dashboard</a>
				</li>
    			<li>
					<a href="../pengurus/data_mku.php">Data User</a>
				</li>
    			<li>
					<a href="../pengurus/laporan_mku.php">Rekap Laporan</a>
				</li>
				<li>
					<a href="../pengurus/masjidrekapdata.php">Cek Data Masjid</a>
				</li>
				<li>
					<a href="../logout.php">Logout</a>
				</li>
				<li class="kosongbesar"></li>
				<li class="botIkon">
					<a href="https://t.me/Hawiqard" target="_blank"><img src="../gambar/telegram.png"></a>
					<a href="https://github.com/yusufalqard" target="_blank"><img src="../gambar/github.png"></a>
				</li>
  			</ul>
		</nav>
	</header>
    <script type="text/javascript">
		$(document).ready(function(){
			$('.tombolmenu').click(function(){
				$('.listmenu').toggleClass('sidebar-menu');
			});
		});
	</script>
	<section class="maindsb">
			<h1>List Data Laporan Terbaru</h1>
            <button type="button"><a href="../pengurus/print_cetak.php" class="cetak" target="_blank">Cetak Laporan</a></button>
            <br>
            <br>
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
                <td>Rp.<?= number_format($row["nominal"]);?></td>

            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <h1>List Data Infaq Terbaru untuk di Cetak</h1>
            <button type="button">
                <a href="../pengurus/cetakinfaq.php" class="cetak" target="_blank">Cetak Laporan Infaq</a>
            </button>
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
            <?php foreach($infaq as $r) : ?>
            <tr>
                <td><?= $i; ?></th>
                <td><?= $r["deskripsi"] ?></td>
                <td><?=date("d F Y",strtotime($r["tgl"])); ?></td>
                <td>Rp<?= number_format($r["total"]) ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </table>
        </div>
	</section>
</body>
</html>