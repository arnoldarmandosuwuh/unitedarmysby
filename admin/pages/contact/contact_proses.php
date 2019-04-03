<?php
session_start();
include "../../config/koneksi.php";

$id = $_POST["id"];
$gmaps = $_POST["gmaps"];
$facebook = $_POST["fb"];
$instagram = $_POST["ig"];
$youtube = $_POST["yt"];
$twitter = $_POST["twit"];
$line = $_POST["line"];
$bbm = $_POST["bbm"];
$email = $_POST["email"];
$id_user = $_SESSION["id_user"];
$whatsapp = $_POST["wa"];
$alamat = $_POST["alamat"];
$homebase = $_POST["home"];


if ($id==""){
	$query = "insert into contact(gmaps, facebook, instagram, youtube, twitter, line, bbm, email, id_user, whatsapp, alamat, homebase) values ('$gmaps', '$facebook', '$instagram', '$youtube', '$twitter', '$line', '$bbm', '$email', $id_user, '$whatsapp', '$alamat', '$homebase')";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Insert Data Success');
		window.location='../index.php?page=contact';
		</script>";
	}
	else {
		echo "<script>
		alert('Insert Data Failed');
		window.location='../index.php?page=contact';
		</script>";
	}
}
else {
	$query = "update contact set gmaps='$gmaps',facebook='$facebook',instagram='$instagram',youtube='$youtube',twitter='$twitter',line='$line',bbm='$bbm',email='$email',id_user=id_user,whatsapp='$whatsapp',alamat='$alamat',homebase='$homebase' where id_contact=$id";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert('Insert Data Success');
		window.location='../index.php?page=contact';
		</script>";
	}
	else {
		echo "<script>
		alert('Insert Data Error');
		window.location='../index.php?page=contact';
		</script>";
	}
}
?>