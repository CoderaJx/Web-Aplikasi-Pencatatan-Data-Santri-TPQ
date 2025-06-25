<?php 

include '../koneksi.php';

$pengumuman = $_POST['pengumuman'];
$tanggal = $_POST['tanggal'];

mysqli_query($koneksi, "INSERT INTO pengumuman VALUES('','$pengumuman','$tanggal')");

echo "
<script>alert('Pengumuman berhasil diupload!'); window.location.href = 'pengumuman.php?pesan=ya';</script>";



 ?>