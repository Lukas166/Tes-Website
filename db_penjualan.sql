CREATE db_penjualan;

use db_penjualan;

CREATE TABLE penjualan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    jumlah INT NOT NULL,
    harga INT NOT NULL,
    tanggal DATE NOT NULL
);

INSERT INTO penjualan (nama_barang, jumlah, harga, tanggal) VALUES
('Komik', 10, 100000, '2024-09-29'),
('DVD', 5, 200000, '2024-09-29'),
('Figur', 20, 500000, '2024-09-29'),
('Makanan ringan', 10, 10000, '2024-09-29'),
('Game', 20, 300000, '2024-09-29');