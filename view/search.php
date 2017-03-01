<br><link rel="stylesheet" type="text/css" href="root/css/main.css">

<table>


<?php


foreach ($listeProduit as $produit) {

		?>
		<td style="display: inline-block;width: 450px;height: 320px; overflow: hidden;margin-top: 75px;padding-left: 10px;">
			<a href="index.php?page=2&game=<?php echo $produit['id'] ?>" style="color:white">
			<h2 style="font-size: 17px;text-align: center;"><?php echo $produit['name']; ?></h2></a>
			<a href="index.php?page=2&game=<?php echo $produit['id'] ?>"><img style="height:255; width:455;" src=<?php echo $produit['img_src'] ?>></a>
		</td>

	<?php
}

?>
</table>