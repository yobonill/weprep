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
		//$example = select_example();
		$example = "example";
	//Run the function that bring several tables data from the database
?>
