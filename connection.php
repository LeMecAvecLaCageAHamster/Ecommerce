<h1>connection</h1>
<br>
<form method="post">
	Pseudo : <br><input type="text" name="pseudo"><br><br>
	Mot de passe : <br><input type="password" name="mdp"><br><br><br>
	<input type="submit" name="" value="Se connecter" class="button"><br>
</form>


<?php
require_once("classes/database.php");

	if($_GET['connect'] == 'true'){
		if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
	}else{
		$pseudo = "";
		$mdp = "";
	}

	$instanceBDD = BDD::getInstance();

	$req = $instanceBDD->bdd->prepare('SELECT id, admin FROM membres WHERE pseudo = :pseudo AND mdp = :mdp');

	$req->execute(array(
	    'pseudo' => $pseudo,
	    'mdp' => $mdp
	    ));

	$resultat = $req->fetch();

	if (!$resultat && $pseudo != "")
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else if($resultat && $pseudo != "")
	{
	    
	    $_SESSION['id'] = $resultat['id'];
	    $_SESSION['pseudo'] = $pseudo;
	    $_SESSION['admin'] = $resultat['admin'];
	    echo 'Vous êtes connecté ! ';
	}

	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
	{
	    echo 'Bonjour ' . $_SESSION['pseudo'] . ' ! ';
		header("Refresh:1, url=index.php");
	}

}else{
	session_destroy();
	header("Refresh:0, url=index.php");
}

?>