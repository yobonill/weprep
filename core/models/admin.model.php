<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function that allows us to add an user to the database------------
		function add_user() {
			// $password = hash('sha256', $pass); Example of encripting a password

			//Variables used for the query
				$name = db_quote(strtoupper($_POST['userName']));
				$lastname = db_quote(strtoupper($_POST['userLastName']));
				$userType = db_quote(strtoupper($_POST['userType']));
				$user = db_quote(strtoupper($_POST['userUser']));
				$password = db_quote(strtoupper($_POST['userPass']));
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "INSERT INTO usuarios (nombre, apellido, tipo, usuario, pass) VALUES ('$name', '$lastname', '$userType', '$user','$password')";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to add an user to the database------------

	//------------Function that allows us to delete an user from the database------------
		function delete_user($id) {

			//Create a variable containing the query that inserts the user into the database
				$query = "DELETE FROM usuarios WHERE id_usuario = '$id'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to delete an user from the database------------

	//------------Function that allows us to edit an user to the database------------
		function edit_user() {
			// $password = hash('sha256', $pass); Example of encripting a password

			//Variables used for the query
				$idUser = $_POST['id'];
				$name = db_quote($_POST['name']);
				$lastName = db_quote($_POST['lastName']);
				$userType = db_quote($_POST['type']);
				$user = db_quote($_POST['user']);
				$password = db_quote($_POST['pass']);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "UPDATE usuarios SET nombre = '$name', apellido = '$lastName', tipo = '$userType', usuario = '$user', pass = '$password' WHERE id_usuario = '$idUser'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to edit an user to the database------------

	//------------Function to get all the users from database ------------
		function select_users(){
			//Create a variable that contains the query that log in the page
				$query = "SELECT * FROM usuarios";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to get all the users from database ------------

	//------------Function that allows us to add a product to the database------------
		function add_product() {
			//Variables used for the query
				$productName = db_quote(strtoupper($_POST['productName']));
				$productPrice = db_quote(strtoupper($_POST['productPrice']));
			//Variables used for the query

			//Create a variable containing the query that inserts the product into the database
				$query = "INSERT INTO producto (nombre, precio) VALUES ('$productName','$productPrice')";
			//Create a variable containing the query that inserts the product into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to add a product to the database------------

	//------------Function that allows us to edit a product to the database------------
		function edit_product() {
			//Variables used for the query
				$id = $_POST['id'];
				$name = db_quote($_POST['productName']);
				$price= db_quote($_POST['productPrice']);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "UPDATE producto SET nombre = '$name', precio = '$price' WHERE id_producto = '$id'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to edit an user to the database------------

	//------------Function that allows us to delete a product from the database------------
		function delete_product($id) {

			//Variables used for the query
				$id_producto = db_quote($id);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "DELETE FROM producto WHERE id_producto = '$id_producto'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to delete a product from the database------------

	//------------Function to get all the product from database ------------
		function select_products(){
			//Create a variable that contains the query that log in the page
				$query = "SELECT * FROM producto";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to get all the product from database ------------

	//------------Function that allows us to add a client to the database------------
		function add_client() {
			//Variables used for the query
				$clientName = db_quote(strtoupper($_POST['clientName']));
				$clientLastName = db_quote(strtoupper($_POST['clientLastName']));
				$clientPhone = db_quote(strtoupper($_POST['clientPhone']));
				$clientZone = db_quote(strtoupper($_POST['clientZone']));
				$clientAddress = db_quote(strtoupper($_POST['clientAddress']));
			//Variables used for the query

			//Create a variable containing the query that inserts the client into the database
				$query = "INSERT INTO clientes (nombre, apellido, telefono,zona , direccion) VALUES ('$clientName','$clientLastName', '$clientPhone','$clientZone', '$clientAddress')";
			//Create a variable containing the query that inserts the client into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to add a client to the database------------

	//------------Function that allows us to delete a client from the database------------
		function delete_client($id) {

			//Variables used for the query
				$id_client = db_quote($id);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "DELETE FROM clientes WHERE id_clientes = '$id_client'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to delete a client from the database------------

	//------------Function to get all the client from database ------------
		function select_clients(){
			//Create a variable that contains the query that log in the page
				$query = "SELECT * FROM clientes";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to get all the client from database ------------

	//------------Function that allows us to edit a client from the database------------
		function edit_client() {
			//Variables used for the query
				$clientId = $_POST['id'];
				$clientName = db_quote(strtoupper($_POST['name']));
				$clientLastName = db_quote(strtoupper($_POST['lastName']));
				$clientPhone = db_quote($_POST['phone']);
				$clientZone = db_quote($_POST['zone']);
				$clientAddress = db_quote(strtoupper($_POST['address']));
			//Variables used for the query

			//Create a variable containing the query that inserts the client into the database
				$query = "UPDATE clientes SET nombre = '$clientName', apellido = '$clientLastName',telefono = '$clientPhone', zona = '$clientZone', direccion = '$clientAddress' WHERE id_clientes = '$clientId'";
			//Create a variable containing the query that inserts the client into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to edit a client from the database------------

	//------------Function that allows us to add a client to the database------------
		function add_bills($update = null) {

			//Delete bill with the update value if is set
				if($update != null) {
					delete_bill($update);
				}
			//Delete bill with the update value if is set

			//Get the last bill ID
				//Create a variable that contains the query that log in the page
				$billQuery = "SELECT numero_factura FROM facturacion ORDER BY numero_factura DESC LIMIT 1";
				//Create a variable that contains the query that log in the page

				//Run the query and assign it to the variable result
					$lastBill = db_select($billQuery);
				//Run the query and assign it to the variable result
				//Check if the query ran correctly, if not return the error
					if(!$lastBill) {
						$billId = 0;
						$error = db_error();
						echo $error;
					} else {
						//$billId = $lastBill["numero_factura"];
						$billId = $lastBill[0]["numero_factura"] + 1;
					}
				//Check if the query ran correctly, if not return the error
			//Get the last bill ID

			//Variables used for the query
				$user = $_SESSION['id_usuario'];
				$counter = $_POST['counter'];
				$clientId = db_quote($_POST['clientName']);
				$dates = db_quote($_POST['date']);
				$dates = explode(',', $dates);
				
			//Variables used for the query

			for ($i=0; $i < count($dates); $i++) {
				while ($counter > 0) {
					//Variables used for the query
						if (!isset($_POST['id_producto'.$counter])) { --$counter; continue; }
						$productId = db_quote($_POST['id_producto'.$counter]);
						$productName = db_quote($_POST['product'.$counter]);
						$time = strtotime($dates[$i]);
						$date = date('Y-m-d',$time);
						$productPrice = db_quote($_POST['price'.$counter]);
						$productQuantity = db_quote($_POST['quantity'.$counter]);
						if(isset($_POST['discount'])) {
							$discount = db_quote($_POST['discount']);
							if(strpos($discount, '%')){
								$discount = str_replace("%", "", $discount);
								$subtotal = ($productPrice * $productQuantity);
								$percentage = ($discount / 100) * $subtotal;
								$total = $subtotal - $discount;
							} else {
								$total = $productPrice * $productQuantity - $discount;
							}
						} else {
							$discount = 0;
							$total = $productPrice * $productQuantity - $discount;
						}
						
						
					//Variables used for the query

					//Create a variable containing the query that inserts the client into the database
						if($counter == 1) {
							$query = "INSERT INTO facturacion (numero_factura, id_usuario,id_cliente,id_producto, cantidad_producto,descuento_producto,total_factura,fecha_factura, estatus_factura) VALUES ('$billId', '$user', '$clientId','$productId','$productQuantity','$discount','$total','$date',0)";
						} else {
							$query = "INSERT INTO facturacion (numero_factura, id_usuario,id_cliente,id_producto, cantidad_producto,descuento_producto,total_factura,fecha_factura, estatus_factura) VALUES ('$billId', '$user', '$clientId','$productId','$productQuantity',0,'$total','$date',0)";
						}
					//Create a variable containing the query that inserts the client into the database	
												
						//Create a variable that runs the query
							$result = db_query($query);
						//Create a variable that runs the query
						--$counter;
					//Check if the query ran correctly, if not return the error
						if($result === false) {
							$error = db_error();
							echo $error;
						}
					//Check if the query ran correctly, if not return the error
					
					
				}
				$billId++;
				$counter = $_POST['counter'];
			}
			return $result;
		}
	//------------Function that allows us to add a client to the database------------

	//------------Function to get all the client from database ------------
		function select_bills($status=0, $kanban=0,$bDate = 0,$aDate = 0){

			if($kanban){
				//Create a variable that contains the query that log in the page
					$query = "SELECT producto.nombre, sum(facturacion.cantidad_producto) as cantidad_producto FROM facturacion LEFT JOIN producto ON(facturacion.id_producto = producto.id_producto) WHERE facturacion.fecha_factura = CURRENT_DATE AND estatus_factura = '$status' GROUP BY producto.nombre  DESC
					";
				//Create a variable that contains the query that log in the page
			} elseif($bDate == 0) {
				$query = "SELECT numero_factura, fecha_factura, clientes.nombre as nombre, clientes.apellido as apellido, facturacion.descuento_producto as descuento, clientes.zona as zona, facturacion.id_producto, producto.nombre as producto, facturacion.cantidad_producto as cantidad, producto.precio as precio, facturacion.total_factura as total, facturacion.id_factura as factura FROM facturacion LEFT JOIN producto ON(facturacion.id_producto = producto.id_producto) LEFT JOIN clientes ON (facturacion.id_cliente = clientes.id_clientes) WHERE facturacion.numero_factura = '$status'";
			} else {
				$query = "SELECT numero_factura, fecha_factura, clientes.nombre as nombre, clientes.apellido as apellido, facturacion.descuento_producto as descuento, clientes.zona as zona, producto.nombre as producto, facturacion.cantidad_producto as cantidad, producto.precio as precio, facturacion.total_factura as total, facturacion.id_factura as factura FROM facturacion LEFT JOIN producto ON(facturacion.id_producto = producto.id_producto) LEFT JOIN clientes ON (facturacion.id_cliente = clientes.id_clientes) WHERE facturacion.fecha_factura BETWEEN '" . $bDate . "' AND '" . $aDate . "' ORDER BY facturacion.fecha_factura DESC";
			}

			//Create a variable that contains the query that log in the page
				
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					echo $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to get all the client from database ------------

	//------------Function that allows us to delete a client from the database------------
		function delete_bill($id) {

			//Variables used for the query
				$id_factura = db_quote($id);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "DELETE FROM facturacion WHERE numero_factura = '$id_factura'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				echo $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to delete a client from the database------------
?>