

			<div class="connexion" id="dialog" title="Se connecter">
				<div id="load">
					<form action="" method="post" id="connexion-traitement">

						<label>Pseudo</label><br>
						<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"/><br/><br/>

						<label>Mot de passe</label><br>
						<input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"/><br/><br/>

						<input type="submit" value="Connexion" id="input-connexion" />

						<button id="inscription">Inscription</button>
						<div id="msg"></div>

					</form>
				</div>
			</div>

<script> 
$(function(){
	$( function() {
		$( "#dialog" ).dialog();
		$('.ui-button').click(function(e) {
			$( "#dialog" ).remove();
		});
	} );

	$('#connexion-traitement').submit(function(e) {
		e.preventDefault(); 

		var request = $.ajax({ 	
			url: "backoffice/traitement-connexion.php",
			method: "POST",
			data : $( this ).serialize()
		});	


		request.done(function( msg ) {

			if(msg == "ça marche"){
				window.location.href = "profil.php";

			}
			else{
				$("#msg").html(msg);
				console.log(msg);
			}
		});
	 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	$('#inscription').click(function(e) {
		e.preventDefault();
		$( "#dialog" ).remove();
		$("#inscription-popup").load("php/inscription.php");
	});

});
		
</script>