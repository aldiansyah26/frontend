<?php 
	include "connection.php";

  if (isset($_POST['kasir'])) {
		header("location:kasir.html");
	}
	else if (isset($_POST['topup'])){
        header("location:topup.html");
	}
    else if (isset($_POST['newuser'])){
        header("location:newuser.html");
	}
    else if (isset($_POST['newproduk'])){
        header("location:kasir.html");
	}
    else{}
  ?> 
