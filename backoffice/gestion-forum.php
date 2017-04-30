<?php  

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:../profil.php");
}

?>

<h1>Gestion Forum</h1>

