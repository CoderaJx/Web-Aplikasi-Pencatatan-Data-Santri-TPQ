<?php 
include '../koneksi.php';

$id = $_GET['id_nilai'];


mysqli_query($koneksi, "DELETE FROM log WHERE id_nilai='$id'")or die(mysqli_error());

echo "<script>alert('Data Berhasil Di Hapus'); window.location.href = 'log.php?pesan=ya';</script>";
?>