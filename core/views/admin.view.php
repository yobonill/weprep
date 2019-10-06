<div class="admin">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_ADMIN__']?></h1>
			</div>
		</div>
		<div class="row">
			<?php //if (isDispatcher()): ?>
				<div class="col-md-3 col-xs-12">
					<a href="?view=adminusers"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-user personal-fa" aria-hidden="true"> </i> <br><?= $language["__USERS_ADMIN__"]?></button></a>
				</div>
				<div class="col-md-3 col-xs-12">
					<a href="?view=adminproducts"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-cutlery personal-fa" aria-hidden="true"> </i> <br><?= $language["__PRODUCTS_ADMIN__"]?></button></a>
				</div>
				<div class="col-md-3 col-xs-12">
					<a href="?view=adminclients"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-users personal-fa" aria-hidden="true"> </i> <br><?= $language["__CLIENTS_ADMIN__"]?></button></a>
				</div>
				<div class="col-md-3 col-xs-12">
					<a href="?view=adminbills"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-usd personal-fa" aria-hidden="true"> </i> <br><?= $language["__BILLS_ADMIN__"]?></button></a>
				</div>
			<?php //endif ?>	
		</div>
	</div>
</div>