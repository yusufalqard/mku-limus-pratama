<?php
    require '../functions.php';
    $dbdata = query("SELECT*FROM user");
    $datalapor = query("SELECT*FROM rekapdata");
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
<body>
  <!-- Tabel yang ditampilkan -->
  <div class="rekapdata-container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>KodeMKU</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Tindakan</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach($datalapor as $row) : ?>
            <tr>
                <th><?= $i; ?></th>
                <th><?= $row["leveluser"] ?></th>
                <th><?= $row["nama"] ?></th>
                <th><?= $row["email"] ?></th>
                <th><?= $row["jurusan"] ?></th>
                <th>
                    <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                </th>
            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
        </table>

</body>
</html>