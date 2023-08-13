<?php
    require '../functions.php';
    $id = $_GET["id"];
    //Query data pemanggil akses dari id database user
     $cek = query("SELECT*FROM rekapdata WHERE id = $id")[0];
     //Cek apakah submit button ditekan atau belum
     if(isset($_POST["submit"])){
         //Cek apakah data berhasil di ubah atau belum
         if(updatedata($_POST)> 0){
             echo "<script type='text/javascript'>
                        alert('Data berhasil diubah');
                        document.location.href='masjidrekapdata.php';
                    </script>
                ";
         } else{
             echo "<script type='text/javascript'>
                        alert('Data gagal diubah');
                        document.location.href='update_data.php';
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
        <h1>Ubah Cek Rekap Data</h1>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $cek["id"] ?>">
                <ul class="ubahbgrd">
                    <li>
                        <label for="deskripsi">Deskripsi :</label><br>
                        <input type="text" name="deskripsi" id="deskripsi" required value="<?= $cek["deskripsi"];?>">
                        <br><br>
                    </li>
                    <li>
                        <label for="tgl">Tanggal :</label><br>
                        <input type="date" name="tgl" id="tgl" required value="<?= $cek["tgl"];?>">
                        <br><br>
                    </li>
                    <li>
                        <label for="nominal">Nominal :</label>
                        <br>
                        <input type="text" name="nominal" id="nominal"required value="<?= $cek["nominal"];?>">
                        <br><br>
                    </li>
                    <li>
                        <button type="submit" name="submit">Ubah Data!</button>
                    </li>
                </ul>
            </form>
    </section>
</body>
</html>