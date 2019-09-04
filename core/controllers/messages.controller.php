<?php  
	//Handles all the messages for the application
		if (isset($_GET['msj'])) {
			switch ($_GET['msj']) {
				//Default VIEW messages
					//Approved Messages

					//Approved Messages

					//Denied Messages

					//Denied Messages

					//Warning Messages

					//Warning Messages
				//Default VIEW messages

				//Login VIEW messages
					//Approved Messages
						case 'logged':
							echo 
							"<script>
								swal({
									title: 'Exito!',
									text: 'Bienvenido al sistema de AQL!',
									icon: 'success',
								})
								$('.swal-overlay').css('background-color', 'rgba(0, 255, 0, 0.514)');
							</script>";
						break;
					//Approved Messages

					//Denied Messages
						case 'wronguser':
							echo 
							"<script>
								swal({
									title: 'Error!',
									text: 'El usuario/contraseña introducido es incorrecto',
									icon: 'error',
								})
								$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
							</script>";
						break;
					//Denied Messages

					//Warning Messages
						case 'logout':
							echo 
							"<script>
								swal({
									title: 'Advertencia',
									text: 'Ha salido del sistema',
									icon: 'warning',
								})
								$('.swal-overlay').css('background-color', 'rgba(255, 69, 0, 0.514)');
							</script>";
						break;
					//Warning Messages
				//Login VIEW messages

				//Reports VIEW messages
					//Approved Messages

					//Approved Messages

					//Denied Messages

					//Denied Messages

					//Warning Messages

					//Warning Messages
				//Reports VIEW messages

				//Request VIEW messages
					//Approved Messages
						case 'recordadded':
							echo "<script> swal({
									  title: 'Exito!',
									  text: 'La informacion fue registrada correctamente',
									  icon: 'success',
									})
									$('.swal-overlay').css('background-color', 'rgba(0, 255, 0, 0.514)');
									</script>";
						break;

						case 'recordupdated':
							echo "<script> swal({
									  title: 'Exito!',
									  text: 'La informacion fue actualizada correctamente',
									  icon: 'success',
									})
									$('.swal-overlay').css('background-color', 'rgba(0, 255, 0, 0.514)');
									</script>";
						break;			
					//Approved Messages

					//Denied Messages
						case 'notAuthorized':
							echo 
								"<script> 
									swal({
										title: 'ERROR',
										text: 'Solo un supervisor/logador, puede solicitar lotes',
										icon: 'error',
									})
									$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
								</script>";
						break;
						case 'emptyfields':
							echo 
								"<script> 
									swal({
										title: 'ERROR',
										text: 'Debe seleccionar todos los campos',
										icon: 'error',
									})
									$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
								</script>";
						break;
					//Denied Messages

					//Warning Messages

					//Warning Messages
				//Request VIEW messages

				//Admin VIEW messages
					//Approved Messages
						case 'useradded':
							echo "<script> swal({
									  title: 'Exito!',
									  text: 'El usuario fue agregado correctamente',
									  icon: 'success',
									})
									$('.swal-overlay').css('background-color', 'rgba(0, 255, 0, 0.514)');
									</script>";
						break;
					//Approved Messages

					//Denied Messages
						case 'usernotadded':
							echo 
								"<script> 
									swal({
										title: 'ERROR',
										text: 'El usuario no pudo ser agregado',
										icon: 'error',
									})
									$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
								</script>";
						break;
					//Denied Messages

					//Warning Messages

					//Warning Messages
				//Admin VIEW messages
				case 'notAuthorized':
						echo "<script>
								swal({
									title: 'Error',
									text: 'Debe estar registrado para realizar esta operacion',
									icon: 'error',
							  	})
							  	$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
							  </script>";
				break;
			}
		}
	//Handles all the messages for the application
?>