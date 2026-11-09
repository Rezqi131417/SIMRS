<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
    include 'menu.php';
    ?>


    <h2>Data Pendaftaran</h2>
    <a href="pendaftaran.php" class="btn">+ Tambah Data Baru</a>

    <?php
    include 'koneksi.php';
    // Menampilkan data dari database
    $query = "SELECT * FROM pendaftaran";
    $result = mysqli_query($conn, $query);
    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Handphone</th>
                    <th>Poli</th>
                </tr>
              </thead>
              <tbody>";    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tempat_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tgl_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['jk']) . "</td>";
            echo "<td>" . htmlspecialchars($row['umur']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hp']) . "</td>";
            echo "<td>" . htmlspecialchars($row['poli']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p style='color: var(--text-muted); margin-top: 15px;'>Tidak ada data pendaftaran.</p>";
    }
    ?>

    <br>
    
</body>
</html>
