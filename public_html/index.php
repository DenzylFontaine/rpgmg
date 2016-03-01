<!DOCTYPE html>
<html>
	<head lang ="en">
		<title></title>
		<meta charset="utf-8"/>
		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
		<!-- LOAD OUR CUSTOM STYLESHEET HERE!!11! -->
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
		<link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
									<li><a href="#">Jr. J</a></li>
									<li><a href="#">Authentik Lyf</a></li>
									<li><a href="#">King Jones</a></li>
								</ul>
							<li><a href="#scrolling">Gear<span class="sr-only"></a></li>
							<li><a href="#music">Music</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>
		<!--		============================-->
		<!--start of pic carousel-->
		<!--		=============================-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!--			 Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class=""></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class="active"></li>
			</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<img class="first-slide" src="images/lighter-1218248_640.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Respect</h1>
								<p>Click here to go to Dylan's page.</p>
								<p><a class="btn btn-lg btn-danger" href="#" role="button">Dylan Huling</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img class="second-slide" src="images/lighter-1218248_640.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Power</h1>
								<p>Click here to go to Jr. J's page.</p>
								<p><a class="btn btn-lg btn-danger" href="#" role="button">Jr. J</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img class="third-slide" src="images/lighter-1218248_640.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>Glory</h1>
								<p>Click here to go to the Kings's page.</p>
								<p><a class="btn btn-lg btn-danger" href="#" role="button">King Jones</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img class="forth-slide" src="images/lighter-1218248_640.jpg" alt="Forth slide">
						<div class="container">
							<div class="carousel-caption">
								<h1>"Own Yourself" -RPG</h1>
								<p>Click here to go to Authentik Lyfe's page.</p>
								<p><a class="btn btn-lg btn-danger" href="#" role="button">Authentik Lyfe</a></p>
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
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
					<div class="col-xs-6 col-md-4">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
					<div class="col-xs-6 col-md-4">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
				</div>
			</div>
			</br>
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
					<div class="col-xs-6 col-md-4">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
					<div class="col-xs-6 col-md-4">
							<h4>Lobo Swag</h4>
							<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
							</br>
							<p>$??.??</p>
					</div>
				</div>
			</div>
		</section>
		<!--		==================-->
		<!--		section two: Music-->
		<!--		==================-->
		<section class="music">
			<div class="soundcloud">
				<iframe  width="400" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/245020761&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				<iframe  width="400" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229168756&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				<iframe width="400" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/164796269&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		</section>
	</body>
</html>