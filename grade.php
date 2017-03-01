<?php  

require_once('classes/database.php');

$instanceBDD = BDD::getInstance();


if($_GET['action'] == 0){
	$query = "UPDATE membres SET admin = 0 WHERE id = ".$_GET['id'];
}else if($_GET['action'] == 1){
	$query = "UPDATE membres SET admin = 1 WHERE id = ".$_GET['id'];
}else{
	if($_SESSION['id'] != $_GET['id']){
		$query = "DELETE FROM membres WHERE id = ".$_GET['id'];
	}
}

if($_SESSION['id'] == $_GET['id']){
	header("Refresh:0, url=index.php?page=4&connect=false");
}else{
	header("Refresh:0, url=index.php");
}

$requete = $instanceBDD->bdd->query($query);
$resultat = $requete->fetchAll();
return $resultat;



?>