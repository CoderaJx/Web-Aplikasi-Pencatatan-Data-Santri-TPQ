<?php 
include '../koneksi.php';


$tanggal = date('l, d-m-Y');
$jam = date('H:i:s a');
$id = $_GET['nis'];
$status = "PULANG";

$sql = "SELECT * FROM absen_masuk WHERE nis = '$id'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	if ($row['status'] == 'PULANG') {
		echo "<script>alert('Santri dengan NIS ".$row['nis']." telah pulang!'); window.location.href = 'absen.php?pesan=ya';</script>";
	}elseif ($row['status'] == 'TIDAK MASUK') {
		echo "<script>alert('Santri dengan NIS ".$row['nis']." TIDAK MASUK! Tidak dapat diabsen pulang'); window.location.href = 'absen.php?pesan=ya';</script>";
	}else{
		$update = "UPDATE absen_masuk SET status = '$status', tanggal = '$tanggal', jam = '$jam' WHERE nis = '$id' ";
		mysqli_query($koneksi, $update);
		echo "<script>alert('Santri Berhasil diabsen Pulang'); window.location.href = 'absen.php?pesan=ya';</script>";
	}
}else{
	echo "<script>alert('Santri dengan NIS $id tidak ada dalam data! anda harus mengabsennya masuk terlebih dahulu'); window.location.href = 'absen.php?pesan=ya';</script>";
}


?>