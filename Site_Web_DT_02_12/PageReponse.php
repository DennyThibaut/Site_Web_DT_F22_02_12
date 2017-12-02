<!DOCTYPE HTML>


<HTML>

	<head>
		<title> ReceptionForm </title>
		<meta charset="utf8">
		<link rel="stylesheet" href="css/style2.css" />
	</head>

	<body>
		<h1> Réception du formulaire !</h1> 
		<br/><br/> 
		<?php 

			$Nom = $_POST['Nom'];
			$Prenom = $_POST['Prenom'];
			$Civi = $_POST['Civilite'];
			switch($Civi){
				case "Homme" :
					echo '<style type="text/css">
					body{
						background-color:blue;
					}
					</style>';
				break;
				case "Femme" :
					echo '<style type="text/css">
						body{
							background-color:pink;
						}
					</style>';
				break;
			}
			?>
			<div id="test">
			<?php
			echo "Bonjour $Nom $Prenom, vous êtes un(e) $Civi ! ";
			?>
			</div>
		<br/><br/>
		<div id="test3">
		<a href="Accueil.php">Retourner à l'Accueil </a>
		</div>
		<br/><br/>

    <input type="button" onClick="window.location='PageClasse.php'" name="Classe" value="Classe"><br/>

		<div id="test2">
		<?php	
	if (isSet($_COOKIE['compteur'])){
		$message = "Vous êtes déjà venu {$_COOKIE['compteur']} fois </BR>";
		$valeur = $_COOKIE['compteur'] + 1;
	}else{
		$message = "Bonjour, c'est votre première visite";
		$valeur = 1;
	}
	SetCookie ("compteur", $valeur);

	echo $message;

	$date = date("d-m-Y H:i:s");  
	SetCookie("DateDeCo", $date);
	echo $date;
?>
	</div>
	<input type="button" onClick="window.location='PageClasse.php'" name="Connexion" value="Connexion"><br/>

	</body>


</HTML>