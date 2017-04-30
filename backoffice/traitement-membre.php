<?php 

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:../profil.php");
	exit();
}

if (!$_POST) {
	exit();
}

if(isset($_POST["id_membre"])){

	$resultat = $pdo -> prepare("SELECT * FROM membre WHERE id_membre = :id_membre");

	$resultat -> bindParam(":id_membre", $_POST["id_membre"], PDO::PARAM_INT);
	$resultat -> execute();
	$membre = $resultat -> fetch(PDO::FETCH_ASSOC);

	if($resultat -> rowCount() == 0){
		echo "Id membre non trouvé";
		exit();
	}
	else{
		$id_membre = $_POST["id_membre"];
	}

}

else{
	echo "Erreur de requete.";
	exit();
}

if(isset($_POST["delete"])){ //suppression

		$resultat = $pdo -> exec("DELETE FROM membre WHERE id_membre = $id_membre");
		echo "Membre supprimé";
}

?>

<!--   Traitement information   -->
<?php if(isset($_POST["info"])) : ?>

	<h3>Informations sur <?= $membre["pseudo"]; ?></h3>

<?php endif; ?>

<!--   Traitement modification   -->

<?php if(isset($_POST["edit"])) : ?>

	<h3>Modifier le profi</h3>

<?php endif; ?>