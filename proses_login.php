<?php
session_start();
include 'koneksi.php';
$nim = $_POST['nim'];
$password = $_POST['password'];

if ( !empty($nim) ) {
// if ( !empty($nim) && !empty($password) ) {
	$sql    = "select * from mahasiswa where nim=$nim";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result)>0) {
		$row    = mysqli_fetch_assoc($result);
		$_SESSION['nim'] = $row['nim'];
		
		header('location:index.php');

	} else {
	    echo 'Wrong nim or password';	
   	}
} else {
    echo 'nim or password is empty';
   
}
?>