<?php 
$koneksi = mysqli_connect("localhost","root","","data_desa");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>