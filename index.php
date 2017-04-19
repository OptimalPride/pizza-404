<?php 

require_once("inc/init.inc.php");

?>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Game Title Alpha V1</title>
</head>

<body>

		<!--Navigation principale-->
		<nav>
			<ul>
				<li><a href="#">Options</a></li>
				<li><a href="#">Menu</a></li>
				<li><a href="#">Compte</a></li>
			</ul>
			<header><h1>Game Title</h1></header>
			<a href="#">Quitter</a>
		</nav>

	<main <?= $background; ?>>

		<!--Section contenant le texte-->
		<section class="text bg-steel">
			<p id="text-box"><?= $story; ?></p>
		</section>

		<!--Section contenant tous les boutons-->
		<section class="interactive">
			<img src="images/ship01.png" id="ship-image">
			<!--Boutons choix multiples-->
			<ul class="choices">
				<li><a href="?page_id=<?= $link1 ?>"><?= $char1; ?></a></li>
				<li><a href="?page_id=<?= $link2 ?>"><?= $char2 ?></a></li>
				<li><a href="?page_id=<?= $link3 ?>"><?= $char3 ?></a></li>
			</ul>
			<img src="images/char01.png" id="character-image">
		</section>
	</main>

	<footer>
		<p>Game Title version alpha 3.0</p>
	</footer>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>