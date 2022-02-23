<?php
include 'koneksi.php';

$email = $_POST['email'];
$login = mysqli_query($konek, "SELECT * FROM admin where email='$email'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:index.php");
    }else{
    	 header("location:Login.php");
}
?>