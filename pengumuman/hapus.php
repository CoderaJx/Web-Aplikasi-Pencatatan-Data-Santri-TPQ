<?php 
include '../koneksi.php';

$id = $_GET['id_pengumuman'];


mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id_pengumuman='$id'")or die(mysqli_error());

echo "<script>alert('Data Berhasil Di Hapus'); window.location.href = 'pengumuman.php?pesan=ya';</script>";
?>