<?php
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Add all the relevant files to be able to use the functions
		require_once ($config['__DOCUMENT_ROOT__'] . '/models/reports.model.php');
    //Add all the relevant files to be able to use the functions
    
	//Run the function that bring several tables data from the database
		if(isset($_GET['report'])){
			$report = $_GET['report'];
			if(isset($_POST['beforeDate'])){
				$bDate = $_POST['beforeDate'];
				$aDate = $_POST['afterDate'];
				$records = select_bills($report,$bDate,$aDate);
			} else {
				$bDate = date('Y-m-d');
				$aDate = date('Y-m-d');
				$records = select_bills($report,$bDate,$aDate);
			}
			
		} else {
			$report = "";
		}
	//Run the function that bring several tables data from the database
?>
