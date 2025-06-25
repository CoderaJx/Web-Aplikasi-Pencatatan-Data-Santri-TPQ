<?php 

include "../koneksi.php";

mysqli_query($koneksi,"TRUNCATE TABLE nilai");
echo "<script>alert('Data Berhasil Di Reset'); window.location.href = 'form_nilai.php?pesan=ya';</script>";

 ?>