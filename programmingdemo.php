<?php 
	 session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Skillora</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css?v=<?php echo time(); ?>">


	<!-- <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"> -->




	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.navbar
{
	padding: 12px 0px;
	background-color:  rgba(0, 0, 0, 0.75) !important;
	border-bottom: none !important;
	transition: all 0.5s ease-in-out; 
}

ul li a 
{
  color: #fffffe!important;
	font-weight: bold;
	margin: 2px 12px;
	text-transform: uppercase;
	letter-spacing: 1px;
	transition: all 0.1s ease-in;
	position: relative;
    z-index: 2;
    font-size: 16px;
    color: #f1f1f1;
    /* width: 100%; */
    padding: 0;
    letter-spacing: 1px;
    font-family: 'Source Sans Pro', sans-serif;
}

ul li a:hover
{
	border-bottom: 3px solid #5c9f24;
}
.navbar-toggle
{
	border:1px solid #000 !important;
	transition: all 0.5s ease-in;
}
.navbar-toggle:hover
{
	background-color:#5c9f24 !important;
}

/* #our-location
{
	border: 1px solid #000 ;
	border-radius: 45px;
	padding: 12px 12px 12px 12px;
	background: #6246ea !important;

} */

#our-location {
  appearance: none;
  background-color: #5c9f24;
  border-radius: 5px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-width: 0;
  outline: none;
  padding: 14px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
}

#our-location:disabled {
  pointer-events: none;
}

#our-location:active {
  box-shadow: none;
  transform: translateY(0);
}


.navbar-inverse
{
	background-color:  rgba(0, 0, 0, 0.75) !important;
}

.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: inline-block; 
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}


.div1 img           /* for title image*/
{
	margin-top: 10%;
	margin-left:10%;
	border-radius: 15px;
   position: relative;
    height: 500px;
    width: 1263px;
}
@media (max-width: 1300px) {
	.div1 img           /* for title image*/
{
	margin-top: 10%;
	margin-left:4%;
	border-radius: 15px;
   position: relative;
    height: 477px;
    width: 1054px;
}
  
  }
  @media (max-width: 375px) {
	.div1 img           /* for title image*/
{
	margin-top: 10%;
	margin-left:4%;
	border-radius: 15px;
   position: relative;
    height: 477px;
    width: 1054px;
}
  }

	</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container" id="cont">
			<div class="navbar-header">
				<!-- Responsive Button -->
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="margin-top: 10px;" id="myhead"><a href="index.php">Skillora</a></h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="online_quize/quizhome.php">Quiz</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="" id="our-location" class="btn-success" ><?php echo $_SESSION['username']; ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			 </div>
		</div> 
	</nav> 
			<!---Navigation Ends	----->


 			<!---programming languages Section Start	----->
<br><br><br><br><br>
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2><b>PROGRAMMING LANGUAGES</b></h2>
 								<div class="sub-heading">
 									Following are the available programming languages <br>
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'tutorialwebsite');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 20px;">
                  <div class="latest-news-wrap">
                      <div class="news-img">
                          <img src=<?php echo $res['language_image']; ?> class="img-responsive">
                          <div class="deat">
                              <span><?php echo $res['language_name']; ?></span>
                          </div>
                      </div>

                      <div class="news-content">
                          <p>
                              <?php echo $res['language_description']; ?>
                          </p><br>
                          <a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
                      </div>
                  </div>
              </div>


		

<?php } ?>



 				</div>
 				
 			</section>


 			<!---programming languages Section ends	----->


			<!---footer Section Start	----->
			<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
        </div>
        <!-- <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div> -->
		<div class="media-icons">
			<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
			<a href="https://twitter.com/" class="fa fa-twitter"></a>
			<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			<a href="https://www.linkedin.com/in/vishnu-nair-965751223
" class="fa fa-linkedin"></a>
		</div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>

        </ul>
      
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Get started</a></li>

        </ul>
        <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Java</a></li>
          <li><a href="#">Php</a></li>
        </ul>
        <!-- <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul> -->
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">Skillora</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>


 			<!---footer Section Ends	----->
			
</body>
</html>