

			<div class="inscription" id="dialog" title="S'inscrire">
				<div id="load">
				<form action="" method="post" id="inscription-traitement">

				<h2>Formulaire Inscription</h2>
					<label>Pseudo</label><br>
					<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"/><br/><br/>

					<label>Mot de passe</label><br>
					<input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"/><br/><br/>

					<label>Email</label><br>
					<input type="text" name="email" id="email" placeholder="Votre Email"/><br/><br/>

					<input type="submit" value="Inscription" id="input-inscription" />
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


	$('#inscription-traitement').submit(function(e) {

		e.preventDefault(); 
		var request = $.ajax({ 	
			url: "backoffice/traitement-inscription.php",
			method: "POST",
			data : $( this ).serialize()
		});	

		request.done(function( msg ) {
			if(msg == "ça marche"){
				$( "#dialog" ).remove();
				$("#connexion-popup").load("php/connexion.php");
			}
			else{
				$("#msg").html(msg);
			}
		});
	 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});
 });
</script>