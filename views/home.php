<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./public/style.css">
</head>
<body>
<header>
	<h1>This is the home page</h1>
	<h3>&copy;<?= $Nom;?></h3>
	<h3><?= $Cognoms;?></h3>
<nav>
	<ul>
		<li><a href="home">Home</a></li>
		<li><a href="contact">Contact</a></li>
		<li><a href="about">About</a></li>
	</ul>
</nav>
</header>
</body>
</html>