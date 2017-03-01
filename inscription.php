<h1>inscription</h1>
<br>
<form method="post">
	Pseudo <br><input type="text" name="pseudo"><br><br>
	Mot de passe <br><input type="password" name="mdp"><br><br>
	Mail <br><input type="email" name="mail"><br><br><br>
	<input type="submit" name=submit class="button"><br>
</form>

<?php
require_once("classes/database.php");

if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])  && !empty($_POST['mail'])){
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	$mail = $_POST['mail'];
}


$instanceBDD = BDD::getInstance();

$req = $instanceBDD->bdd->prepare('INSERT INTO membres(pseudo, mdp, mail, date_inscription) VALUES (:pseudo, :mdp, :mail, CURDATE())');

if(isset($_POST['submit'])){

	if(!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['mail'])){

		//verifier que le pseudo n'existe pas
		$canSignin = true;
		foreach ($listPseudo as $user) {
			if($user['pseudo'] == $_POST['pseudo']){
				$canSignin = false;
			}
		}

		if($canSignin == true){
			$req->execute(array(
			    'pseudo' => $pseudo,
			    'mdp' => $mdp,
			    'mail' => $mail
			));

			echo "Vous êtes inscrit !";
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['admin'] = 0;
			header("Refresh:1, url=index.php");
		}else{
			echo "Pseudo déjà utilisé !";
		}

	}else{
		echo "Vous devez remplir tout les champs !";
	}
}



?>