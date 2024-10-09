<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Tiket</title>
    <style>
        label, h2, input, a{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h2>Formulir Pemesanan Tiket</h2>
    <form action="tugas_04a/hasil_form.php" method="POST">
        <label for="nama">Nama:</label>
        <input style="margin: 0;" type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input style="margin: 0;" type="email" id="email" name="email" required><br><br>

        <label for="tanggal">Tanggal Pembelian:</label>
        <input style="margin: 0;" type="date" id="tanggal" name="tanggal" required><br><br>

        <label for="pertandingan">Pilih Pertandingan:</label><br>
        <input type="checkbox" id="pertandingan1" name="pertandingan1" value="MW1 - Chelsea vs Manchester City">
        <label style="margin: 0;" for="pertandingan1">MW1 - Chelsea vs Manchester City</label><br>
        <input type="checkbox" id="pertandingan2" name="pertandingan2" value="Playoff UECL - Chelsea vs Servette">
        <label style="margin: 0;" for="pertandingan2">Playoff UECL - Chelsea vs Servette</label><br><br>

        <label for="jumlah">Jumlah Tiket:</label>
        <input style="margin: 0;" type="number" id="jumlah" name="jumlah" required><br><br>

        <label for="tempat">Bagian Tempat Duduk:</label>
        <select id="tempat" name="tempat" required>
            <option value="Tribun Utara - Rp. 150.000">Tribun Utara (Rp. 150.000)</option>
            <option value="Tribun Selatan - Rp. 100.000">Tribun Selatan (Rp. 100.000)</option>
            <option value="VIP - Rp. 300.000">VIP (Rp. 300.000)</option>
        </select><br><br>

        <label for="pembayaran">Metode Pembayaran:</label><br>
        <input type="radio" id="tunai" name="pembayaran" value="Tunai" required>
        <label style="margin: 0;" for="tunai">Tunai</label><br>
        <input type="radio" id="ewallet" name="pembayaran" value="E-Wallet" required>
        <label style="margin: 0;" for="ewallet">E-Wallet</label><br><br>

        <input type="submit" value="Kirim"><br><br>
        <a href = "/">Back</a>
    </form>
</body>
</html>
