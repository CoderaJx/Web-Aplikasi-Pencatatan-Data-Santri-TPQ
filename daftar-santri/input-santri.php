<?php 

include '../koneksi.php';

$nis = $_POST['nis'];
$password = $_POST['password'];

$nama = $_POST['nama_santri'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$nama_ortu = $_POST['nama_ortu'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$kelas = $_POST['kelas'];

$level = "wali";

mysqli_query($koneksi, "INSERT INTO santri VALUES('$nis','$nama','$ttl','$alamat','$kelas','$nama_ortu','$pekerjaan_ortu')");

//input password tabel login
mysqli_query($koneksi, "INSERT INTO login VALUES('', '$nis','$password','$nama', '$level')");

echo "
<script>alert('Data Berhasil Di Simpan'); window.location.href = 'daftar_santri.php?pesan=ya';</script>";



 ?>