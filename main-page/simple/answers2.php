
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
						<!-- Logo and responsive toggle -->
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span> Akademia</a>
						</div>
						<!-- Navbar links -->
						<div class="collapse navbar-collapse" id="navbar">
								<ul class="nav navbar-nav">
										<li style="font-size: 17px">
												<a href="javascript:history.back()">Back to Math Topics</a>
										</li>
															
			
								</ul>
								<ul class="nav navbar-nav" style="text-align: right">
								<li>
								</li>
								</ul>
								<ul class="nav navbar-nav" style="text-align: right">
					
										<li style="font-size: 17px">
					<a href="http://localhost/main-page/answers.php"> Prior Answers </a>
										</li>
				</ul>
						</div>
						<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
		</nav>

	<div id="fh5co-wrap">


		<div class="fh5co-hero" style="background-image: url(images/hero_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Solve Fractions</h1>
							<p>in the cool way, made by <a href="http://freehtml5.co">TeamLyceum</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">

						<?php
// Obtain a connection object by connecting to the db
//global $username;


echo "<h1>My Answers</h1>";

$connection = @mysqli_connect ("us-cdbr-iron-east-05.cleardb.net","bd3fcecabf9772","5d8459590dc1396","heroku_7aac2bb813d6144");

if (mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
else
{
echo "<h2>Question:Answer </h2>";
}
$query= "Select * from yang";
$resultset = mysqli_query($connection,$query);
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
echo " Question: "."\n".$row[1]." My Answer: ".$row[2]." "."<br>";

}

?>

<p><form action="services.php" method="post">

<table border="5">




</table></p>
						<ul class="fh5co-check">
							<li>Learn</li>
							<li>Practice</li>
							<li>Have Fun!!</li>
						</ul>
					</div>
					<div class="col-md-7">
						<img src="images/hangman.png" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">
						<h1> How did you do?</h1>
					</div>
				</div>
			</div>
		</div>




		<div class="fh5co-parallax" style="background-image: url(images/hero_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Learn Fractions</h1>
							<p>Fraction questions can look tricky at first, but they become easier with practice and know-how. Once you understand the fundamentals of what fractions are, you'll be breezing through fraction problems like a knife through butter. You will have to start with Step 1 and learn how to perform basic addition and subtraction, and then move on to more complex calculations. </p>
							<p>
To add or subtract fractions, make sure the denominators are the same. Multiply each of the denominators together or find a common denominator. Convert the numerator to their equal counterparts with the new denominator and then subtract/add the numerators!</p>
</div>
					</div>
				</div>
			</div>
		</div>



	</div> <!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>About Us</h3>
					<p>Akademia provides students with the content and techniques to learn and understand topics quickly and affectively.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="javascript:history.back()">Back to Math Topics</a></li>

					</ul>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2016 Free HTML5 Simple. All Rights Reserved. </small>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

