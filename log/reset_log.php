<?php 

include "../koneksi.php";

mysqli_query($koneksi,"TRUNCATE TABLE log");
echo "<script>alert('Data Berhasil Di Reset'); window.location.href = 'log.php?pesan=ya';</script>";

 ?>