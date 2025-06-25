<?php 

include '../koneksi.php';

$id = $_POST['id_nilai'];
$tahfidz = $_POST['tahfidz'];
$aqidah = $_POST['aqidah'];
$fiqih = $_POST['fiqih'];
$tajwid = $_POST['tajwid'];
$mahfudlot = $_POST['mahfudlot'];
$persholatan = $_POST['persholatan'];
$imla = $_POST['imla'];
$semester = $_POST['semester'];
$tahun = $_POST['tahun'];
mysqli_query($koneksi, "UPDATE nilai SET tahfidz='$tahfidz', aqidah='$aqidah', fiqih='$fiqih', tajwid='$tajwid', mahfudlot='$mahfudlot', persholatan='$persholatan', imla='$imla', semester='$semester', tahun='$tahun' WHERE id_nilai='$id'");
mysqli_query($koneksi, "UPDATE log SET tahfidz='$tahfidz', aqidah='$aqidah', fiqih='$fiqih', tajwid='$tajwid', mahfudlot='$mahfudlot', persholatan='$persholatan', imla='$imla', semester='$semester', tahun='$tahun' WHERE id_nilai='$id'");

echo "
<script>alert('Data Berhasil Di Update'); window.location.href = 'form_nilai.php?pesan=ya';</script>";



 ?>