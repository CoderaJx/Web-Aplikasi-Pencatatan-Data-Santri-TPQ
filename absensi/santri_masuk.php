<?php 
include '../koneksi.php';


$tanggal = date('l, d-m-Y');
$jam = date('H:i:s a');
$id = $_GET['nis'];
$status = "MASUK";

$sql = "SELECT * FROM absen_masuk WHERE nis = '$id'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	echo "<script>alert('Santri dengan NIS ".$row['nis']." telah diabsen dengan status ".$row['status']."'); window.location.href = 'absen.php?pesan=ya';</script>";
} else{
	mysqli_query($koneksi, "INSERT INTO absen_masuk VALUES ('','$id','$tanggal','$status','$jam')")or die(mysqli_error());

	echo "<script>alert('Santri Berhasil di Absen'); window.location.href = 'absen.php?pesan=ya';</script>";
}


?>