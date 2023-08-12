<?php
    require '../functions.php';
     //Cek apakah submit button ditekan atau belum
     if(isset($_POST["submit"])){
         //Cek apakah data berhasil di ubah atau belum
         if(tambah($_POST)> 0){
             echo "<script type='text/javascript'>
                        alert('Data berhasil ditambah');
                        document.location.href='cekrekap.php';
                    </script>
                ";
         } else{
             echo "<script type='text/javascript'>
                        alert('Data gagal ditambah');
                        document.location.href='tambah.php';
                    </script>";
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Baru - Admin Mode</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
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
        <h1>Tambah Cek Rekap Data</h1>
            <button><a href="../admin/cekrekap.php" class="cetak">Kembali</a></button>
            <br><br>
            <form action="" method="POST">
                <ul class="ubahbgrd">
                    <li>
                        <label for="deskripsi">Deskripsi :</label><br>
                        <input type="text" name="deskripsi" id="deskripsi">
                        <br><br>
                    </li>
                    <li>
                        <label for="tgl">Tanggal :</label><br>
                        <input type="date" name="tgl" id="tgl">
                        <br><br>
                    </li>
                    <li>
                        <label for="nominal">Nominal :</label>
                        <br>
                        <input type="text" name="nominal" id="nominal">
                        <br><br>
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data!</button>
                    </li>
                </ul>
            </form>
    </section>
</body>
</html>