<?php  
class AdminModel
{
	public function listUsers()
	{
		//Je me co a la bdd
		require_once('classes/database.php');

		$instanceBDD = BDD::getInstance();

		$query = 'SELECT * FROM membres';

		$requete = $instanceBDD->bdd->query($query);
		$resultat = $requete->fetchAll();
		return $resultat;
	}
}
?>
