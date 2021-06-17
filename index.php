<?php 
	include "connection.php";

  if (isset($_POST['masuk'])) {
	$email		= $_POST['user'];
	$password	= $_POST['pass'];
	$qry = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' AND password = md5('$password')");
	$cek = mysqli_num_rows($qry);
	if($cek) {
		header("location:menu.html");
	}
	else {
		echo "<script>alert('PASSWORD dan USERNAME salah !');history.go(-1);</script>";
	}
}
  ?> 

