<?php  
class SearchModel
{
	public function listSearch()
	{
		//Je me co a la bdd
		require_once('classes/database.php');

		$instanceBDD = BDD::getInstance();

		$query = "SELECT * FROM articles WHERE name LIKE '%".$_GET['search']."%' ORDER BY name";

		$requete = $instanceBDD->bdd->query($query);
		$resultat = $requete->fetchAll();


	?><div style="text-align: center;"><?php
	if ($resultat == false)
    {
        echo "Il n'y a aucun résultat pour votre recherche :(";
    }
    ?></div><?php


		return $resultat;
	}
}
?>
