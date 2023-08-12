<?php 
	// require '../session_mulai.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	// if($_SESSION['leveluser']==""){
	// 	header("location:index.php?pesan=gagal");
    //     exit;
	// }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin - MKU</title>
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
					<a href="../admin/rekapdata.php">Data Usar</a>
				</li>
    			<li>
					<a href="../admin/rekaplaporan.php">Rekap Laporan</a>
				</li>
				<li>
					<a href="../admin/cekrekap.php">Cek Rekap Data</a>
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
			<h1 class="kontakadmin">Jika anda ingin kritik dan saran untuk aplikasi yang berjalan</h1>
            <h1 class="kontakadmin">Silahkan menghubungi kontak dibawah ini atau klik ikonnya</h1>
                    <center>
                        <a href="https://t.me/Hawiqard" target="_blank"><img src="../gambar/telegram.png"></a>
					    <a href="https://github.com/yusufalqard" target="_blank"><img src="../gambar/github.png"></a>
                        <a href="https://www.facebook.com/hawialqard/" target="_blank"><img src="../gambar/facebook.png"></a>
                        <a href="https://www.instagram.com/yusuf_8676/" target="_blank"><img src="../gambar/instagram.png"></a>
                    </center>
                        <h1 class="kontakadmin">Whatsapp : 0897-1173-363</h1>
                    <div class="botLogoFooter">
                        <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
                    </div>
	</section>
  </body>
</html>
