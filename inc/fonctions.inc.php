<?php 

function userConnecte(){
	if (isset($_SESSION["membre"])) {
		return TRUE;
	}
	else {
		return FALSE;
	}
}

function useradmin(){
	if(userConnecte() && $_SESSION["membre"]["statut"] == 1){
		return TRUE;
	}
	else{
		return FALSE;
	}
}


function debug($arg){
	echo '<div>';
	$trace = debug_backtrace(); // debug_backtrace() me retourne les infos sur l'emplacement où a été exécutée la fonction (Array multidimentionnel)
	echo 'Le debug a été demandé dans le fichier : ' . $trace[0]['file'] . ' à la ligne : ' . $trace[0]['line'] . '<hr/>';
	echo '<pre>';
	print_r($arg);
	echo '</pre>';
	echo '</div>';
}
?>