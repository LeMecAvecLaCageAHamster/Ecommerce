<div id="game">
<br>
<h2><a href="index.php?page=1?&platform=all&sort=-id"><font color="#ff0000" class="link">Retour à la liste des jeux</font></a></h2>
<hr>
<?php

foreach ($listeProduit as $produit) {

	if($_GET['game'] == $produit['id']){

		?>

		<table><td style="width: 30%">
		<h2><?php echo $produit['name']; ?></h2>
		<img src=<?php echo $produit['img_src'] ?> height=255 widht=455>
		<p><?php echo '<u>Description : <br></u>'. $produit['description'].'<br>';?>
		<h2><?php echo 'Platforme(s) : '.$produit['platform'].''; ?></h2>

		</td>
		<td>
			<form method="post">
				<button name="buy" class="button" style="width: 300px; height: 100px;margin-left: 15%;">AJOUTER AU PANIER : <?php echo $produit['price'].' €'; ?></button>
			</form>
			<?php 
			if(isset($_POST['buy']) && $produit['nb'] == '0'){
				?><h2 style="text-align: center;">Rupture de stock : impossible d'ajouter ce produit au panier.</h2><?php
			}else if (isset($_POST['buy']) && $produit['nb'] != 0) {
				?><h2 style="text-align: center;">L'article a bien été ajouté au panier !</h2><?php
			}
			?>
		</td></table>

		<?php

		if(!empty($produit['yt_src']))
		{
			?><iframe style="width: 88.8%;height: 50%" src="<?php echo $produit['yt_src'] ?>" frameborder="0" allowfullscreen></iframe><?php
		}

	}

}

?>
</div>