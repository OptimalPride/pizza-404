<?php 

if(userConnecte()){
	$state = "déconnexion";
}

else{
	$state = "connexion";
}

?>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= RACINE_SITE ?>css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>Game Title Alpha V5</title>
</head>

<body>

		<!--Navigation principale-->
		<nav>
			<ul>
				<li><a href="#">Options</a></li>
				<li><a href="#">Menu</a></li>
				<li><a href="profil.php">Profil</a></li>
				<?php if (userAdmin()) : ?>
				<li><a href="gestion.php">Gestion backoffice</a></li>
				<?php endif; ?>
			</ul>
			<header><h1>Game Title</h1></header>
			<a href="#" id="state"><?= $state; ?></a>
		</nav>

	<main>

	<div id="connexion-popup"></div>
	<div id="inscription-popup"></div>

<script>
$(function(){
	

	if($( "#state" ).text() == "déconnexion"){
		$("#state").click(function(e) {
			e.preventDefault();
			var request = $.ajax({ 	
				url: "backoffice/traitement-connexion.php",
				method: "GET",
				data : {deconnexion : "deconnexion"}
			});	

			request.done(function( msg ) {
				window.location.href = "";
			});
		 
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});				
		});
	}
	else if($( "#state" ).text() == "connexion"){
		$("#state").click(function(e) {
			e.preventDefault();
			$( "#dialog" ).remove();
			$("#connexion-popup").load("php/connexion.php");
		});
	}
	else{
		console.log("fuck");
	}
});
</script>