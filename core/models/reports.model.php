<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function to get several reports data from database ------------
		function select_bills($report, $bDate = NULL, $aDate = NULL){

			switch ($report) {
                case 'sellings':
                    //Create a variable that contains the query that log in the page
					    $query = "SELECT clientes.nombre as cliente, facturacion.descuento_producto as descuento, clientes.zona as zona, GROUP_CONCAT(producto.nombre SEPARATOR '-') as producto, sum(facturacion.cantidad_producto) as cantidad, producto.precio as precio, facturacion.total_factura as total, GROUP_CONCAT(facturacion.id_factura SEPARATOR '-') as factura FROM facturacion LEFT JOIN producto ON(facturacion.id_producto = producto.id_producto) LEFT JOIN clientes ON (facturacion.id_cliente = clientes.id_clientes) WHERE facturacion.fecha_factura BETWEEN '" . $bDate . "' AND '" . $aDate . "' AND estatus_factura = 0 GROUP BY clientes.nombre, producto.nombre ORDER BY clientes.nombre";
				    //Create a variable that contains the query that log in the page
                break;

                case 'delivery':
                    //Create a variable that contains the query that log in the page
					    $query = "SELECT clientes.nombre as cliente, clientes.zona as zona, producto.nombre as producto, sum(facturacion.cantidad_producto) as cantidad, producto.precio as precio, facturacion.total_factura as total, GROUP_CONCAT(facturacion.id_factura SEPARATOR '-') as factura FROM facturacion LEFT JOIN producto ON(facturacion.id_producto = producto.id_producto) LEFT JOIN clientes ON (facturacion.id_cliente = clientes.id_clientes) WHERE facturacion.fecha_factura BETWEEN '" . $bDate . "' AND '" . $aDate . "' AND estatus_factura = 0 GROUP BY clientes.nombre, producto.nombre
					    ";
				    //Create a variable that contains the query that log in the page
                break;
            }
				
			

			//Create a variable that contains the query that log in the page
				//$query = "SELECT * FROM facturacion WHERE estatus_factura = '$status' ORDER BY numero_factura DESC";
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
	//------------Function  to get several reports data from database ------------

	//------------Function to update bills status ------------
		function update_bills($billid,$billType = 'dispatch'){

			switch ($billType) {
                case 'dispatch':
                    //Create a variable that contains the query that log in the page
					    $query = "UPDATE facturacion SET facturacion.estatus_factura = 1 WHERE id_factura = '$billid'";
				    //Create a variable that contains the query that log in the page
                break;

                case 'pack':
                    //Create a variable that contains the query that log in the page
					    $query = "";
				    //Create a variable that contains the query that log in the page
                break;
            }

			//Run the query and assign it to the variable result
				$result = db_query($query);
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
	//------------Function to update bills status ------------
?>