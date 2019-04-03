<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
	$query = "delete from contact where id_contact=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Delete Data Success');
		window.location='../index.php?page=contact';
		</script>";
	}
	else {
		echo "<script>
		alert('Delete Data Error');
		window.location='../index.php?page=contact';
		</script>";
	}
?>