<?php
include "../../config/koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['uname'];
$pass = $_POST['pass'];
$password = md5($_POST['pass']);
$level = $_POST['level'];

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("y"));
$tglsekarang = date("Y-m-d", $tanggal);


if ($id==""){
	$query = "insert into tuser (nama_user,username,password_user,leveluser, user_created)
			 values ('$name','$username','$password','$level','$tglsekarang')";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Insert Data Success');
		window.location='../index.php?page=user';
		</script>";
	}
	else {
		echo "<script>
		alert('Insert Data Failed');
		window.location='../index.php?page=user';
		</script>";
	}
}
else {
	$sql = "select * from tuser where id_user=$id";
	$hasil = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($hasil,MYSQLI_ASSOC);

	if ($pass == $row['password_user']){
		$password = $pass;
	}
	$query = "update tuser set nama_user='$name', username='$username',password_user='$password',leveluser='$level',user_updated='$tglsekarang' where id_user=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Insert Data Success');
		window.location='../index.php?page=user';
		</script>";
	}
	else {
		echo "<script>
		alert('Insert Data Error');
		window.location='../index.php?page=user';
		</script>";
	}
}
?>