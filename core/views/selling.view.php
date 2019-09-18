<div id="selling">
	<div class="container-fluid center">
        <div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_SELLING__']?></h1>
			</div>
		</div>
		<div class="row">
            <div class="col-md-12">
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
                                            <a href="#" class="cd-add-to-cart" data-price=<?=$value['precio']?> data-product=<?=$value['nombre']?> data-position="left" data-delay="50" data-tooltip="Price <?=$value['precio']?>">
                                                <button type="button" class="btn btn-success btn-big btn-green btn-product" title=<?=$value['precio']?>>
                                                    <i class="fa fa-plus-square sm-fa" aria-hidden="true"> </i>
                                                    <br>
                                                    <?=$value['nombre']?>
                                                </button>
                                            </a>
                                            
                                            <!-- <input type="hidden" id=<?=$value['nombre']?> value=<?=$value['precio']?>> -->
                                            
                                        </div>
                                    <?php
                                    endforeach
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
    </div>
    <!-- Shopping Cart -->
    
    <form action="addbilling.controller.php" method="POST" role="form">
       
    
        <div class="form-group">
            <label for="">label</label>
            <input type="text" class="form-control" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary"></button>
    </form>
    
        <div class="cd-cart-container empty">
            <a href="#0" class="cd-cart-trigger">
            <ul class="count"> <!-- cart items count -->
                <li>0</li>
                <li>0</li>
            </ul> <!-- .count -->
            </a>

            <div class="cd-cart">
            <div class="wrapper">
                <header>
                <div class="row">
                    <div class="col-md-6">
                        <label for="clientName">Cliente</label>
                        <select name="clientName" id="clientName" class="form-control" required="required">
                            <option value="Transeunte" selected>Transeunte</option>
                            <?php foreach ($clients as $value) { ?>
                                <option value=<?= $value['id_clientes']?>> <?= $value['nombre'] . " " . $value['apellido']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        
                        <input type="date" name="date" id="inputdate" class="form-control" value="" required="required">
                        
                    </div>
                </div>
                
                <span class="undo">Item removed. <a href="#0">Undo</a></span>
                </header>
                
                <div class="body">
                    <ul>
                        <!-- products added to the cart will be inserted here using JavaScript -->
                    </ul>
                </div>

                <footer>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" id="discount" placeholder="descuento" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="number" class="form-control" id="days" placeholder="dias">
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <a href="#0" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
                </footer>
            </div>
            </div> <!-- .cd-cart -->
        </div> <!-- cd-cart-container -->
      <!-- Shopping Cart -->
</div>