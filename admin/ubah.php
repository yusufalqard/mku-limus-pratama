<?php
    require '../functions.php';
    $id = $_GET["id"];
    //Query data pemanggil akses dari id database user
     $akses = query("SELECT*FROM user WHERE id = $id")[0];
     //Cek apakah submit button ditekan atau belum
     if(isset($_POST["submit"])){
         //Cek apakah data berhasil di ubah atau belum
         if(ubah($_POST)> 0){
             echo "<script type='text/javascript'>
                        alert('Data berhasil diubah');
                        document.location.href='rekapdata.php';
                    </script>
                ";
         } else{
             echo "<script type='text/javascript'>
                        alert('Data gagal diubah');
                        document.location.href='ubah.php';
                    </script>";
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data Pengguna - Admin Mode</title>
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
        <h1>Ubah Data Pengguna - Admin Access</h1>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $akses["id"] ?>">
                <ul>
                    <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" required value="<?= $akses["username"];?>">
                        <br>
                    </li>
                    <li>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" value="" placeholder="Ubah Passwordnya">
                        <br>
                    </li>
                    <li>
                        <label for="leveluser">Level User :</label>
                        <br>
                        <select id="leveluser" name="leveluser">
                            <option value="admin">admin</option>
                            <option value="pengurus">pengurus</option>
                            <option value="guest">guest</option>
                        </select>
                        <br>
                    </li>
                    <li>
                        <button type="submit" name="submit">Ubah Data!</button>
                    </li>
                </ul>
            </form>
    </section>
</body>
</html>