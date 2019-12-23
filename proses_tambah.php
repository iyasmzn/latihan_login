<?php
session_start();

if ( isset($_SESSION['nim']) ) {

	include 'koneksi.php';
	$nim           = $_POST['nim'];
	$nama          = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$email         = $_POST['email'];
	$alamat        = $_POST['alamat'];

	$sql = "insert into mahasiswa (nim, nama, jenis_kelamin, email, alamat) values ('$nim','$nama','$jenis_kelamin','$email','$alamat')";
	mysqli_query($connect,$sql);
	header('location:index.php');
	
} else {
	header('location:login.php');
}
?>