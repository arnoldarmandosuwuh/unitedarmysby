<?php
session_start();
error_reporting(0);
include"../../config/koneksi.php";

$idg = $_POST['id'];
$id_u = $_SESSION["id_user"];
$nama = $_POST["judul"];
$caption = $_POST["caption"];

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("y"));
$tglsekarang = date("Y-m-d", $tanggal);

$image = $_FILES['gambar']['name'];
$file_basename = substr($image, 0, strripos($image, '.'));
$file_ext = substr($image, strripos($image, '.'));
$filesize = $_FILES['gambar']["size"];
$allowed_file_types = array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG');

if (in_array($file_ext,$allowed_file_types) && ($filesize < 5000000000))
{
	$filename = $tglsekarang."_".$nama . $file_ext;
	$target = "../upload/img/".$filename;
		if (file_exists($target))
		{
			// file already exists error
			unlink($target);
		}
			if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
				if ($idg==""){
				  	$query="insert into gambar(id_user, nama_gambar, caption_gambar, link_gambar, gambar_created) values ($id_u,'$nama','$caption','$filename','$tglsekarang')";		
				}
				else {
					$query="update gambar set id_user=$id_u,nama_gambar='$nama',caption_gambar='$caption',link_gambar='$filename',gambar_updated='$tglsekarang' where id_gambar=$idg";
				}
				$result=mysqli_query($conn,$query);
				if($result){
					echo "<script>
					alert('Insert Data Success');
					window.location='../index.php?page=pgalery';
					</script>";
				}
				else {
					echo "<script>
					alert('Insert Data Failed');
					window.location='../index.php?page=pgalery';
					</script>";
				}
			}
			else {
				echo "<script>
				alert('Upload Failed');
				window.location='../index.php?page=pgalery';
				</script>";
			} 		
	}
	elseif (empty($file_basename))
	{	
		// file selection error
				if ($idg==""){
				echo "<script>
				alert('File not found');
				window.location='../index.php?page=pgalery';
				</script>";		
				}
				else {
					$query="update gambar set id_user=$id_u,nama_gambar='$nama',caption_gambar='$caption',gambar_updated='$tglsekarang' where id_gambar=$idg";
				$result=mysqli_query($conn,$query);
				if($result){
					echo "<script>
					alert('Insert Data Success');
					window.location='../index.php?page=pgalery';
					</script>";
				}
				else {
					echo "<script>
					alert('Insert Data Failed');
					window.location='../index.php?page=pgalery';
					</script>";
				}
				}
	} 
	elseif ($filesize > 5000000000)
	{	
		// file size error
		echo "<script>
				alert('File is too large');
				window.location='../index.php?page=pgalery';
				</script>";
	}
	else
	{
		// file type error
		echo "<script>
				alert('File type false');
				window.location='../index.php?page=pgalery';
				</script>";
		unlink($_FILES["gambar"]["tmp_name"]);
	}
	