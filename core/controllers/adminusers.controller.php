<?php 
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Load Configuration with config data as an array, to be able to use the directory root parameter
        require_once($_SERVER['DOCUMENT_ROOT'] . '/weprep/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root paramete

	//Require db and user model to use the functions in this file
        require_once($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
        require_once($config['__DOCUMENT_ROOT__'] . '/models/admin.model.php');
	//Require db and user model to use the functions in this file

	//Log in if the requirements are met
		//check if $_POST has the values user and pass
		if (isLogin()) {
			//run the function that logs in the user
				$result = select_users();
			//run the function that logs in the user
		} else {
            //Send the user to the index page and return a message
                header("Location: ../../?view=login&msj=notloggedin");
            //Send the user to the index page and return a message
        }
	//Log in if the requirements are met
?>