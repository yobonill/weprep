<?php  
	//Load Configuration with config data as an array, to be able to use the directory root parameter
	    require_once($_SERVER['DOCUMENT_ROOT'] . '/weprep/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root paramete

	//Require db and user model to use the functions in this file
		require_once($config['__DOCUMENT_ROOT__'] . '/models/admin.model.php');
		require_once($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
	//Require db and user model to use the functions in this file

	//Check if the session is started in order to be able to log out, if not, start it
		if (!isset($_SESSION)) {
			session_start();
		}
	//Check if the session is started in order to be able to log out, if not, start it

	//Call the function for deleting the user if it is admin
		if (isAdmin()) {
			$id = $_GET['id'];
			delete_client($id);
		} else {
			//Send the user to the index page and return a message
				header("Location: ../../?view=login&msj=notloggedin");
			//Send the user to the index page and return a message
		}
	//Call the function for deleting the user if it is admin

	//Return the user to the adminusers page
		header("Location: ../../?view=adminclients&msj=clientdeleted");
	//Return the user to the adminusers page
?>