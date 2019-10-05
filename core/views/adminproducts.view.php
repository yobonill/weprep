<div class="admin">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
                <a  data-toggle='modal'  href='#addProduct' class="addProduct"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
				<h1><?= $language['__PRODUCTS_ADMIN__']?></h1>
			</div>
        </div>
        <div class="row text-center">
            <div class="table-responsive ">
                <table class="table table-hover">
                    <thead >
                        <tr>
                            <th><h3><?= $language['__PRODUCTFORM_NAME_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__PRODUCTFORM_PRICE_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__EDITUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__DELETEUSER_ADMIN__'] ?></h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //Assign the values of result to the variable
                                foreach ($result as $value) {
                                    ?>
                                        <tr>
                                            <td><?= $value['nombre']?></td>
                                            <td><?= $value['precio']?></td>
                                            <td><a data-toggle='modal' data-target="#editProduct" data-id=<?= $value['id_producto']?> data-name=<?= $value['nombre']?> data-price=<?= $value['precio']?> href='#editProduct'><i class="fa fa-pencil" aria-hidden="true"></a></td>
                                            <td><a href="core/controllers/deleteproduct.controller.php?id=<?= $value['id_producto']?>"><i class="fa fa-trash" aria-hidden="true"></a></td>
                                        </tr>
                                    <?php
                                }
                            //Assign the values of result to the variable
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                                    
    <!-- Configuration Modals -->
        <!-- Add product -->
			<div class="modal fade" id="addProduct">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_ADDPRODUCT_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/addproduct.controller.php" method="POST" class="form text-center">	
								<div class="row"> <!--Name and Price -->
									<div class="col-md-6"> 
										<div class="form-group">
									    	<label for="productName"><?= $language['__PRODUCTFORM_NAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="productName" id="productName" placeholder="<?= $language['__PRODUCTFORM_NAME_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
			    					    	<label for="productPrice"><?= $language['__PRODUCTFORM_PRICE_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="<?= $language['__PRODUCTFORM_PRICE_ADMIN__']?>"> 
										</div>
									</div>
								</div> <!--Name and Price -->
  
							  	<button type="submit" class="btn btn-default"><?= $language['__SUBMIT__']?></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
						</div>
					</div>
				</div>
            </div>
        <!-- Add product -->
        <!-- Edit product -->
			<div class="modal fade" id="editProduct">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_EDITPRODUCTS_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/editproduct.controller.php" method="POST" class="form text-center">	
							<div class="row"> <!--ID, Name and Price -->
									<div class="col-md-1"> 
										<div class="form-group">
									    	<input type="hidden" class="form-control" name="id" id="id"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
									    	<label for="productName"><?= $language['__PRODUCTFORM_NAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="productName" id="productName" placeholder="<?= $language['__PRODUCTFORM_NAME_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
			    					    	<label for="productPrice"><?= $language['__PRODUCTFORM_PRICE_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="<?= $language['__PRODUCTFORM_PRICE_ADMIN__']?>"> 
										</div>
									</div>
									<div class="col-md-1"></div>
								</div> <!--ID, Name and Price -->

							  	<button type="submit" class="btn btn-default"><?= $language['__SUBMIT__']?></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
						</div>
					</div>
				</div>
            </div>
        <!-- Edit Product -->
	<!-- Configuration Modals -->
</div>