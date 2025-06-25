<?php 
include '../koneksi.php';

$id = $_GET['nis'];


mysqli_query($koneksi, "DELETE FROM santri WHERE nis='$id'")or die(mysqli_error());

echo "<script>alert('Data Berhasil Di Hapus'); window.location.href = 'daftar_santri.php?pesan=ya';</script>";
?>