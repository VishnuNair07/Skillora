 <?php 
session_start();
$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'tutorialwebsite');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $q="select * from login where username='$name'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
	while($res=mysqli_fetch_assoc($result)){
		if(password_verify($pass , $res['password'])){
			if ($res['username']=='admin') 
			{
			header("location:admin/admin_main.php");
				
			}		
		else
			{
		   $_SESSION['username']=$name;
		   header('location:index.php');
		   }
		} 
 else
 {
	 $_SESSION['error']="error";
 	header('location:login.php');

 }
}
  }
 ?>