<!--<h1><?php echo $description; ?></h1>-->

<h1><a href="index.php?page=1&amp;platform=all&amp;sort=-id" class="link">&#127918; Tous les jeux &#127918;</a></h1>

<br>
<b><u>Les derniers jeux ajoutés :<b></u>
<br>

<?php

$nb_articles = 0;
$nb_articles_page = 3;



foreach ($listeProduit as $produit){
	$nb_articles++;
}



foreach ($listeProduit as $produit) {
	if($nb_articles-$nb_articles_page < $nb_articles)
	{
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
	$nb_articles_page--;
	}
}
?>