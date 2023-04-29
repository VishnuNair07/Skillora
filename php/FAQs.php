<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
</head>
<body>
    
			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									you can ask the regarding the issues.we will <br>solve that together for sure
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'tutorialwebsite');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapsed" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												Skillora is an online E-learning website <br>
												here you can learn programming languages, and improve your coding skill	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>


</body>
</html>