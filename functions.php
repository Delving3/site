<?php
function getArticles()
{
	require('config/connect.php');
	$req = $bdd->prepare('SELECT id, title FROM articles ORDER BY id DESC');
	$req->execute();
	$data = $req->fetchALL(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

function getArticle($id)
{
	require('config/connect.php');
	$req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
	$req->execute(array($id));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
		header('location: index.php'); 
	
}
?>