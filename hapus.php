<?php
require_once 'Buku.php';
$buku = new Buku();
$buku->delete($_GET['id']);
header("Location: index.php");
?>
