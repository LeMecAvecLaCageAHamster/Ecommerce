<h1>ajout d'articles</h1>
<form method="post">
	Nom : <input type="text" name="name" style="width: 30%;"><br><br><br>
	Description : <textarea type="text" name="description" style="width: 100%;height: 10%;"></textarea><br><br><br>
	Platforme : <input type="text" name="platform" style="width: 30%;"><br><br><br>
	Prix : <input type="number" name="price"><br><br><br>
	Source de l'image : <input type="text" name="img_src" style="width: 30%;"><br><br><br>
	Lien de la vidéo YouTube : <input type="text" name="yt_src" style="width: 30%;"><br><br><br>
	<input type="submit" class="button">
</form>



<?php

	include_once('classes/database.php');
	$instanceBDD = BDD::getInstance();

	$req = $instanceBDD->bdd->prepare('INSERT INTO articles(name, description, platform, price, img_src, yt_src) VALUES (:name,:description,:platform, :price, :img_src, :yt_src)');

	if (isset($_POST['name'])) {
		
	
		$req->execute(array(
		'name' => $_POST['name'],
		'description' => $_POST['description'],
		'platform' => $_POST['platform'],
		'price' => $_POST['price'],
		'img_src' => $_POST['img_src'],
		'yt_src' => $_POST['yt_src'],
	));
		//echo "Articles ajouté !";
		header("Refresh:0, url=index.php");
	}
	
	
		
?>
