<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
        fieldset {
            border: none;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            border: 2px solid black;
            background-color: white;
            border-radius: 10px;
            width: 550px;
            padding: 15px;
            text-align: center;
            font-size: 200%;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        input {
            background-color: white;
            border: none;
            outline: none;
            border-bottom: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }

        label {
            font-size: 20px;
            display: block;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .container1 {
            border: 1px solid black;
            background-color: white;
            border-radius: 20px;
            width: 550px;
            padding: 15px;
            margin-bottom: 20px;
            margin: 0 auto;
        }

        button{
            margin: 0 auto;
            display: block;
            border: 1px solid black;
            background-color: white;
            border-radius: 5px;
            padding: 5px;
            width: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        a{
            display: block;
            border: 1px solid black;
            background-color: white;
            border-radius: 5px;
            padding: 5px;
            width: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            position: fixed;
        }

    </style>
</head>
<body style="background-color: rgb(217, 231, 243);">
    <header>
        <a href = "/">Back</a>
        <h1>Form Pendaftaran</h1>
    </header> <br><br>

    <main>
        <form>
            <section class="container1">
                <fieldset>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda">
                </fieldset>
            </section><br>

            <section class="container1">
                <fieldset>
                    <label for="npm">NPM</label>
                    <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda">
                </fieldset>
            </section><br>

            <section class="container1">
                <fieldset>
                    <label for="angkatan">Angkatan</label>
                    <select style="margin-left: 10px;" id="angkatan" name="angkatan">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </fieldset>
            </section><br>

            <section class="container1">
                <fieldset>
                    <label for="alamat">Alamat</label>
                    <textarea style="margin-left: 10px;" id="alamat" name="alamat" rows="4" cols="67" placeholder="Masukkan alamat Anda"></textarea>
                </fieldset>
            </section><br>

            <section class="container1">
                <fieldset>
                    <label for="kelas">Hobi</label>
                    <label><input type="checkbox" id="coding" name="hobi" value="coding"> Coding</label>         
                    <label><input type="checkbox" id="menyanyi" name="hobi" value="menyanyi"> Menyanyi</label>
                    <label><input type="checkbox" id="menulis" name="hobi" value="menulis"> Menulis</label>
                    <label><input type="checkbox" id="lainnya" name="hobi" value="lainnya"> Lainnya <input type="text" id="lainnya" name="hobi"></label>
                </fieldset>
            </section><br>

            <section class="container1">
                <fieldset>
                    <label for="file">Upload File</label>
                    <input style="border: none;" type="file" id="file" name="file">
                </fieldset>
            </section><br>
            
            <button type="submit">Kirim</button><br>
            
            <span style="display: flex; justify-content: center; font-size: 17px;">*Jangan lupa cek data dengan benar sebelum dikirim</span>
            <br>
        </form>
    </main>
</body>
</html>
