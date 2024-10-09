<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="tugas_03a/style.css">
</head>
<body>
    <div class="header">
        <a href = "/">Back</a>
        <b style="font-size: 2.5vw;">Konversi Suhu</b>
    </div>
    
    <div class="container">
        <label for="suhuAwal">Pilih satuan suhu awal:</label>
        <select id="suhuAwal">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="reamur">Reamur</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>

        <label for="angkaSuhu">Masukkan suhu awal:</label>
        <input type="number" id="angkaSuhu" required><br><br>

        <label for="suhuTarget">Pilih satuan suhu tujuan:</label>
        <select id="suhuTarget">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="reamur">Reamur</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>
        
        <button onclick="convertTemperature()">Konversi</button>
    </div>
    <div>
        <h2 id="hasil"></h2>
    </div>

    <script>
        function convertTemperature() {
            var suhuAwal = document.getElementById('suhuAwal').value;
            var angkaSuhu = parseFloat(document.getElementById('angkaSuhu').value);
            var suhuTarget = document.getElementById('suhuTarget').value;

            function konversiKeCelcius(angkaSuhu, suhuAwal) {
                switch (suhuAwal) {
                    case 'celsius':
                        return angkaSuhu;
                    case 'fahrenheit':
                        return (angkaSuhu - 32)*5/9;
                    case 'reamur':
                        return angkaSuhu*5/4;
                    case 'kelvin':
                        return angkaSuhu-273.15;
                }
            }

            function konversiSuhu(angkaSuhu, suhuTarget) {
                switch (suhuTarget) {
                    case 'celsius':
                        return angkaSuhu;
                    case 'fahrenheit':
                        return (angkaSuhu * 9/5) + 32;
                    case 'reamur':
                        return angkaSuhu*4/5;
                    case 'kelvin':
                        return angkaSuhu + 273.15;
                }
            }

            var tempCelcius = konversiKeCelcius(angkaSuhu, suhuAwal);
            var hasil;
            hasil = konversiSuhu(tempCelcius, suhuTarget);

            if (hasil || hasil == 0){
                document.getElementById('hasil').innerText = 'Hasil Konversi: ' + hasil.toFixed(2) + ' ' + suhuTarget;
            }
            else{
                alert('Data masih ada yang kosong');
            }
        }
    </script>
</body>
</html>
