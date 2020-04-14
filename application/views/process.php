<?php
$connection = mysqli_connect("127.0.0.1" , "root" , "" , "beam");
if (!$connection){
    die("Database connection failed" .mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'beam');
if (!$select_db){
    die("Database connection failed".mysqli_error($connection));
}


if (isset($_POST['admincode'])){
$admincode = $_POST['admincode'];
	$query ="select admincode
			from login
			where admincode='$admincode'";
	$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if ($count >= 1){
		if ($_POST['password']==$_POST['password1']){
			$username=mysqli_real_escape_string($connection,$_POST['username']);
			$password=mysqli_real_escape_string($connection,$_POST['password']);
			$password1=mysqli_real_escape_string($connection,$_POST['password1']);
			$sql = "INSERT INTO  login (username,password) VALUES('$username','$password')";
			if(mysqli_query($connection,$sql)){
				echo"Records added successfully.";
				header("Refresh:2;url=loginpage.php");
			}
			else{
				echo"Error : Could not connect to database." . 
				mysqli_error($connection);
				header("Refresh:2;url=registration.php");
			}
	}else{
		echo"Passwords do not match.";
		header("Refresh:2;registration.php");

		}
}else{
	echo"Your admin code is invalid.";
	header("Refresh:2; url=registration.php");
}

}

?>