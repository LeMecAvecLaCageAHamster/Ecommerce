<p style="background-color: red;font-size: 30px;text-align: center;">Attention ⚠ supprimer un article est irréversible !</p>

<?php

foreach ($listeProduit as $produit) {

		?>

		<table><td style="width: 30%">
		<hr>
		<h2><?php echo $produit['name']; ?></h2>
		<img style="height:150px; width:275px;" src=<?php echo $produit['img_src'] ?> >
		<p><?php echo '<u>Description : <br></u>'. $produit['description'].'<br>';?>
		<h2><?php echo 'Platforme(s) : '.$produit['platform'].''; ?></h2>

		</td>
		<td>
			<a href="index.php?page=8&action=modify&id=<?php echo $produit['id']; ?>"><button class="button" style="width: 300px; height: 100px;">MODIFIER</button>
			<a onclick="return confirm('Etes-vous sûr de vouloir supprimer cet article ?');" href="index.php?page=8&action=delete&id=<?php echo $produit['id']; ?>"><button class="button" style="width: 300px; height: 100px;">SUPPRIMER</button></a>
		</td></table>

		<?php

		if(!empty($produit['yt_src']))
		{
			echo "Lien YouTube : ".$produit['yt_src'];
		}
}


?>