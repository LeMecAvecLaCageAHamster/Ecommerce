<h1>modification d'article</h1>

<?php 


if($_GET['action'] == 'modify'){
	foreach ($listeParamProduit as $produit): ?>

<form method="post">
	Nom : <input type="text" name="name" value= "<?php echo $produit['name']; ?>" style="width: 30%;"><br><br><br>
	Description : <input type="text" name="description" value= "<?php echo $produit['description']; ?>" style="width: 100%;height: 10%;"></input><br><br><br>
	Platform : <input type="text" name="platform"  value= "<?php echo $produit['platform'] ?>" style="width: 30%;"><br><br><br>
	Prix : <input type="number" name="price" value= "<?php echo $produit['price'] ?>" > €<br><br><br>
	Source de l'image : <input type="text" name="img_src"  value= "<?php echo $produit['img_src'] ?>" style="width: 30%;"><br><br><br>
	Lien de la vidéo YouTube : <input type="text" name="yt_src" value= "<?php echo $produit['yt_src'] ?>"  style="width: 30%;"><br><br><br>
	<input type="submit" class="button" name="modif" value="Modifier l'article">
</form>

<?php endforeach ?>

<?php

$name = "";
$description = "";
$platform = "";
$price = "";
$img_src = "";
$yt_src = "";


require_once('classes/database.php');
$instanceBDD = BDD::getInstance();

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
		$platform = $_POST['platform'];
		$price = $_POST['price'];
		$img_src = $_POST['img_src'];
		$yt_src = $_POST['yt_src'];
	}


	$modification = "UPDATE articles SET name = '$name', description = '$description', platform = '$platform', price = '$price', img_src = '$img_src', yt_src = '$yt_src' WHERE id = ".$_GET['id'];

	$req = $instanceBDD->bdd->prepare($modification);
	
	

	if(isset($_POST['modif'])){
		echo $name;
		$req->execute();
		echo "Article modifié !";
		header("Refresh:1, url=index.php");
	}

}else{
	

	require_once('classes/database.php');
	$instanceBDD = BDD::getInstance();

	$modif = "DELETE FROM articles WHERE `articles`.`id` = ".$_GET['id'];

	$req = $instanceBDD->bdd->prepare($modif
	);


	$req->execute();

	echo "Article effacé !";
	header("Refresh:1, url=index.php?page=7");

}
	
		
?>
