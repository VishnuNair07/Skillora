<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skillora - Navbar</title>
</head>
<body>
  			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>

				<h1 style="color:#5c9f24;" id="myhead">Skillora</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">HOME</a></li>
					<li> <a href="#service">OUR SERVICE</a></li>
					<li> <a href="online_quize/quizhome.php">Quiz</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<!-- <li> <a href="#contact">Contact</a></li> -->
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

			<!---Navigation Ends----->
</body>
</html>
