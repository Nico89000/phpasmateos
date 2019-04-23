<?php  
namespace tabapp\divers;

class Outils{

	public static function headerHTML($titre){
		echo '<!DOCTYPE html>
		<html lang="fr">
		<head>
		<meta charset="UTF-8">
		<title>'.$titre.'</title>
		<link href="CSS/style.css" rel="stylesheet" type="text/css">
		</head>
		<body>';
	}
	public static function footerHTML(){
		echo "</body></html>";	

	}
}



?>