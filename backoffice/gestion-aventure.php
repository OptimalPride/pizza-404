<?php  

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:../profil.php");
}

$resultat = $pdo -> prepare("SELECT * FROM game");
$resultat -> execute();
$membre = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gestion Aventure</h1>

