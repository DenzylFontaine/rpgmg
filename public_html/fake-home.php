<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "RPG";
?>
<?php require_once("php/headutils.php"); ?>
<body class="classy">
	<header>
		<?php require_once("php/navbar.php"); ?>
	</header>
	<!--		============================-->
	<!--start of pic carousel-->
	<!--		=============================-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!--			===============-->
		<!--			 Indicators the little circles under the carousel pics-->
		<!--			==================-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<!--			=================================-->
		<!--			this is where the carousel slides start-->
		<!--			=================================-->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide center-block img-responsive" src="images/lighter-1218248_640.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Respect</h1>
						<p>Click here to go to Dylan's page.</p>
						<p><a class="btn btn-lg btn-danger" href="artists/dylan-huling.php" role="button">Dylan Huling</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide center-block img-responsive" src="images/lighter-1218248_640.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Power</h1>
						<p>Click here to go to Jr. J's page.</p>
						<p><a class="btn btn-lg btn-danger" href="artists/jr-j.php" role="button">Jr. J</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide center-block img-responsive" src="images/lighter-1218248_640.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Glory</h1>
						<p>Click here to go to the Kings's page.</p>
						<p><a class="btn btn-lg btn-danger" href="artists/king-jones.php" role="button">King Jones</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="forth-slide center-block img-responsive" src="images/lighter-1218248_640.jpg" alt="Forth slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>"Own Yourself" -RPG</h1>
						<p>Click here to go to Authentik Lyfe's page.</p>
						<p><a class="btn btn-lg btn-danger" href="artists/authentik-lyfe.php" role="button">Authentik Lyfe</a></p>
					</div>
				</div>
			</div>
		</div>
		<!--			===============================-->
		<!--			this is where the carousel controls are(arrows on the sides of the pics)-->
		<!--			===============================-->
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
		<div class="container" id="clothes">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
			</div>
		</div>
		</br>
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<h4>Lobo Swag</h4>
					<img class="img-responsive" src="http://www.sunspel.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/4/0/4001_102_5.jpg" />
					<div class="prices">
						<p>$??.??</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--		==================-->
	<!--		section two: Music-->
	<!--		==================-->
	<section id="songs" class="music">
		<div class="container">
			<div class="homemusic">
				<iframe width="375" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/245020761&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				<iframe width="375" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229168756&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				<iframe width="375" height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/164796269&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		</div>
	</section>
	<!--				==============-->
	<!--				footer section -->
	<!--				==============-->
	<?php require_once("php/footer.php"); ?>
</body>
</html>