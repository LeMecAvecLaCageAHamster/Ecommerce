<link rel="shortcut icon" type="image/x-icon" href="root/ico/zqsd.ico"/>
<link rel="stylesheet" type="text/css" href="root/css/main.css">
<link rel="stylesheet" type="text/css" href="root/css/arrow.css">
<title>ZQSD.COM</title>

<div style="text-align: left;">

	<?php 
	session_start();
	require_once("arrow.php");

		if(!isset($_SESSION['pseudo'])){
			?><a href="index.php?page=4&connect=true" style="color : white;">Connection</a><br>
			<a href="index.php?page=5" style="color : white;">S'inscrire</a><br>
			<div style="text-align: center;" >
				<a href="index.php?page=0"><img src="root/ico/zqsd.com.png" title="ZQSD.COM" style="width: 200px;"></a>
				<form name="Rechercher" action="index.php" style="text-align: center;">
					<input type="hidden" name="page" value="3">
					<input type="search" name="search" style="width: 300px;height: 40px;font-size: 25px;">
					<input type="submit" value="Rechercher un jeu" class="button">
				</form><br>
			</div>
			<?php
		}else{
			echo "Bonjour, ".$_SESSION['pseudo'];
			?><br><a href="index.php?page=4&connect=false" style="color : white;">Déconnection</a><br>

			<div style="text-align: center;" >
				<a href="index.php?page=0"><img src="root/ico/zqsd.com.png" title="ZQSD.COM" style="width: 200px;"></a>
			</div>

			<br>

			<form name="Rechercher" action="index.php" style="text-align: center;">
				<input type="hidden" name="page" value="3">
				<input type="search" name="search" style="width: 300px;height: 40px;font-size: 25px;">
				<input type="submit" value="Rechercher un jeu" class="button">
			</form><br>


			<?php
		}

		if(isset($_SESSION['pseudo']))
		{
			if($_SESSION['admin'] == 1){
				?>
					<br><div style="border-style: solid;width: 30%;padding-left: 5px;min-width: 250px;"><h2 style="color: orange;">menu administrateur : </h2>
					<strong><a href="index.php?page=9" style="color : orange;">Gérer les comptes utilisateurs</a><br></strong>
					<strong><a href="index.php?page=6" style="color : orange;">Ajouter un article</a><br></strong>
					<strong><a href="index.php?page=7" style="color : orange;">Modifier un article</a><br></strong><br>
					</div>
				<?php
			}
		}

	?>


</div>

<?php

require_once('controllers/HomeController.php');
//$page = 1;

if(isset($_GET['page']))
{
	if($_GET['page'] == 0)
	{
		$home = new HomeController();
		$home->homepage();
	}

	if($_GET['page'] == 1){
		$games = new HomeController();
		$games->games_page();
	}
	if($_GET['page'] == 2){
		$description = new HomeController();
		$description->game_description();
	}
	if($_GET['page'] == 3){
		$search = new HomeController();
		$search->research();
	}
	if($_GET['page'] == 4){
		$connection = new HomeController();
		$connection->connection();
	}
	if($_GET['page'] == 5){
		$inscription = new HomeController();
		$inscription->inscription();
	}
	if($_GET['page'] == 6){
		$ajout = new HomeController();
		$ajout->addArticle();
	}
	if($_GET['page'] == 7){
		$modifList = new HomeController();
		$modifList->modifyList();
	}
	if($_GET['page'] == 8){
		$modif = new HomeController();
		$modif->modifyArticle();
	}
	if($_GET['page'] == 9){
		$admin = new HomeController();
		$admin->manage();
	}
	if($_GET['page'] == 10){
		$panier = new HomeController();
		$panier->basket();
	}
}else{
	$home = new HomeController();
	$home->homepage();
}

?>


<div style="clear:both;"></div>
</div>
 
<div id="footer">
<hr>
<h2>
	<a href="index.php?page=0" class="link">🏠 Accueil du site 🏠</a><br></h2>
	Copyright zqsd.com<br>
	All rights reserved
</div>