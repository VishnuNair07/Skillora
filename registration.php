<?php 
session_start();
$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'tutorialwebsite');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $confirmPass = $_POST['confirm_password'];
 $email=$_POST['email'];
$showError = false;
 $q="select * from login where username='$name'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num > 0)
  {
 	$showError = "Username Already Exists";
 	// header('location:signup.html');
 	header('location:login.php');
 }
 else
 {
	if($pass == $confirmPass) {
		$hash = password_hash($pass , PASSWORD_DEFAULT);
		$qy="insert into login(username,password,email) values('$name','$hash','$email')";
	//  $qy = "INSERT INTO `login`(name, password, email) VALUES('$name','$pass','$email')";
 	mysqli_query($con,$qy);
 	echo "inserted";
 	// header('location:login.php');
 	header('location:index.php');
	}
	else{
		// header('location:signup.html');
		header('location:login.php');
	}
 }
 ?>