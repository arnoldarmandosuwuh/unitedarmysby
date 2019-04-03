<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
$sql = "select * from video where id_video=$id";
$hasil = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($hasil,MYSQLI_ASSOC);

if (unlink("../upload/video/".$data["link_video"])){
	$query = "delete from video where id_video=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Delete Data Success');
		window.location='../index.php?page=vgalery';
		</script>";
	}
	else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=vgalery';
		</script>";
	}
}
else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=vgalery';
		</script>";
	}
	
?>