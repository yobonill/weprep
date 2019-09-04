<?php  
	//Load Configuration with config data as an array, to be able to use the directory root parameter
	    require_once($_SERVER['DOCUMENT_ROOT'] . '/arca/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root paramete

	//Require db and user model to use the functions in this file
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
	//Require db and user model to use the functions in this file

	//Check if the session is started in order to be able to log out, if not, start it
		if (!isset($_SESSION)) {
			session_start();
		}
	//Check if the session is started in order to be able to log out, if not, start it

	//Call the function logout
		logout();
	//Call the function logout

	//Return the user to the login page
		header("Location: ../../?view=login&msj=logout");
	//Return the user to the login page
?>