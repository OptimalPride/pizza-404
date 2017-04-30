<?php 

require_once("inc/init.inc.php");

if (!userAdmin()) {
	header("location:profil.php");
}


require_once("inc/header.inc.php");
?>

<h1>Page gestion backoffice</h1>

<div>
	<button id="gestion_membres">Gestion membres</button>
	<button id="gestion_aventure">Gestion Aventure</button>
	<button id="gestion_sauvegardes">Gestion sauvegardes</button>
	<button id="gestion_forum">Gestion Forum</button>
</div>

<div id="load_gestion"></div>
<?php 

require_once("inc/footer.inc.php");

?>

<script>

$(function(){

	$("#gestion_membres").click(function(e){
		$("#load_gestion").empty();
		$("#load_gestion").load("backoffice/gestion-membre.php");
	});

	$("#gestion_aventure").click(function(e){
		$("#load_gestion").empty();
		$("#load_gestion").load("backoffice/gestion-aventure.php");
	});

	$("#gestion_sauvegardes").click(function(e){
		$("#load_gestion").empty();
		$("#load_gestion").load("backoffice/gestion-sauvegarde.php");
	});

	$("#gestion_forum").click(function(e){
		$("#load_gestion").empty();
		$("#load_gestion").load("backoffice/gestion-forum.php");
	});

}); //fin function

</script>