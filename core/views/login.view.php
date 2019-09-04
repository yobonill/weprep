<div id="login">
	<h1 class="text-center"><?= $language['__TITLE_APPNAME__']?></h1>
	<form action="core/controllers/login.controller.php" method="POST" class="form-horizontal" role="form">
		<h3 class="text-center"><?= $language['__TITLE_LOGIN__'] ?></h3>
		<hr>
		<div class="row">
			<div class="col-md-4 col-xs-4"></div>
			<div class="col-md-4 col-xs-4 text-center">
				<label for="usr"><?= $language['__USERNAME_LOGIN__'] ?></label>
				<input type="text" name="user" id="inputUsr" class="form-control text-center" value="" required="required">
			</div>
			<div class="col-md-4 col-xs-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-4"></div>
			<div class="col-md-4 col-xs-4 text-center">
				<label for="pass"><?= $language['__USERPASS_LOGIN__'] ?></label>
				<input type="password" name="pass" id="inputPass" class="form-control text-center" value="" required="required">
			</div>
			<div class="col-md-4 col-xs-4"></div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-md-4 col-xs-4"></div>
			<div class="col-md-4 col-xs-4 text-center">
				<button type="submit" class="btn btn-primary"><?= $language['__SUBMIT_LOGIN__'] ?></button>
			</div>
			<div class="col-md-4 col-xs-4"></div>
		</div>
		<hr>
	</form>
</div>