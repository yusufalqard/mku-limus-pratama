<?php 
	require '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pengguna - MKU</title>
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
					<a href="../pengguna/lihatrekap.php">Lihat Rekap Data</a>
				</li>
    			<li>
					<a href="../pengguna/user_page.php">Informasi User</a>
				</li>
    			<li>
					<a href="../pengguna/kontak.php">Hubungi Kami</a>
				</li>
                <li>
                    <a href="../index.php">Logout</a>
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
        <br>
            <ul class="">
                <li>
                    <label for = "username">Username Anda : </label>
                    <input type="text" name="username" id="username">
                </li>
                <li class="ruang"></li>
                <li>
                    <label for = "leveluser">Akses Level User : </label>
                    <input type="text" name="leveluser" id="leveluser">
                </li>
                <li class="ruang"></li>
            </ul>
                    <div class="botLogoFooter" id="footer">
                        <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
                    </div>
	</section>
  </body>
</html>
