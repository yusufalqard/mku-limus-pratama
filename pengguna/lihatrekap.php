<?php 
	require '../functions.php';
      $lihatrekap = query("SELECT * FROM rekapdata WHERE deskripsi LIKE '%Infaq%'");
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage - MKU [Guest]</title>
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
    <center>
      <p>Data Infaq Jum'at - Preview GUEST Mode</p>
      <button type="button"><a href="../pengguna/cetakguest.php" class="cetak" target="_blank">Cetak Laporan</a></button>
    </center>
      <br>
      <br>
      <table class="rekapadmin" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal Catat</th>
                <th>Total (Rupiah)</th>
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
                    Rp<?= number_format($data["nominal"]); ?>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
                    <div class="botLogoFooter" id="footer">
                        <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
                    </div>
	</section>
  </body>
</html>
