<?php
session_start();

if ( isset($_SESSION['nim']) ) {

	include 'koneksi.php';
	
	$ID            = $_POST['id'];
	$nim           = $_POST['nim'];
	$nama          = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$email         = $_POST['email'];
	$alamat        = $_POST['alamat'];

	$sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', email = '$email', alamat = '$alamat' WHERE id = '$ID'";
	mysqli_query($connect,$sql);
	header('location:index.php');

} else {
	header('location:login.php');
}
?>