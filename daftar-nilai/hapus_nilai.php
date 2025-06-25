<?php 
include '../koneksi.php';

$id = $_GET['id_nilai'];


mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai='$id'")or die(mysqli_error());

echo "<script>alert('Data Berhasil Di Hapus'); window.location.href = 'form_nilai.php?pesan=ya';</script>";
?>