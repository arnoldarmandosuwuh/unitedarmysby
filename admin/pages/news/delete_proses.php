<?php
include "../../config/koneksi.php";

$id = $_GET['id'];

	$query = "delete from berita where id_berita=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Delete Data Success');
		window.location='../index.php?page=news';
		</script>";
	}
	else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=news';
		</script>";
	}
?>