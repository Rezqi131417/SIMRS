<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include 'menu.php';
    ?>

    <h1>Form Tambah Data User</h1>

    <form action="proses_tambahuser.php" method="post">
        <div class="form-group">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama..." required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select id="level" name="level">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="Y">Aktif</option>
                <option value="N">Nonaktif</option>
            </select>
        </div>
        
        
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>

