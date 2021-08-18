<?php 
require_once('functions.php');

$articles = getArticles();
?> 

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page d'accueil</title>
</head>
<body>
	<h1>Articles :</h1> 

	<?php foreach ($articles as $article): ?>
		<h2><?=$article->title ?></h2>
		<a href="article.php?id=<?= $article->id ?>">Lire la suite</a><?php endforeach; ?>

</body>
</html>
