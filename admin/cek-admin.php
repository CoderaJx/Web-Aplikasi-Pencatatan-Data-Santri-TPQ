<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin123"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		echo "<script>alert('Berhasil Login'); window.location.href = '../absensi/absen.php?pesan=ya';</script>";
} else{
	echo "<script>alert('Gagal Login, Username atau Password Salah'); window.location.href = '../index.php?pesan=ya';</script>";
}

 ?>