<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMRS | Beranda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header class="navbar">
            <div class="brand">SIMRS</div>
            <?php
            include 'menu.php';
            ?>
        </header>

        <main class="hero">
            <span class="eyebrow">Sistem Informasi Rumah Sakit</span>
            <h1>Selamat Datang di SIMRS</h1>
            <p>
                Sistem informasi pendaftaran pasien yang cepat, rapi, dan mudah digunakan.
                Pilih menu di atas atau gunakan tombol di bawah untuk melanjutkan.
            </p>

            <div class="hero-actions">
                <a href="pendaftaran.php" class="btn btn-primary">Mulai Pendaftaran</a>
                <a href="data_pendaftaran.php" class="btn btn-secondary">Lihat Data</a>
            </div>
        </main>
    </div>
</body>
</html>
