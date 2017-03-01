<?php  
class ArticleModel
{
	public function listArticles()
	{
		//Je me co a la bdd
		require_once('classes/database.php');

		$instanceBDD = BDD::getInstance();


		if(isset($_GET['sort']))
		{
			if($_GET['platform'] == 'all')
			{
				$query = "SELECT * FROM articles ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == 'pc'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%PC%' ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == 'ps3'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%PS3%' ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == 'ps4'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%PS4%' ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == '360'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%360%' ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == 'one'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%ONE%' ORDER BY ".$_GET['sort'];
			}else if($_GET['platform'] == '3ds'){
				$query = "SELECT * FROM articles WHERE platform LIKE '%3DS%' ORDER BY ".$_GET['sort'];
			}
		}else{
			$query = "SELECT * FROM articles ORDER BY -id";
		}



		$requete = $instanceBDD->bdd->query($query);
		$resultat = $requete->fetchAll();
		return $resultat;
	}
}
?>
