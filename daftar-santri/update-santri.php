<?php 

include '../koneksi.php';

$id = $_POST['nis'];
$nama = $_POST['nama_santri'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$nama_ortu = $_POST['nama_ortu'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE santri SET nama_santri='$nama', ttl='$ttl', alamat='$alamat', nama_ortu='$nama_ortu', pekerjaan_ortu='$pekerjaan_ortu', kelas='$kelas' WHERE nis='$id'");

echo "
<script>alert('Data Berhasil Di Update'); window.location.href = 'daftar_santri.php?pesan=ya';</script>";

?>