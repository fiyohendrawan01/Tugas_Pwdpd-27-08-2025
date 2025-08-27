<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

if(empty($nama) || empty($email) || empty($alamat)){
    die("Semua field wajib diisi!");
}

$sql = "INSERT INTO siswa (nama, email, alamat) VALUES ('$nama','$email','$alamat')";
if(mysqli_query($conn, $sql)){
    echo "Data berhasil ditambahkan <br><a href='tampil_data.php'>Lihat Data</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>