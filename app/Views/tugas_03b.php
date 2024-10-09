<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kasir</title>
    <link rel="stylesheet" href="tugas_03b/style.css">
</head>
<body>
    <div class="header">
        <a href = "/">Back</a>
        <b>Form Perhitungan Kasir</b>
    </div>

    <div class="container1">
        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama"><br><br>

        <label for="jumlah">Jumlah Barang:</label>
        <input type="number" id="jumlah"><br><br>

        <label for="hargaSatuan">Harga Satuan:</label>
        <input type="number" id="hargaSatuan" min = "0"><br><br>

        <button onclick="hitungTotal()">Submit</button>
    </div><br><br>

    <div id = "hasil" style="display: none;">
        <h2>Hasil Perhitungan</h2>
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                </tr>
                <tbody id="hasilTempat">
                </tbody>
            </table>
    </div>

    <div id="totalKeseluruhan" style="text-align: center; margin-top: 20px; font-weight: bold; font-size: 1.5vw; margin-bottom: 3vw;"></div>

    <script src="tugas_03b/kasir.js"></script>
</body>
</html>
