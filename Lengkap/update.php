<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update data set nama='$nama', nik='$nik', alamat='$alamat' where id='$id'");
header("location:berhasil_login.php");
 
?>