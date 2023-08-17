<?php 
	require '../session_mulai.php';
	require '../functions.php';
	// $admindata = query("SELECT*FROM rekapdata");
	$datauser=query("SELECT*FROM user");
	//Query untuk pagination
				$jumlahdata=3;
				$jumlahperdata=count(query("SELECT*FROM rekapdata"));
				$pageHal=ceil($jumlahperdata/$jumlahdata);
				$pageaktif=(isset($_GET["page"]) ) ? $_GET["page"] : 1;
				$pageawal=($jumlahdata*$pageaktif)-$jumlahdata;
				$admindata=query("SELECT*FROM rekapdata LIMIT $pageawal,$jumlahdata");
			
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Admin MKU</title>
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
					<a href="../admin/admin_page.php">Dashboard</a>
				</li>
    			<li>
					<a href="../admin/rekapdata.php">Data User</a>
				</li>
    			<li>
					<a href="../admin/rekaplaporan.php">Rekap Laporan</a>
				</li>
				<li>
					<a href="../admin/cekrekap.php">Cek Data</a>
				</li>
    			<li>
					<a href="../admin/kontak.php">Hubungi Kami</a>
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
			<?php 
				date_default_timezone_set("Asia/Jakarta"); 
				echo date('l, H:i:sa');
			?>
			<h1>List Data Laporan Terbaru</h1>
			<!-- Navigasi untuk pagination -->
			<?php if($pageaktif>1) :?>
				<a href="?page=<?=$pageaktif-1;?>">&laquo;</a>
			<?php endif;?>
				<?php for($i=1; $i<=$pageHal; $i++):?>
					<?php if($i==$pageaktif):?>
						<a class="pageWarna" href="?page=<?= $i;?>"><?=$i;?></a>
					<?php else :?>
						<a href="?page=<?= $i;?>"><?=$i;?></a>
					<?php endif;?>
				<?php endfor;?>
			<?php if($pageaktif<$pageHal) :?>
				<a href="?page=<?=$pageaktif+1;?>">&raquo;</a>
			<?php endif;?>
			<table class="cekrekapadm" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel admindata sebagai cekdb -->
            <?php foreach($admindata as $cekdb) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $cekdb["deskripsi"] ?></td>
                <td><?= date("d F Y",strtotime($cekdb["tgl"])); ?></td>
                <td>Rp<?= number_format($cekdb["nominal"]);?></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
		<div class="rekapusertbl">
			<h1>List Data Pengguna</h1>
			<table class="cekrekapadm" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Akses Level</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel user sebagai cekdb -->
            <?php foreach($datauser as $cekdb) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $cekdb["username"] ?></td>
                <td><?= $cekdb["leveluser"] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
		</div>
	</section>
  </body>
</html>
