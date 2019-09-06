<?php  
	//Load Configuration with config data as an array, to be able to use the directory root parameter
	    require_once($_SERVER['DOCUMENT_ROOT'] . '/weprep/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root paramete

	//Require db and user model to use the functions in this file
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/admin.model.php');
	//Require db and user model to use the functions in this file

	//Check if the session is started in order to be able to log out, if not, start it
		if (!isset($_SESSION)) {
			session_start();
		}
	//Check if the session is started in order to be able to log out, if not, start it

    //Call the function for deleting the user
        $id = $_GET['id'];
        delete_user($id);
	//Call the function for deleting the user

	//Return the user to the login page
		header("Location: ../../?view=adminusers&msj=userdeleted");
	//Return the user to the login page
?>