<div class="admin">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
                <a  data-toggle='modal'  href='#addUser' class="addUser"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
				<h1><?= $language['__TITLEUSER_ADMIN__']?></h1>
			</div>
        </div>
        <div class="row text-center">
            <div class="table-responsive ">
                <table class="table table-hover">
                    <thead >
                        <tr>
                            <th><h3><?= $language['__NAMEUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__LASTNAMEUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__TYPEUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__USERUSER_ADMIN__'] ?></h3></th>
                            <th><h3><?= $language['__PASSUSER_ADMIN__'] ?></h3></th>
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
                                            <td><?= $value['tipo']?></td>
                                            <td><?= $value['usuario']?></td>
                                            <td><?= $value['pass']?></td>
                                            <td><a data-toggle='modal' data-target="#editUser" data-id=<?= $value['id_usuario']?> data-last=<?= $value['apellido']?> data-name=<?= $value['nombre']?> data-type=<?= $value['tipo']?> data-user=<?= $value['usuario']?> data-pass=<?= $value['pass']?> href='#editUser'><i class="fa fa-pencil" aria-hidden="true"></a></td>
                                            <td><a href="core/controllers/deleteuser.controller.php?id=<?= $value['id_usuario']?>"><i class="fa fa-trash" aria-hidden="true"></a></td>
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
        <!-- Add User -->
			<div class="modal fade" id="addUser">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_ADDUSERS_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/adduser.controller.php" method="POST" class="form text-center">	
								<div class="row"> <!-- Name and lastName -->
									<div class="col-md-6"> 
										<div class="form-group">
									    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
			    					    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="userLastName" id="userLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
										</div>
									</div>
								</div> <!-- Name and lastName -->

								<div class="row"> <!-- User, Password and Type -->
							  		<div class="col-md-4"> 
										<div class="form-group">
									    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="userUser" id="userUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
								  		</div>
			    					</div>
									<div class="col-md-4"> 
										<div class="form-group">
									    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
											<input type="password" class="form-control" name="userPass" id="userPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
								  		</div>
                                    </div>
                                    <div class="col-md-4">
							  		    <div class="form-group">
											<label for='userType'><?= $language['__USERFORM_TYPE_ADMIN__']?></label>
											<select class="form-control" name="userType">
                                                <option value="" disabled selected hidden><?= $language['__USERFORM_TYPE_ADMIN__'] ?></option>
                                                <option value="admin"><?= $language['__USERFORM_TYPEADMIN_ADMIN__'] ?></option>
                                                <option value="vendedor"><?= $language['__USERFORM_TYPEVENDEDOR_ADMIN__'] ?></option>
											</select>
										</div>
									</div>
                                </div> <!-- User, Password and Type -->
                            
							  	<button type="submit" class="btn btn-default"><?= $language['__SUBMIT__']?></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
						</div>
					</div>
				</div>
            </div>
        <!-- Add User -->
        <!-- Edit User -->
			<div class="modal fade" id="editUser">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center"><?= $language['__TITLE_EDITUSERS_ADMIN__']?></h4>
						</div>
						<div class="modal-body">
							<form action = "core/controllers/edituser.controller.php" method="POST" class="form text-center">	
								<div class="row"> <!--ID, Name and lastName -->
									<div class="col-md-1"> 
										<div class="form-group">
									    	<input type="hidden" class="form-control" name="id" id="id" placeholder="<?= $language['__IDUSER_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
									    	<label for="name"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="name" id="name" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
								  		</div>
									</div>
									<div class="col-md-5"> 
										<div class="form-group">
			    					    	<label for="lastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="lastName" id="lastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
										</div>
									</div>
									<div class="col-md-1"></div>
								</div> <!--ID, Name and lastName -->

								<div class="row"> <!-- User, Password and Type -->
							  		<div class="col-md-4"> 
										<div class="form-group">
									    	<label for="user"><?= $language['__USERFORM_USER_ADMIN__']?></label>
									    	<input type="text" class="form-control" name="user" id="user" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
								  		</div>
			    					</div>
									<div class="col-md-4"> 
										<div class="form-group">
									    	<label for="pass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
											<input type="password" class="form-control" name="pass" id="pass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
								  		</div>
                                    </div>
                                    <div class="col-md-4">
							  		    <div class="form-group">
											<label for='type'><?= $language['__USERFORM_TYPE_ADMIN__']?></label>
											<select class="form-control" name="type">
                                                <option value="" disabled selected hidden><?= $language['__USERFORM_TYPE_ADMIN__'] ?></option>
                                                <option value="ADMIN"><?= $language['__USERFORM_TYPEADMIN_ADMIN__'] ?></option>
                                                <option value="VENDEDOR"><?= $language['__USERFORM_TYPEVENDEDOR_ADMIN__'] ?></option>
											</select>
										</div>
									</div>
                                </div> <!-- User, Password and Type -->
                            
							  	<button type="submit" class="btn btn-default"><?= $language['__SUBMIT__']?></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
						</div>
					</div>
				</div>
            </div>
        <!-- Edit User -->
	<!-- Configuration Modals -->
</div>