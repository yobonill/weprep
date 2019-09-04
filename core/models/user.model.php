<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function to log into the web page ------------

	function login($user, $pass){

		//Create a variable that contains the query that log in the page
			$query = "SELECT id_user, user_type, name, lastname, user, code FROM users WHERE user = '$user' AND password = '$pass'";
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
	//------------Function to log into the web page ------------

	//------------Log out of the user------------
		function logout(){
			return session_destroy();
		}
	//------------Log out of the user------------

	//------------Check if the user is login------------
		function isLogin(){
			return isset($_SESSION['id_user']);
		}
	//------------Check if the user is login------------

	//------------Check if the user is and Admin depending on the level on the database------------
		function isAdmin(){
			if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin'){
				return true;
			} else {
				return false;
			}
		}
	//------------Check if the user is and Admin depending on the level on the database------------

?>