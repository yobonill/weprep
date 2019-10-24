<?php
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Add all the relevant files to be able to use the functions
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/admin.model.php');
    //Add all the relevant files to be able to use the functions
    
	//Run the function that bring several tables data from the database
		$products = select_products();
		$clients = select_clients();
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$result = select_bills($id);
			//var_dump($result);
			$nombre = $result[0]['nombre'];
			$apellido = $result[0]['apellido'];
			$billDate = $result[0]['fecha_factura'];
		} else {
			$nombre = "a";
			$nombre = "b";
			$billDate = date('Y-m-d');
		}
	//Run the function that bring several tables data from the database
?>
