<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        Nama : <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>
        Email : <input type="email" name="email" value="<?= $data['email'] ?>" required><br><br>
        Alamat : <textarea name="alamat" required><?= $data['alamat'] ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>