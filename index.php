<?php

include("configs.php");											//ładuje plik configs
		
	(empty($_GET["page"])) ? $url = HOME : $url = $_GET["page"];	// definuje ładowanie podstron
		
	$file = "strony/".$url.".php";
	
	
	$title = $page_name[$url];
	
	
	
		
	
	
	

include("strony/home.php");

?>