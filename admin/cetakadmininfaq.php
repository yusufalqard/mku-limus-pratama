<?php
require '../functions.php';
$infaq = query("SELECT*FROM datainfaq");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Laporan Infaq - ADMIN MKU</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
</head>

<body class="adminPAGE">
    <section class="maindsb">
        <h2>Masjid Khoiru Ummah</h2>
        <p>Mengetahui bahwa data laporan keseluruhan pada tabel di bawah ini</p>
        <table class="rekapadmin" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
            <!--Membuat Perulangan dengan PHP untuk tabel id-->
            <?php $i = 1;  ?>
            <!-- Memanggil perulangan foreach dari tabel rekapdata -->
            <?php foreach ($infaq as $r) : ?>
                <tr>
                    <td><?= $i; ?></th>
                    <td><?= $r["deskripsi"] ?></td>
                    <td><?= date("d F Y", strtotime($r["tgl"])); ?></td>
                    <td>Rp<?= number_format($r["total"]); ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <th colspan="3">Total</th>
                <td>Rp25,995,000</td>
            </tr>
        </table>
        </div>
        <p>Segala informasi di atas merupakan data laporan infaq terbaru yang telah dicetak</p>
    </section>
    <div class="mengetahui">
        <p><?php setlocale(LC_ALL, 'id-ID', 'id_ID');
            echo "Bogor, ";
            echo strftime("%A %d %B %Y"); ?></p>
        <p style="text-align:center;">Mengetahui</p>
        <br>
        <p style="text-align:center;">Admin</p>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>