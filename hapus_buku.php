<?php
include 'config/koneksi.php';
$id = $_GET['id'];

// Ambil nama file dari DB untuk dihapus dari folder server[cite: 1]
$query = mysqli_query($koneksi, "SELECT sampul FROM grimoire WHERE id='$id'");
$data = mysqli_fetch_array($query);
$file_path = "uploads/" . $data['sampul'];

// Hapus file gambar dari folder[cite: 1]
if (file_exists($file_path)) {
    unlink($file_path);
}

// Hapus data dari MySQL[cite: 1]
mysqli_query($koneksi, "DELETE FROM grimoire WHERE id='$id'");
header("Location: dashboard.php");
?>