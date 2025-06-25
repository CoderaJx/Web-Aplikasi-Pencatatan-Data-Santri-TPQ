<?php 

session_start();

require 'koneksi.php';

$nis = $_POST['nis'];
$password = $_POST['password'];


$q = mysqli_query($koneksi, "SELECT * FROM login WHERE nis = '$nis' AND password = '$password'");


$cek = mysqli_num_rows($q);

if ($cek > 0) {
	
	$data = mysqli_fetch_assoc($q);

	//login admin
	if ($nis == "admin" && $password == "admin123"){
		session_start();
		$_SESSION['nis'] = $nis;
		$_SESSION['password'] = $password;
		echo "<script>alert('Berhasil Login'); window.location.href = 'absen.php?pesan=ya';</script>";

		//login petugas
	}elseif ($data['level']=="wali") {
		$_SESSION['nis'] = $nis;
		$_SESSION['level'] = "wali";
		echo "<script>alert('Berhasil Login, Selamat Datang ".$data['nis']." '); window.location.href = 'walimurid/absensi.php?pesan=ya';</script>";

	}else{
		echo "<script>alert('Gagal Login, Username atau Password Salah'); window.location.href = 'index.php?pesan=ya';</script>";

	}

}else{
	echo "<script>alert('Gagal Login, Username atau Password Salah'); window.location.href = 'index.php?pesan=ya';</script>";	
}

 ?>