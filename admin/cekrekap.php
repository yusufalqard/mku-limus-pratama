<?php 
	require '../functions.php';
    $cekrekap = query("SELECT*FROM rekapdata");
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
					<a href="../admin/rekapdata.php">Rekap Data</a>
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
			<h1 class="cekrekap">Silahkan pilih data berdasarkan tabel dibawah ini</h1>
            <table class="cekrekaptbl" border="1" cellpadding="10" cellspacing="0">
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
                    <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                </td>
            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
            <div class="rekapdata-container">
        
        <h1>LoreIpsumSH, also known as Secure Shell or Secure Socket Shell, is a network protocol that gives users, particularly system administrators, a secure way to access a computer over an unsecured network.

SSH also refers to the suite of utilities that implement the SSH protocol. Secure Shell provides strong password authentication and public key authentication, as well as encrypted data communications between two computers connecting over an open network, such as the internet.

In addition to providing strong encryption, SSH is widely used by network administrators to manage systems and applications remotely, enabling them to log in to another computer over a network, execute commands and move files from one computer to another.

SSH refers both to the cryptographic network protocol and to the suite of utilities that implement that protocol. SSH uses the client-server model, connecting a Secure Shell client application, which is the end where the session is displayed, with an SSH server, which is the end where the session runs. SSH implementations often include support for application protocols used for terminal emulation or file transfers.

SSH can also be used to create secure tunnels for other application protocols, for example, to securely run X Window System graphical sessions remotely. An SSH server, by default, listens on the standard Transmission Control Protocol (TCP) port 22.

How does SSH work?
Secure Shell was created to replace insecure terminal emulation or login programs, such as Telnet, rlogin (remote login) and rsh (remote shell). SSH enables the same functions -- logging in to and running terminal sessions on remote systems. SSH also replaces file transfer programs, such as File Transfer Protocol (FTP) and rcp (remote copy).</h1>
                    
	</section>
                <div class="botLogoFooter" id="footer">
                    <p>© 2023 Masjid Khoiru Ummah, Org. All rights reserved</p>
                </div>
  </body>
</html>
