<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pendaftaran.php" class="active">Pendaftaran</a></li>
            <li><a href="data_pendaftaran.php">Data Pendaftaran</a></li>
        </ul>
    </nav>

    <h1>Form Pendaftaran</h1>

    <form action="proses_pendaftaran.php" method="post">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama..." required>
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                    <span>Laki-laki</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    <span>Perempuan</span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" id="umur" name="umur" placeholder="Masukkan umur" min="1" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
        </div>

        <div class="form-group">
            <label for="hp">Handphone</label>
            <input type="text" id="hp" name="hp" placeholder="Masukkan No HP" required>
        </div>

        <div class="form-group">
            <label for="poli">Pilihan Poli</label>
            <select id="poli" name="poli">
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Kandungan">Poli Kandungan</option>
            </select>
        </div>

        <input type="submit" name="simpan" value="Daftar Sekarang">
    </form>
</body>
</html>

