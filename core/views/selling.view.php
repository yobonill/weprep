<div id="selling">
	<div class="container-fluid center">
        <div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_SELLING__']?></h1>
			</div>
		</div>
		<div class="row">
            <div class="col-md-7">
                <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3><?= $language['__TITLE_SELLING_PRODUCTS__']?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                    
                                    foreach ($products as $value):
                                    ?>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success btn-big btn-green btn-product" title=<?=$value['precio']?>>
                                                <i class="fa fa-plus-square sm-fa" aria-hidden="true"> </i>
                                                <br>
                                                <?=$value['nombre']?>
                                            </button>
                                            
                                            <input type="hidden" id=<?=$value['nombre']?> value=<?=$value['precio']?>>
                                            
                                        </div>
                                    <?php
                                    endforeach
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-5">
                <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h3><?= $language['__TITLE_SELLING_CART__']?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered text-center" id="cartTable">
                                <thead>
                                <tr class="btn-primary">
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Comentario</th>
                                </tr>
                                </thead>
                                <form action="core/controllers/billing.controller.php" method="post">
                                
                                
                                
                                    <tbody>
                                    
                                    </tbody>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>