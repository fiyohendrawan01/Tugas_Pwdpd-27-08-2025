<?php
include "koneksi.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE siswa SET nama='$nama', email='$email', alamat='$alamat' WHERE id=$id";
if(mysqli_query($conn, $sql)){
    echo "Data berhasil diupdate <br><a href='tampil_data.php'>Kembali</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>