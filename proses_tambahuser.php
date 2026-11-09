
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    // proses simpan data ke database
    include "koneksi.php";
    $sql = "INSERT INTO user (username,password,fullname,level,email,status) VALUES ('$username','$password','$fullname','$level','$email','$status')";
    if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Pendaftaran User berhasil!'); window.location.href='user.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>