<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .content-border{
    width : 35rem;
 }
 

.news-content a {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 2px 5px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.news-content a:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}
.news-content a:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.news-content a:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.news-content a:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
.news-content a {
    font-size: 11px;
    background-color: #5c9f24;
    padding: 5px 8px;
    color: white;
    transition: all 0.5s ease-in;
}

.img-responsive{
    border-radius: 10px;
}

.btn5{
	margin-top : 70px;
	
}

.btn5 {
  background-color: #f8f9fa;
  list-style : none !important;
  border: 1px solid #000!important;
  border-radius: 20px;
  color: #3c4043;
  cursor: pointer;
  font-family: arial,sans-serif;
  font-size: 14px;
  height: 36px;
  line-height: 27px;
  min-width: 54px;
  padding: 0 10px;
  border-color: #dadce0;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: pre;
}

.btn5:hover {
  border-color: #5c9f24 !important;
  list-style : none !important;
  box-shadow: rgba(0, 0, 0, .1) 0 1px 1px;
  color : #5c9f24 !important;
}

.btn5:focus {
  border-color:#5c9f24 !important;
  color : #5c9f24 !important;
  outline: none;
}
</style>
<body>
<div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title">
         				<h2><b>Tutorials on programming languages</b></h2>
         			</div>
         		</div>
         	</div>

<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 20px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
									 <img src="uploadimg/JAVA.png" class="img-responsive">
 										<div class="deat"><span>Java</span> 										</div>
 									</div>

 									<div class="news-content">
                                     <p>
                                                        </p>
 										<a href="programming/java/java_programming.php?course_name=java">Start Reading...</a>
 									</div>
 								</div>
 							</div>


                             <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 20px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
                                     <img src="uploadimg/c++.png" class="img-responsive">
 										<div class="deat">
                                            <span>C++</span>								
                                        </div>
 									</div>

 									<div class="news-content">
                                     <p>
                                                        </p>
 										<a href="programming/java/java_programming.php?course_name=C++">Start Reading...</a>
 									</div>
 								</div>
 							</div>

							 <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 20px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
                                     <img src="uploadimg/javascript.jpg" class="img-responsive">
 										<div class="deat">
                                            <span>JavaScript</span>								
                                        </div>
 									</div>

 									<div class="news-content">
                                     <p>
                                                        </p>
 										<a href="programming/java/java_programming.php?course_name=Javascript">Start Reading...</a>
 									</div>
 								</div>
 							</div>

							 <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 20px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
                                     <img src="uploadimg/php.jpg" class="img-responsive">
 										<div class="deat">
                                            <span>Php</span>								
                                        </div>
 									</div>

 									<div class="news-content">
                                     <p>
                                                        </p>
 										<a href="programming/java/java_programming.php?course_name=php">Start Reading...</a>
 									</div>
 								</div>
 							</div>
                    

							 <a href="./programmingdemo.php"><button class="btn5">view all..</button></a>



</body>
</html>