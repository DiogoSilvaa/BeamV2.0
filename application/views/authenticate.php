<?php
$connection = mysqli_connect('127.0.0.1','root','');
if (!$connection){
    die("Database connection Failed" .mysqli_error($connection));
	}
$select_db = mysqli_select_db($connection,'beam');
if (!$select_db){
    die("database connection failed".mysqli_error($connection));
	}
if (isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query ="select username,password
			from login
			where username='$username' and password='$password'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if ($count >= 1){
		header("Refresh:0; url=home.php");
	}
	else{
		echo"Username or password are not correct/do not exist.";
		header("Refresh:3; url=loginpage.php");
	}

}
?>