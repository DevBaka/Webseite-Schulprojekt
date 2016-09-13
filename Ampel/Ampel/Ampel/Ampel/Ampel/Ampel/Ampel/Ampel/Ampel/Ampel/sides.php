<?php
	
	switch($section)
	{
		case "Home":
			include("templates/Start.php");
			break;
		case "Ampel":
			include("templates/ampel.php");
			break;
		default:
			return("templates/Start.php");
			break;
			
	}


?>
