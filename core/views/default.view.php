<div id="default">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_APPNAME__']?></h1>
			</div>
		</div>
		<div class="row">
			<?php //if (isDispatcher()): ?>
				<div class="col-md-6">
					<a href="#"><button type="button" class="btn btn-default btn-big"><i class="fa fa-keyboard-o big-fa" aria-hidden="true"> </i> <br><?= $language["__BUTTON1__"]?></button></a>
				</div>
				<div class="col-md-6">
					<a href="?view=inventory"><button type="button" class="btn btn-default btn-big"><i class="fa fa-book big-fa" aria-hidden="true"> </i> <br><?= $language["__BUTTON2__"]?></button></a>
				</div>
			<?php //endif ?>	
		</div>
	</div>
</div>