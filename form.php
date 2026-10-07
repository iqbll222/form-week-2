<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2 - Form PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f7f6;
            color: #333;
        }
        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], 
        input[type="email"], 
        input[type="tel"], 
        textarea, 
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-submit {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        .hasil {
            background-color: #e9ecef;
            padding: 15px;
            border-left: 5px solid #007bff;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Input Data Pengguna</h2>
        <form method="POST" action="">
            
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" id="telepon" name="telepon" required>
            </div>

            <button type="submit" name="submit" class="btn-submit">Submit</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $telepon = htmlspecialchars($_POST['telepon']);

        echo "<div class='container hasil'>";
        echo "<h3>Hasil Data yang Dimasukkan:</h3>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Nomor Telepon:</strong> $telepon</p>";
        echo "</div>";
    }
    ?>

</body>
</html>