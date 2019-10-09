<div id="bills">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__BILLS_ADMIN__']?></h1>
			</div>
        </div>
       <!--Date selection row-->
       <div class="col-md-12 text-center">
          <form action="" method="POST" role="form">
            <!-- Allows me to select the date -->
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "<?=$bDate?>" placeholder="Desde mm/dd/yyyy">
              </div>
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="afterDate" id="afterDate" value = "<?=$aDate?>" placeholder="Hasta mm/dd/yyyy">
              </div>
            <!-- Allows me to select the date -->
              <div class="col-md-4 col-sm-4">
                <br>
                <button type="submit" class="btn btn-primary"><?= $language['__SUBMIT_LOGIN__']?></button>
              </div>
          </form>
        </div>
      <!--Date selection row-->
        <table class="table table-bordered text-center display" id="tableBills">
            <thead>
                <tr class="btn-primary">
					<th><?= $language['__CLIENT_BILL_REPORTS__']?></th>
					<th><?= $language['__BILL_DATE_REPORTS__']?></th>
					<th><?= $language['__CLIENT_NAME_REPORTS__']?></th>
					<th><?= $language['__CLIENT_ZONE_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
					<th><?= $language['__BILL_DISCOUNT_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_TOTAL_REPORTS__']?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($records as $value):
                ?>
                    <tr>
                        <td><?=$value['numero_factura']?></td>
                        <td><?=$value['fecha_factura']?></td>
                        <td><?=$value['cliente']  ?></td>
                        <td><?=$value['zona']  ?></td>
                        <td><?=$value['producto']  ?></td>
                        <td><?=$value['cantidad']  ?></td>
                        <td><?=$value['descuento']  ?></td>
						<td><?="$".(($value['precio'] * $value['cantidad']) - $value['descuento'])?></td>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
                                    
    <!-- Configuration Modals -->
		<!-- Add client -->
			<div class="modal fade" id="addClient">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_ADDCLIENT_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/addclient.controller.php" method="POST" class="form text-center">	
								<div class="row"> <!-- Name and LastName -->
									<div class="col-md-6"> 
										<div class="form-group">
									    	<label for="clientName"><?= $language['__NAMEUSER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="clientName" id="clientName" placeholder="<?= $language['__NAMEUSER_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
			    					    	<label for="clientLastName"><?= $language['__LASTNAMEUSER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="clientLastName" id="clientLastName" placeholder="<?= $language['__LASTNAMEUSER_ADMIN__']?>"> 
										</div>
									</div>
                                </div> <!-- Name and LastName -->
                                
                                <div class="row"> <!-- Phone and Zone -->
									<div class="col-md-6"> 
										<div class="form-group">
									    	<label for="clientPhone"><?= $language['__CLIENTFORM_PHONE_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="clientPhone" id="clientPhone" placeholder="<?= $language['__CLIENTFORM_PHONE_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
			    					    	<label for="clientZone"><?= $language['__CLIENTFORM_ZONE_ADMIN__']?></label>
									    	<input type="number" class="form-control" name="clientZone" id="clientZone" placeholder="<?= $language['__CLIENTFORM_ZONE_ADMIN__']?>"> 
										</div>
									</div>
                                </div> <!-- Phone and Zone -->
                                <div class="row"> <!-- Address -->
									<div class="col-md-12"> 
										<div class="form-group">
									    	<label for="clientAddress"><?= $language['__CLIENTFORM_ADDRESS_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="clientAddress" id="clientAddress" placeholder="<?= $language['__CLIENTFORM_ADDRESS_ADMIN__']?>"> 
								  		</div>
                                    </div>
                                </div> <!-- Address -->
  
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
        <!-- edit client -->
			<div class="modal fade" id="editClient">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_ADDCLIENT_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/editclient.controller.php" method="POST" class="form text-center">	
								<div class="row"> <!-- Name and LastName -->
									<div class="col-md-1"> 
										<div class="form-group">
									    	<input type="hidden" class="form-control" name="id" id="id" placeholder="<?= $language['__IDUSER_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
									    	<label for="name"><?= $language['__NAMEUSER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="name" id="name" placeholder="<?= $language['__NAMEUSER_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
			    					    	<label for="lastName"><?= $language['__LASTNAMEUSER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="lastName" id="lastName" placeholder="<?= $language['__LASTNAMEUSER_ADMIN__']?>"> 
										</div>
									</div>
									<div class="col-md-1"> </div>
                                </div> <!-- Name and LastName -->
                                
                                <div class="row"> <!-- Phone and Zone -->
									<div class="col-md-6"> 
										<div class="form-group">
									    	<label for="phone"><?= $language['__CLIENTFORM_PHONE_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="phone" id="phone" placeholder="<?= $language['__CLIENTFORM_PHONE_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
			    					    	<label for="zone"><?= $language['__CLIENTFORM_ZONE_ADMIN__']?></label>
									    	<input type="number" class="form-control" name="zone" id="zone" placeholder="<?= $language['__CLIENTFORM_ZONE_ADMIN__']?>"> 
										</div>
									</div>
                                </div> <!-- Phone and Zone -->
                                <div class="row"> <!-- Address -->
									<div class="col-md-12"> 
										<div class="form-group">
									    	<label for="address"><?= $language['__CLIENTFORM_ADDRESS_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="address" id="address" placeholder="<?= $language['__CLIENTFORM_ADDRESS_ADMIN__']?>"> 
								  		</div>
                                    </div>
                                </div> <!-- Address -->
  
							  	<button type="submit" class="btn btn-default"><?= $language['__SUBMIT__']?></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
						</div>
					</div>
				</div>
            </div>
        <!-- edit client -->
	<!-- Configuration Modals -->
</div>