<?php
session_start();

if ( isset($_SESSION['nim']) ) {

	include 'koneksi.php';
	$ID    = $_GET['id'];

	$sql = "DELETE FROM mahasiswa WHERE id = '$ID'";
	mysqli_query($connect,$sql);
	header('location:index.php');

} else {
	header('location:login.php');
}
?>