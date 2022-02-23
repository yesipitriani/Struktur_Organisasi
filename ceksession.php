<?php
session_start();
if ($_SESSION['status'] == "") {
	echo "anda tidak berhak mengakses";
	header("location:login.php");
}
?>