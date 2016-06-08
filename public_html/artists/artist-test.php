<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "artist-test";
?>
<?php require_once(dirname(dirname(__DIR__)) . "/public_html/php/headutils.php"); ?>
	<body>
		<header>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!--left side of the navbar starts here-->
						<a class="navbar-brand" href="/public_html/index.php">RPG</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="/public_html/index.php">Home</a></li>
						</ul>
						</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artists <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/public_html/artists/dylan-huling.php">Dylan Huling</a></li>
									<li><a href="/public_html/artists/jr-j.php">Jr. J</a></li>
									<li><a href="/public_html/artists/authentik-lyfe.php">Authentik Lyf</a></li>
									<li><a href="/public_html/artists/king-jones.php">King Jones</a></li>
								</ul>
							<li><a href="#clothes">Gear<span class="sr-only"></a></li>
							<li><a href="#songs">Music</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>
	</body>