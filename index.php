<?php
require_once 'Buku.php';
$buku = new Buku();
$data = $buku->getAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="tambah.php" class="btn">+ Tambah Buku</a>
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; while ($row = $data->fetch_assoc()): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['judul']) ?></td>
                <td><?= htmlspecialchars($row['pengarang']) ?></td>
                <td><?= htmlspecialchars($row['tahun_terbit']) ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-secondary">Ubah</a>
                    <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirmHapus();">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
