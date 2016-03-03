<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/
require_once(dirname(__DIR__) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>
<!DOCTYPE html>
<html>
	<head lang ="en">
		<title><?php echo $PAGE_TITLE; ?></title>
		<meta charset="utf-8"/>
		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
		<!-- LOAD OUR CUSTOM STYLESHEET HERE!!11! -->
		<link href="<?php echo $PREFIX; ?>stylesheet.css" rel="stylesheet" type="text/css" />
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
							<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/index.php">Home</a></li>
						</ul>
						</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artists <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/artists/dylan-huling.php">Dylan Huling</a></li>
									<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/artists/jr-j.php">Jr. J</a></li>
									<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/artists/authentik-lyfe.php">Authentik Lyf</a></li>
									<li><a href="https://bootcamp-coders.cnm.edu/~dfontaine1/rpgmg/public_html/pages/artists/king-jones.php">King Jones</a></li>
								</ul>
							<li><a href="#scrolling">Gear<span class="sr-only"></a></li>
							<li><a href="#music">Music</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>