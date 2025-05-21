<?php
require_once 'Buku.php';
$buku = new Buku();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buku->insert($_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Buku</h1>
    <form method="post">
        <input type="text" name="judul" placeholder="Judul" required>
        <input type="text" name="pengarang" placeholder="Pengarang" required>
        <input type="text" name="tahun_terbit" placeholder="Tahun Terbit" required>
        <button type="submit" class="btn">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali ke Daftar Buku</a>
    </form>
</div>
</body>
</html>
