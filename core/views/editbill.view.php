<div class="editbill">
	<div class="container center">
        <form action = "core/controllers/editclient.controller.php" method="POST" class="form text-center">
			<div class="row"> <!-- Name and LastName -->
		    	<div class="col-md-1"></div>
				<div class="col-md-5"> 
					<div class="form-group">
                        <label for="clientName"><?= $language['__NAMEUSER_ADMIN__']?></label>
                        <br>
                        <select name="clientName" id="clientName" class="selectpicker" required="required" data-live-search="true">
                            <?php foreach ($clients as $value) { ?>
                                <option value=<?= $value['id_clientes']?>> <?= $value['nombre'] . " " . $value['apellido']?></option>
                            <?php } ?>
                        </select>
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
</div>