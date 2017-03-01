<?php  
class ModifyModel
{
	public function listeParamProduit()
	{
		//Je me co a la bdd
		require_once('classes/database.php');

		$instanceBDD = BDD::getInstance();

		$query = 'SELECT * FROM articles WHERE id = '.$_GET['id'];

		$requete = $instanceBDD->bdd->query($query);
		$resultat = $requete->fetchAll();
		return $resultat;
	}
}
?>
