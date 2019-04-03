<?php
session_start();
include "../../config/koneksi.php";

$username = $_POST['user'];
$password = md5($_POST['pass']);
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("y"));
$tglsekarang = date("Y-m-d", $tanggal);

	$query = "select * from tuser where username='$username' and password_user='$password'";
	$result = mysqli_query($conn,$query);
	$cek = mysqli_num_rows($result);
	if($cek > 0){

		$query1 = "update tuser set last_login='$tglsekarang' where username='$username' and password_user='$password'";
		$result1 = mysqli_query($conn,$query1);

		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$_SESSION["id_user"] = $row['id_user'];
		$_SESSION["nama_user"] = $row['nama_user'];
		$_SESSION["username"] = $row['username'];
		$_SESSION["level"] = $row['leveluser'];

		echo "<script>
		alert('Login Success');
		window.location='../index.php?page=home';
		</script>";
	}
	else {
		echo "<script>
		alert('Username atau Password Salah');
		window.location='../index.php?page=home';
		</script>";
	}
?>