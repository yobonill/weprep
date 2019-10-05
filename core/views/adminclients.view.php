<div class="admin">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
                <a  data-toggle='modal'  href='#addClient' class="addClient"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
				<h1><?= $language['__CLIENTS_ADMIN__']?></h1>
			</div>
        </div>
        <div class="row text-center">
            <div class="table-responsive ">
                <table class="table table-bordered text-center display" id="tableClients">
                    <thead >
						<tr class="btn-primary">
                            <th><h3><?= $language['__NAMEUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__LASTNAMEUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__CLIENTFORM_PHONE_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__CLIENTFORM_ADDRESS_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__CLIENTFORM_ZONE_ADMIN__'] ?></h3></th>
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
                                            <td><?= $value['apellido']?></td>
                                            <td><?= $value['telefono']?></td>
                                            <td><?= $value['direccion']?></td>
                                            <td><?= $value['zona']?></td>
                                            <td><a data-toggle='modal'  href='#editClient' data-id =<?= $value['id_clientes']?> data-last=<?= $value['apellido']?> data-name=<?= $value['nombre']?> data-phone=<?= $value['telefono']?> data-address=<?= $value['direccion']?> data-zone=<?= $value['zona']?> ><i class="fa fa-pencil" aria-hidden="true"></a></td>
                                            <td><a href="core/controllers/deleteclient.controller.php?id=<?= $value['id_clientes']?>"><i class="fa fa-trash" aria-hidden="true"></a></td>
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