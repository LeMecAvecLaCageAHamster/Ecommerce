<?php

class HomeController
{
	public function homepage()
	{ 		
		$description = "Tous vos jeux, toutes vos platformes, les meilleurs prix ! <br>";

		require_once('models/ArticleModel.php');
		$modelArticle = new ArticleModel();
		$listeProduit = $modelArticle->listArticles();

		require_once('view/home/homepage.php');
	}

	public function games_page()
	{
		

		require_once('models/ArticleModel.php');
		$modelArticle = new ArticleModel();
		$listeProduit = $modelArticle->listArticles();

		require_once('view/games_page.php');
	}

	public function game_description()
	{
		require_once('models/ArticleModel.php');
		$modelArticle = new ArticleModel();
		$listeProduit = $modelArticle->listArticles();

		require_once('view/game_description.php');
	}

	public function research()
	{
		require_once('models/SearchModel.php');
		$modelArticle = new SearchModel();
		$listeProduit = $modelArticle->listSearch();

		require_once('view/search.php');
	}

	public function connection()
	{
		require_once('connection.php');
	}

	public function inscription()
	{
		require_once('models/AdminModel.php');
		$modelAdmin = new AdminModel();
		$listPseudo = $modelAdmin->listUsers();
		require_once('inscription.php');
	}

	public function addArticle()
	{
		require_once('addArticle.php');
	}

	public function modifyList()
	{
		require_once('models/ArticleModel.php');
		$modelArticle = new ArticleModel();
		$listeProduit = $modelArticle->listArticles();
		require_once('modifyList.php');
	}

	public function modifyArticle()
	{
		require_once('models/ModifyModel.php');
		$modifArticle = new ModifyModel();
		$listeParamProduit = $modifArticle->listeParamProduit();
		require_once('modifyArticle.php');
	}

	public function manage()
	{
		require_once('models/AdminModel.php');
		$manage = new AdminModel();
		$listUsers = $manage->listUsers();
		require_once('admin.php');
	}

	public function basket()
	{
		require_once('panier.php');
	}
}

?>
