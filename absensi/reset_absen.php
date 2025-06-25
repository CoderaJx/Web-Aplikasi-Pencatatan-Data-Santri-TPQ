<?php 

include "../koneksi.php";

mysqli_query($koneksi,"TRUNCATE TABLE absen_masuk");
echo "<script>alert('Data Berhasil di Perbarui, Silahkan Absen Untuk Hari Ini '); window.location.href = 'absen.php?pesan=ya';</script>";

 ?>