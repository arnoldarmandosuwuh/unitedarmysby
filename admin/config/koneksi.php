<?php
//Koneksi kedatabase
$hostmysql="localhost";
$username_db="root";
$password_db="" ;
$database="db_uacs" ;
$conn=mysqli_connect("$hostmysql", "$username_db","$password_db", "$database") or die ("Error");
mysqli_select_db($conn, "$database") or die (mysqli_error($conn));
?>