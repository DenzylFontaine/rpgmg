<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Home";
?>
<?php require_once("../php/headutils.php"); ?>
<form class="form-horizontal well" action="email.php">
	<div class="form-group">
		<label for="name">Name</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>
	</div>
	<div class="form-group">
		<label for="email">Email address</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="subject">Subject</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
		</div>
	</div>
	<div class="form-group">
		<label for="message">Message</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-comment" aria-hidden="true"></i>
			</div>
			<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
		</div>
	</div>
	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	<button class="btn btn-danger" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>
