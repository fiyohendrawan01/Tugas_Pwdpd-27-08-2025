<?php
include "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Daftar Data Siswa</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>Alamat</th><th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td>
                <a href="edit_data.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="hapus_data.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="tambah_data.php">Tambah Data Baru</a>
</body>
</html>