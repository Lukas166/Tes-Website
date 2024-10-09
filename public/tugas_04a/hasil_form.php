<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan Tiket</title>
</head>
<body>
    <h2>Hasil Pemesanan Tiket</h2>

    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $tempat = $_POST['tempat'];
    $pembayaran = $_POST['pembayaran'];

    if ($tempat == "Tribun Utara - Rp. 150.000") {
        $harga = 150000;
    } elseif ($tempat == "Tribun Selatan - Rp. 100.000") {
        $harga = 100000;
    } elseif ($tempat == "VIP - Rp. 300.000") {
        $harga = 300000;
    }

    $pertandingan1 = "";
    $pertandingan2 = "";
    $totalPertandingan = 0;

    if (isset($_POST['pertandingan1'])) {
        $pertandingan1 = $_POST['pertandingan1'];
        $totalPertandingan++;
    }
    if (isset($_POST['pertandingan2'])) {
        $pertandingan2 = $_POST['pertandingan2'];
        $totalPertandingan++;
    }

    $total = $harga*$jumlah*$totalPertandingan;

    echo "<p><b>Nama: </b>$nama</p>";
    echo "<p><b>Email: </b>$email</p>";
    echo "<p><b>Tanggal Pembelian: </b>$tanggal</p>";

    echo "<b>Pertandingan yang Dipilih: </b><ul>";
    if ($pertandingan1) {
        echo "<li>$pertandingan1</li>";
    }
    if ($pertandingan2) {
        echo "<li>$pertandingan2</li>";
    }
    echo "</ul>";

    echo "<p><b>Jumlah Tiket: </b>$jumlah</p>";
    echo "<p><b>Bagian Tempat Duduk: </b>$tempat</p>";
    echo "<p><b>Metode Pembayaran: </b>$pembayaran</p>";
    echo "<p><b>Total Harga yang Harus Dibayar: </b>Rp. " . number_format($total, 0, ',', '.') . "</p>";
    echo "<a href = \"/\">Back </a>";
    ?>
</body>
</html>
