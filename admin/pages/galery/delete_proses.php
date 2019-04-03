<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
$sql = "select * from gambar where id_gambar=$id";
$hasil = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($hasil,MYSQLI_ASSOC);

if (unlink("../upload/img/".$data["link_gambar"])){
	$query = "delete from gambar where id_gambar=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Delete Data Success');
		window.location='../index.php?page=pgalery';
		</script>";
	}
	else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=pgalery';
		</script>";
	}
}
else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=pgalery';
		</script>";
	}
	
?>