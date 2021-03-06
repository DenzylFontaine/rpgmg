<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Dylan Huling";
?>
<?php require_once(dirname(dirname(__DIR__)) . "/public_html/php/headutils.php"); ?>
	<body class="bg-city">
		<header>
			<?php require_once(dirname(dirname(__DIR__)) . "/public_html/php/navbar.php"); ?>
		</header>
<!--		==========================-->
<!--		start of the Dylan's page-->
<!--		==========================-->
		<section class="yd">
			<div class="container">
				<div class="row">
<!--					========================-->
<!--					this column is going to hold the artist name as a header and a picture-->
<!--					========================-->
					<div class="col-md-5">
						<div class="p-t-8">
							<h2>Dylan Huling</h2>
							<img class="img-responsive" src="../images/dude.jpg" />
						</div>
					</div>
<!--					=====================-->
<!--					this column is going to hold a bio and have soundcloud and twitter widgets underneath in seperate divs-->
<!--					=======================-->
						<div class="col-md-7">
							<div class="p-t-16">
								<p>And lastly, this one. Checkmate.
									Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.Oh yeah, it's that good. See for yourself.
									Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.First featurette heading. It'll blow your mind.
									Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
<!--								==================================-->
<!--								these are the sound cloud widgets -->
<!--								==================================-->
								<div class="artsound" id="songs">
									<iframe width="100%" height="100px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/245020761&amp;color=cc101d&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
								</div>
								<div class="artsound">
									<iframe width="100%" height="100px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229168756&amp;color=cc101d&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
								</div>
<!--								==========================-->
<!--								twitter widget is in here-->
<!--								========================-->
								<div class="artsound">
									<a class="twitter-timeline" href="https://twitter.com/ddenz24" data-widget-id="705497830304063489">Tweets by @ddenz24</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
	<!--				==============-->
	<!--				footer section -->
	<!--				==============-->
	<?php require_once(dirname(dirname(__DIR__)) . "/public_html/php/footer.php"); ?>
	</body>
</html>

