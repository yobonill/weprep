<div id="login">
	<form action="core/controllers/login.controller.php" method="POST" class="form-horizontal" role="form">
		<!-- <h3 class="text-center"></h3> -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<h3><?= $language['__TITLE_LOGIN__'] ?><h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-xs-12 text-center">
								<label for="usr"><?= $language['__USERNAME_LOGIN__'] ?></label>
								<input type="text" name="user" id="inputUsr" class="form-control text-center" value="" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12 text-center">
								<label for="pass"><?= $language['__USERPASS_LOGIN__'] ?></label>
								<input type="password" name="pass" id="inputPass" class="form-control text-center" value="" required="required">
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-md-4 col-xs-4"></div>
							<div class="col-md-4 col-xs-4 text-center">
								<button type="submit" class="btn btn-primary"><?= $language['__SUBMIT_LOGIN__'] ?></button>
							</div>
							<div class="col-md-4 col-xs-4"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</form>
</div>