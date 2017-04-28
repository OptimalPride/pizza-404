<?php 

require_once("inc/init.inc.php");

if(!userConnecte()){
	header("location:index.php");
}

require_once("inc/header.inc.php");

?>


		<!--Section contenant le texte-->
		<section class="text bg-steel">
			<p id="text-box"></p>
		</section>

		<!--Section contenant tous les boutons-->
		<section class="interactive">
			<img src="images/ship01.png" id="ship-image">
			<!--Boutons choix multiples-->
			<ul class="choices">
				<li><a href="2" id="choice1" class="choice"></a></li>
				<li><a href="3" id="choice2" class="choice"></a></li>
				<li><a href="4" id="choice3" class="choice"></a></li>
			</ul>
			<img src="images/char01.png" id="character-image">
		</section>
		
	<script type="text/javascript" src="js/main.js"></script>

<?php

require_once("inc/footer.inc.php");

?>

