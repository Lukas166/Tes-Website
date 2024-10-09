var totalKeseluruhan = 0;

function hitungTotal() {
    var nama = document.getElementById('nama').value;
    var jumlah = document.getElementById('jumlah').value;
    var hargaSatuan = document.getElementById('hargaSatuan').value;

    if (hargaSatuan < 0){
        alert('Harga tidak boleh dibawah 0');
        return;
    }

    if (nama && jumlah && hargaSatuan){
        document.getElementById('hasil').style.display = 'block';
        var hasilTempat = document.getElementById('hasilTempat');

        var total = jumlah*hargaSatuan;
        var newRow = document.createElement('tr');

        var namaColumn = document.createElement('td');
        namaColumn.textContent = nama;
        newRow.appendChild(namaColumn);

        var jumlahColumn = document.createElement('td');
        jumlahColumn.textContent = jumlah;
        newRow.appendChild(jumlahColumn);

        var satuanColumn = document.createElement('td');
        satuanColumn.textContent = 'Rp. ' + hargaSatuan + ',-';
        newRow.appendChild(satuanColumn);

        var totalColumn = document.createElement('td');
        totalColumn.textContent = 'Rp. ' + total + ',-';
        newRow.appendChild(totalColumn);

        hasilTempat.appendChild(newRow);

        totalKeseluruhan += total;
        document.getElementById('totalKeseluruhan').innerText = 'Total Keseluruhan = Rp. ' + totalKeseluruhan + ',-';

        document.getElementById('nama').value = '';
        document.getElementById('jumlah').value = '';
        document.getElementById('hargaSatuan').value = '';
    }
    else{
        alert('Data masih ada yang kosong!');
    }
}
