<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
    <style>
        body {
            background-color: #007bff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     /* Mengatur ratakan konten ke kanan */
}



        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            flex: 1;
            font-weight: bold;
            color: #555;
        }

        .input-field {
            flex: 2;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .input-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .short {
            width: calc(50% - 5px);
        }

        .submit-button {
    padding: 12px 20px; /* ubah padding sesuai kebutuhan */
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: inline-block; /* Mengatur menjadi inline-block */
}

.submit-button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>BIODATA</h2>
        <form action="functions.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" class="input-field short">
            </div>
            
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="input-field">
            </div>
            
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="input-field">
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="input-field">
            </div>
            
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                <label for="laki_laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
            
            <div class="form-group">
                <label for="hobi">Hobi:</label>
                <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
                <label for="membaca">Membaca</label>
                <input type="checkbox" id="menulis" name="hobi[]" value="Menulis">
                <label for="menulis">Menulis</label>
            </div>
            <!-- Tambahkan pilihan hobi lainnya sesuai kebutuhan -->
            
            <div class="form-group">
                <label for="agama">Agama:</label>
                <select id="agama" name="agama" class="input-field">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <!-- Tambahkan pilihan agama lainnya sesuai kebutuhan -->
                </select>
            </div>
            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" class="input-field">
            </div>
            
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan" rows="4" class="input-field"></textarea>
            </div>
            
            <input type="submit" value="Submit" class="submit-button">
        </form>
    </div>
</body>
</html>
