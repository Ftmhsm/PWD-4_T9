<?php
require_once 'db.php';

class Buku {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM buku");
        return $result;
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM buku WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insert($judul, $pengarang, $tahun) {
        $stmt = $this->conn->prepare("INSERT INTO buku (judul, pengarang, tahun_terbit) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $judul, $pengarang, $tahun);
        return $stmt->execute();
    }

    public function update($id, $judul, $pengarang, $tahun) {
        $stmt = $this->conn->prepare("UPDATE buku SET judul=?, pengarang=?, tahun_terbit=? WHERE id=?");
        $stmt->bind_param("sssi", $judul, $pengarang, $tahun, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM buku WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
