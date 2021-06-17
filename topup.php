<?php 
	include "connection.php";

  if (isset($_POST['ttopup'])) {
	$email	= $_POST['username'];
	$saldo	 = (int) $_POST['jumlah'];
    
    $qry = mysqli_query($connection,"SELECT saldo FROM users WHERE email='$email'");
    $data = mysqli_fetch_array($qry);    
    $saldo_sekarang = $data['saldo'];
    $saldo_sekarang += $saldo;

    $run = mysqli_query($connection,"UPDATE users SET saldo=$saldo_sekarang WHERE email='$email'");
    $qry1 = mysqli_query($connection,"SELECT saldo FROM users WHERE email='$email'");
    $data = mysqli_fetch_array($qry1);
    $saldo_sekarang = $data['saldo'];
		header("location:sukses.html");
}else if(isset($_POST['kembali'])){
echo "<script>history.go(-2);</script>" ;
}
else{
    
}
  ?> 
