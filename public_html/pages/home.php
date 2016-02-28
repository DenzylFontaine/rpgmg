<!DOCTYPE html>
<html>
	<head lang ="en">
		<title></title>
		<meta charset="utf-8"/>
		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		​
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
		​
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
		​
		<!-- LOAD OUR CUSTOM STYLESHEET HERE!!11! -->
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
		​
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		​
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		​
		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
<!--			==========================-->
<!--			beginning of the navbar-->
<!--			==========================-->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
<!--						left side of the navbar starts here-->
						<a class="navbar-brand" href="#">RPG</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/home.php">Home</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artists <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Dylan Huling</a></li>
									<li><a href="#">Junior J</a></li>
									<li><a href="#">Authentik Lyf</a></li>
									<li><a href="#">King Jones</a></li>
								</ul>
							<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/clothes.php">Gear<span class="sr-only"></a></li>
							<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/artists.php">Music</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>
<!--		============================-->
		<!--start of pic carousel-->
<!--		=============================-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			 Indicators
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class=""></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item">
					<img class="first-slide" src="http://cdn.bmwblog.com/wp-content/uploads/bmw-i8-pure-impulse-package-02.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Respect</h1>
							<p>Click here to go to Dylan's page.</p>
							<p><a class="btn btn-lg btn-danger" href="#" role="button">Dylan Huling</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="http://www.landroverusa.com/Images/L494_16_EXT_LOC02_AUTO_04_ms_1_293-182901_450x259.jpg?v=2" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Power</h1>
							<p>Click here to go to Junior J's page.</p>
							<p><a class="btn btn-lg btn-danger" href="#" role="button">Junior J</a></p>
						</div>
					</div>
				</div>
				<div class="item active">
					<img class="third-slide" src="http://www.topgear.com/sites/default/files/styles/fit_1960x1102/public/news/carousel/2015/04/Large%20Image_10190.jpg?itok=Lgxsgsdk" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Glory</h1>
							<p>Click here to go to kings's page.</p>
							<p><a class="btn btn-lg btn-danger" href="#" role="button">King Jones</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
<!--		=========================-->
<!--		section one: clothes-->
<!--		=============================-->
		<section class="scrolling">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h5>Hobo Swag</h5>
						<img src="greyshirt.jpg" />
						<p>$??.??</p>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>