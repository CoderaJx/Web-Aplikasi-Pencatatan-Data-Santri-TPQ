<?php 

include '../koneksi.php';

$nis = $_POST['nis'];
$tahfidz = $_POST['tahfidz'];
$aqidah = $_POST['aqidah'];
$fiqih = $_POST['fiqih'];
$tajwid = $_POST['tajwid'];
$mahfudlot = $_POST['mahfudlot'];
$persholatan = $_POST['persholatan'];
$imla = $_POST['imla'];
$semester = $_POST['semester'];
$tahun = $_POST['tahun'];
mysqli_query($koneksi, "INSERT INTO nilai VALUES('','$nis','$tahfidz','$aqidah','$fiqih','$tajwid','$mahfudlot','$persholatan','$imla','$semester','$tahun')");
mysqli_query($koneksi, "INSERT INTO log VALUES('','$nis','$tahfidz','$aqidah','$fiqih','$tajwid','$mahfudlot','$persholatan','$imla','$semester','$tahun')");

echo "
<script>alert('Data Berhasil Di Simpan'); window.location.href = 'form_nilai.php?pesan=ya';</script>";



 ?>