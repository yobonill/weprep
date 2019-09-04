<?php
	//We define the SMTP from where the email will be sent
		ini_set("SMTP","hbiexchsmtp-vip.res.hbi.net");
		ini_set("smtp_port","25");
		ini_set("sendmail_from","specreports@hanes.com");
		ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
	//We define the SMTP from where the email will be sent

	//Fill the mail with the information needed
		$from = "no-reply@hanes.com"; // sender
		$subject = "";
		$message = "";
	//Fill the mail with the information needed

	// message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 200);
	// message lines should not exceed 70 characters (PHP rule), so wrap it

	// send the mail
		// mail("Yorki.Bonilla@hanes.com",$subject,$message,"From: $from\n");
		// mail("Yorki.Bonilla@hanes.com, Junior.padilla@hanes.com",$subject,$message,"From: $from\n"); // <-- San Isidro
		mail("Yorki.Bonilla@hanes.com, Joel.Gonzalez@hanes.com",$subject,$message,"From: $from\n"); // <-- Las Americas
	// send the mail

	// header("location: http://localhost/projects/especificationNew/garmentla/?view=actual") // <-- Test Locally
	// header("location: http://10.106.2.130/pagina_de_especificaciones/san_isidro/garment/?view=actual") // <--San Isidro
	header("location: http://10.106.2.130/pagina_de_especificaciones/las_americas/garment/?view=actual") // <--Las Americas
?>