<?php
include 'config/koneksi.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$stok = $_POST['stok'];

// Eksekusi Upload File[cite: 1, 2]
$nama_file = $_FILES['sampul']['name'];
$ukuran_file = $_FILES['sampul']['size'];
$tmp_file = $_FILES['sampul']['tmp_name'];
$ext_diizinkan = array('jpg','png','jpeg');
$ext = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

// Validasi ekstensi dan ukuran (Maks 2MB)[cite: 2]
if (in_array($ext, $ext_diizinkan) === true) {
    if ($ukuran_file < 2097152) { // 2MB dalam bytes
        $nama_file_baru = time() . '_' . $nama_file;
        move_uploaded_file($tmp_file, 'uploads/'.$nama_file_baru);
        
        mysqli_query($koneksi, "INSERT INTO grimoire VALUES(NULL, '$judul', '$kategori', '$penulis', '$tahun', '$stok', '$nama_file_baru')");
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Ukuran Mana (File) terlalu besar! Maks 2MB.'); window.location='tambah_buku.php';</script>";
    }
} else {
    echo "<script>alert('Format tidak didukung! Gunakan .jpg/.png'); window.location='tambah_buku.php';</script>";
}
?>