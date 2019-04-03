<?php
session_start();
error_reporting(0);
include"../../config/koneksi.php";

$idb = $_POST['id'];
$id_u = $_SESSION["id_user"];
$judul = $_POST["judul"];
$berita = $_POST["berita"];

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("y"));
$tglsekarang = date("Y-m-d", $tanggal);

	if ($idb==""){
		$query="insert into berita(id_user, judul_berita, berita, date_posted) values ($id_u,'$judul','$berita','$tglsekarang')";	
	}
	else {
		$query="update berita set id_user=$id_u,judul_berita='$judul',berita='$berita',date_updated='$tglsekarang' where id_berita=$idb";
		}
	$result=mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Insert Data Success');
		window.location='../index.php?page=news';
		</script>";
	}
	else {
		echo "<script>
		alert('Insert Data Failed');
		window.location='../index.php?page=news';
		</script>";
		}
?>
	