<?php
require_once('link.php');


if($_GET['platform'] == 'all')
{
	echo '<h2>'.'<strong>'.'<br>'.'<u>'."Voici les jeux disponible sur toutes les platformes : ".'</u>'.'<br>'.'<strong>'.'</h2>';
}else{
	echo '<h2>'.'<strong>'.'<br>'.'<u>'."Voici les jeux disponible sur ". $_GET['platform'] .' :'.'</u>'.'<br>'.'<strong>'.'</h2>';
}



?><br>

Trier par : 
<form method="get" action="index.php">
<input type="hidden" name="page" value="1">
<input type="hidden" name="platform" value=<?php echo $_GET['platform'] ?>>
	<select name="sort" class="button">
		<option value="-id">Date de mise en ligne</option>
		<option value="name" >Nom croissant</option>
		<option value="name desc" >Nom décroissant</option>
		<option value="price" >Prix croissant</option>
		<option value="-price" >Prix décroissant</option>
	</select>
	<input type="submit" value="Trier" class="button">
</form>


<?php

$nb_articles_page = 50;
$page = 1;

foreach ($listeProduit as $produit) {	
		?>
		<hr>
		<table>
		<td>
		<a href="index.php?page=2&game=<?php echo $produit['id'] ?>" style="color:white"><h2><?php echo $produit['name']; ?></h2></a>
		<a href="index.php?page=2&game=<?php echo $produit['id'] ?>"><img src=<?php echo $produit['img_src'] ?> style="height: 300px; width: 500px;"></a>
		</td>
		<td>
		<p><?php echo '<u>Description : <br></u>'. $produit['description'].'<br>';?>
		<h2><?php echo 'Prix : '.$produit['price'].' €'; ?></h2>
		<h2><?php echo 'Platforme(s) : '.$produit['platform'].''; ?></h2>
		</td>
		</table>
<?php 
	
}

?>