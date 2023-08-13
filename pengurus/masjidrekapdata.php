<?php 
	require '../functions.php';
    $cekrekap = query("SELECT*FROM rekapdata");
    //Query untuk pagination
    $jumlahdata=3;
    $jumlahperdata=count(query("SELECT*FROM rekapdata"));
    $pageHal=ceil($jumlahperdata/$jumlahdata);
    $pageaktif=(isset($_GET["page"]) ) ? $_GET["page"] : 1;
    $pageawal=($jumlahdata*$pageaktif)-$jumlahdata;
    $cekrekap=query("SELECT*FROM rekapdata LIMIT $pageawal,$jumlahdata");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cek Data Masjid - [Pengurus] MKU</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
    
  </head>
<body class="adminPAGE">
   <header>
	<!-- Blank -->
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
            <center>
			<h1 class="cekrekap">Berikut data yang direkap berdasarkan tabel dibawah ini</h1>
            <button><a href="add.php" class="cetak">Tambah</a></button>
            <br><br>
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
            </center>
            <table class="cekrekaptbladm" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Tindakan</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach($cekrekap as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["deskripsi"] ?></td>
                <td><?= $row["tgl"] ?></td>
                <td>Rp.<?= $row["nominal"] ?></td>
                <td>
                    <a href="update_data.php?id=<?= $row["id"];?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                </td>
            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
	</section>
                <div class="botLogoFooter" id="footer">
                    <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
                </div>
  </body>
</html>
