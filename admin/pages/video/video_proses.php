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

$video = $_FILES['video']['name'];
$file_basename = substr($video, 0, strripos($video, '.'));
$file_ext = substr($video, strripos($video, '.'));
$filesize = $_FILES['video']["size"];
$allowed_file_types = array('.mp4','.3gp','.mkv','.MP4','.3GP','.MKV');

if (in_array($file_ext,$allowed_file_types) && ($filesize < 209715200))
{
	$filename = $tglsekarang."_".$nama . $file_ext;
	$target = "../upload/video/".$filename;
		if (file_exists($target))
		{
			// file already exists error
			unlink($target);
		}
			if (move_uploaded_file($_FILES['video']['tmp_name'], $target)) {
				if ($idg==""){
				  	$query="insert into video(id_user, nama_video, caption_video, link_video, video_created) values ($id_u,'$nama','$caption','$filename','$tglsekarang')";		
				}
				else {
					$query="update video set id_user=$id_u,nama_video='$nama',caption_video='$caption',link_video='$filename',video_updated='$tglsekarang' where id_video=$idg";
				}
				$result=mysqli_query($conn,$query);
				if($result){
					echo "<script>
					alert('Insert Data Success');
					window.location='../index.php?page=vgalery';
					</script>";
				}
				else {
					echo "<script>
					alert('Insert Data Failed');
					window.location='../index.php?page=vgalery';
					</script>";
				}
			}
			else {
				echo "<script>
				alert('Upload Failed');
				window.location='../index.php?page=vgalery';
				</script>";
			} 		
	}
	elseif (empty($file_basename))
	{	

		// file selection error
		
		if ($idg==""){
		echo "<script>
				alert('File not found');
				window.location='../index.php?page=vgalery';
				</script>";	
				}
				else {
					$query="update video set id_user=$id_u,nama_video='$nama',caption_video='$caption',video_updated='$tglsekarang' where id_video=$idg";
									$result=mysqli_query($conn,$query);
				if($result){
					echo "<script>
					alert('Insert Data Success');
					window.location='../index.php?page=vgalery';
					</script>";
				}
				else {
					echo "<script>
					alert('Insert Data Failed');
					window.location='../index.php?page=vgalery';
					</script>";
				}
				}

	} 
	elseif ($filesize > 209715200)
	{	
		// file size error
		echo "<script>
				alert('File is too large');
				window.location='../index.php?page=vgalery';
				</script>";
	}
	else
	{
		// file type error
		echo "<script>
				alert('File type false');
				window.location='../index.php?page=vgalery';
				</script>";
		unlink($_FILES["gambar"]["tmp_name"]);
	}
	