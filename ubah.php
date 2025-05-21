<?php
require_once 'Buku.php';
$buku = new Buku();
$data = $buku->getById($_GET['id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buku->update($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Ubah Buku</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required>
        <input type="text" name="pengarang" value="<?= $data['pengarang'] ?>" required>
        <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" required>
        <button type="submit" class="btn">Simpan Perubahan</button>
        <a href="index.php" class="btn btn-secondary">Kembali ke Daftar Buku</a>
    </form>
</div>
</body>
</html>
