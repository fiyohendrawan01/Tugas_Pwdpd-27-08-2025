<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "Data berhasil dihapus <br><a href='tampil_data.php'>Kembali</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>