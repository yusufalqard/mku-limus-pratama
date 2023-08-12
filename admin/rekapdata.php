<?php
    require '../functions.php';
    $rekapdata = query("SELECT id,username,leveluser FROM user");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekap Data</title>
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
			<h1 class="cekuser">Berikut list user yang terdaftar pada database</h1>
            <table class="cekrekaptbl" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Level User</th>
                <th>Action</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach($rekapdata as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["username"] ?></td>
                <td><?= $row["leveluser"] ?></td>
                <div class="decorlink">
                <td>
                    <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" 
                        onclick="return confirm('Apakah anda yakin menghapus data yang dipilih?');">
                        Hapus
                    </a>
                </td>
                </div>
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