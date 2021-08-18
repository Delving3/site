<?php 
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
	header('location : index.php');
else 
{
	extract($_GET);
	$id = strip_tags($id);

	require_once('config/functions.php');

	$article = getArticle($id);

}
?> 

<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title><?= $article->title ?></title>
</head>
<body>
	<h1><?= $article->title ?></h1> 

	<p><?= $article->content ?></p>
	<hr />

</body>
</html>