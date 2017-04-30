<?php 

require_once("inc/init.inc.php");

if(!userConnecte()){
	header("location:index.php");
}

require_once("inc/header.inc.php");

?>

<h1>Ceci est le profil de <?= $_SESSION['membre']['pseudo'] ?></h1>

<a href="game.php">Acces au jeu</a>


<?php

require_once("inc/footer.inc.php");

?>
