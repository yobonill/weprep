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
				$idUser = $_POST['id_user'];

				if (isset($_POST['editUserCode'])) {
					$code = db_quote($_POST['editUserCode']);
				}
				if (isset($_POST['editUserLevel'])) {
					$userType = db_quote($_POST['editUserLevel']);
				}
				if (isset($_POST['editUserName'])) {
					$name = db_quote($_POST['editUserName']);
				}
				if (isset($_POST['editUserLastName'])) {
					$lastname = db_quote($_POST['editUserLastName']);
				}
				if (isset($_POST['editUserUser'])) {
					$user = db_quote($_POST['editUserUser']);
				}
				if (isset($_POST['editUserPass'])) {
					//Encript the password for better security
						$password = db_quote($_POST['editUserPass']);
					//Encript the password for better security
				}
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "UPDATE users SET code = isNull('$code', code) WHERE id_user = '$idUser'";
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

	//------------Function that allows us to add a client to the database------------
		function add_bills() {

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
			//var_dump($billId);
			//echo $billId[0];
			//Variables used for the query
				$user = $_SESSION['id_usuario'];
				$counter = $_POST['counter'];
				$clientId = db_quote($_POST['clientName']);
				$days = db_quote($_POST['days']) + 1;
				$date = db_quote($_POST['date']);
			//Variables used for the query

			Do {
				while ($counter > 0) {
					//Variables used for the query
						$productId = db_quote($_POST['id_producto'.$counter]);
						$productName = db_quote($_POST['product'.$counter]);
						$productPrice = db_quote($_POST['price'.$counter]);
						$productQuantity = db_quote($_POST['quantity'.$counter]);
						$discount = db_quote($_POST['discount']);
						$total = $productPrice * $productQuantity;
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

					//Check if the query ran correctly, if not return the error
						if($result === false) {
							$error = db_error();
							echo $error;
						}
					//Check if the query ran correctly, if not return the error
					
					$counter--;
				}
				$date = date('Y-m-d',strtotime($date . "+1 days"));
				$days--;
				$counter = $_POST['counter'];
			} while ($days > 0);
			return $result;
		}
	//------------Function that allows us to add a client to the database------------
?>