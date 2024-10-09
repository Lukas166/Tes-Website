<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: lightgrey;
            color: black;
        }
        tr:hover {
            background-color: #d3d3d3;
        }
    </style>
</head>
<body>
    <h1>Data Penjualan Barang</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal</th>
        </tr>

        <?php
        $host = "localhost";
        $database = "db_penjualan";
        $user = "root";
        $password = "";

        $dsn = "mysql:host=$host;dbname=$database";

        try {
            $conn = new PDO($dsn, $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $conn->query("SELECT * FROM penjualan");
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            $no = 1;
            foreach ($rows as $row) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_barang']}</td>
                        <td>{$row['jumlah']}</td>
                        <td>" . number_format($row['harga'], 0, ',', '.') . "</td>
                        <td>{$row['tanggal']}</td>
                      </tr>";
                $no++;
            }
        } catch (PDOException $e) {
            echo "Koneksi Gagal: " . $e->getMessage();
        }
        ?>
    </table><br>
    <a href = "/">Back</a>
</body>
</html>
