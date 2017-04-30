<?php  

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:../profil.php");
}

$resultat = $pdo -> prepare("SELECT * FROM save");
$resultat -> execute();
$membre = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gestion Sauvegarde</h1>

