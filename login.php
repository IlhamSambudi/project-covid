<?php 

session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM identitas where username ='$username' AND password = '$password'";
$login = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($login);

if($cek > 0){
	
	$data = mysqli_fetch_assoc($login);
	if($data['status']== "Positive"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Positive";
		header("location:pf.php");
	}else if($data['status']== "Negative"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "negative";
		header("location:ng.php");
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
