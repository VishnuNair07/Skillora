<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Skillora</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->


	<link rel="stylesheet" href="css/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
 

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->

 <!-- Navbar -->

<?php 
include './php/navbar.php';
?>

<!-- Navbar end -->

<!---Slider Section starts	------->

			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<!-- <a href="" class="btn1">CONTACT US</a> -->
								<a href="#myservice_section" class="btn2">Get Started</a>
							</div>
							<br><br>
					</div>
				</div>
			</section>

<!---Slider Section ends------->

<!-- Login -->

<?php 
include './php/login.php';
?>

<!-- Login end -->

<!-- ChatBot -->

<?php 
include './php/chatbot.php';
?>

<!-- ChatBot End -->

<!-- most viewed Start -->

<?php 
include './php/mostviewed.php';
?>	

<!-- most viewed End -->

<!-- Tutorials on programming languages Start-->
<?php 
include './php/tutorials.php';
?>		
<!-- Tutorials on programming languages End-->

<!---Our Services Section Start------->

<?php 
include './php/services.php';
?>		

<!---Our Services Section Ends------->


<!---FAQs Section Start------->

<?php 
include './php/FAQs.php';
?>	

<!---FAQs Section Ends------->


<!---Contact us Section Start------->


<!---Contact us Section Ends------->

<!-- footer -->

<?php
include('./php/footer.php');
?>

<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='vishnu';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>



<!-- chat bot scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/chatResponse.js"></script>
<script src="js/chat.js"></script>
<!-- chat bot scripts end -->

<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>