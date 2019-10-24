<div id="selling">
	<div class="container-fluid center">
        <div class="row">
			<div class="col-md-12 text-center title">
                <a  href='?view=adminclients' class="addClient"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
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
                                        <div class="col-md-1 col-sm-2 col-xs-4">
                                            <a href="#" class="cd-add-to-cart" data-price=<?=$value['precio']?> data-product="<?=$value['nombre']?>" data-id = <?= $value["id_producto"]?> data-position="left" data-delay="50" data-tooltip="Price <?=$value['precio']?>">
                                                <button type="button" class="btn btn-primary btn-big btn-blue btn-product" title=<?=$value['precio']?>>
                                                    <i class="fa fa-plus-square sm-fa" aria-hidden="true"> </i>
                                                    <br>
                                                    <?=$value['nombre']?>
                                                </button>
                                            </a>
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

    <form action="core/controllers/addbilling.controller.php" method="POST" role="form" id="shoppingForm">
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
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" name="date" id="inputdate" class="form-control" value="<?=$billDate?>" required="required" placeholder="Seleccione la/s fecha/s">
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                
                <span class="undo">Item removed. <a href="#0">Undo</a></span>
                </header>
                <?php if(isset($id)):?>
                    <div class="body">
                        <div class="form-group">
                            <ul id="cart-list-ul">
                                <input type="number" name="id_factura" value="<?=$id?>" hidden="">
                                <?php $counter = 1; foreach ($result as $value):?>
                                    <li class="product">
                                        <input type="text" name="product<?=$counter?>" value="<?=$value['producto']?>" hidden=""> 
                                        <input type="number" name="price<?=$counter?>" value="<?=$value['precio']?>" hidden=""> 
                                        <input type="number" name="id_producto<?=$counter?>" value="<?=$value['id_producto']?>" hidden="">
                                        <div class="product-details">
                                            <h3>
                                                <a href="#0" id="<?=$value['producto']?>"><?=$value['producto']?></a>
                                            </h3>
                                            <span class="price">$<?=$value['precio']?></span>
                                            <div class="actions">
                                                <a href="#0" class="delete-item">Eliminar</a>
                                                <div class="quantity">
                                                    <label for="cd-product-<?=$counter?>">Cant</label>
                                                    <input type="number" id="cd-product-<?=$counter?>" name="quantity<?=$counter?>" value="<?=$value['cantidad']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php ++$counter; endforeach;?>
                            <!-- products added to the cart will be inserted here using JavaScript -->
                            </ul>

                            <input type="text" name="counter" value="" id="counter" hidden>
                        </div>
                    </div> 
                    <script>
                        $(document).ready(function () {
                            quickUpdateCart();
                            $('.cd-cart-container').removeClass('empty');
                        });
                    </script>
                <?php else: ?>
                    <div class="body">
                        <div class="form-group">
                            <ul id="cart-list-ul">
                                <!-- products added to the cart will be inserted here using JavaScript -->
                            </ul>
                            <input type="text" name = "counter" value = '' hidden id = "counter">
                        </div>
                    </div>
                <?php endif ?>
                <footer>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="group">
                                <select name="clientName" id="clientName" class="selectpicker" required="required" data-live-search="true">
                                    <option selected="selected" disabled>Seleccione un cliente</option>
                                    <?php foreach ($clients as $value) { 
                                        if(($value['nombre'] . " " . $value['apellido']) != ($nombre . " " . $apellido)):
                                    ?>
                                        <option value=<?= $value['id_clientes']?>> <?= $value['nombre'] . " " . $value['apellido']?></option>
                                    <?php 
                                        else:
                                    ?>
                                        <option selected="selected" value=<?= $value['id_clientes']?>> <?= $value['nombre'] . " " . $value['apellido']?></option>
                                    <?php
                                        endif;
                                        }  
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="discount" name = "discount" placeholder="descuento" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <button type="submit" class="checkout btn" id="submit"><em>Checkout - $<span>0</span></em></button>
                </footer>
            </div>
            </div> <!-- .cd-cart -->
        </div> <!-- cd-cart-container -->
      <!-- Shopping Cart -->
    </form>
</div>