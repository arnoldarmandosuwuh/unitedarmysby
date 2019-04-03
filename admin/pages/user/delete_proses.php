<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
	$query = "delete from tuser where id_user=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Delete Data Success');
		window.location='../index.php?page=user';
		</script>";
	}
	else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=user';
		</script>";
	}
?>