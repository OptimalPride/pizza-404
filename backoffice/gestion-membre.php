<?php  

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:../profil.php");
}

$resultat = $pdo -> prepare("SELECT * FROM membre");
$resultat -> execute();
$membre = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gestion membre</h1>

<table border="1">
<tr>
	<?php foreach ($membre[0] as $key => $value) : ?>
	<th><?= $key; ?></th>
	<?php endforeach; ?>
	<th colspan="1">Actions</th>
</tr>
<?php for ($i=0; $i <count($membre) ; $i++) : ?>
<tr>
	<?php foreach ($membre[$i] as $key => $value) : ?>
	<td><?= $value; ?></td>
	<?php endforeach; ?>
	<td>
		<img class="info" data-id="<?= $membre[$i]['id_membre']; ?>" src="<?= RACINE_SITE; ?>img/info.png">
		<img class="edit" data-id="<?= $membre[$i]['id_membre']; ?>" src="<?= RACINE_SITE; ?>img/edit.png">
		<img class="delete" data-id="<?= $membre[$i]['id_membre']; ?>" src="<?= RACINE_SITE; ?>img/delete.png">
	</td>
</tr>
<?php endfor; ?>
</table>

<div id="load_event"></div>

<script>

$(function(){

	$(".info").click(function(e){

		$("#load_event").empty();
		var request = $.ajax({ 	
			url: "backoffice/traitement-membre.php",
			method: "POST",
			data : {info : "info", id_membre : $(this).attr("data-id")}
		});	
		request.done(function( msg ) {
			$("#load_event").html(msg);
		});
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	}); // fin even info

	$(".edit").click(function(e){

	}); // fin even edit

	$(".delete").click(function(e){
		$("#load_event").empty();
		var request = $.ajax({ 	
			url: "backoffice/traitement-membre.php",
			method: "POST",
			data : {delete : "delete", id_membre : $(this).attr("data-id")}
		});	
		request.done(function( msg ) {
			$("#gestion_membres").click();
		});
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	}); // fin even delete

}); // fin function

</script>
