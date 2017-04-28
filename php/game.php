<?php 

$retour = array("erreur" => true);

$pdo = new PDO("mysql:host=localhost;dbname=orbital_express", "root", "");

$page_id = 1;


if($_GET) {
	if (isset($_GET["page_id"])) {
		$page_id = $_GET["page_id"];
	}

	$retour["page"] = $page_id;
	$resultat = $pdo -> query("SELECT * FROM game WHERE id_page = $page_id");
	$resultat = $resultat -> fetchAll(PDO::FETCH_ASSOC);
	$retour["resultat"] = $resultat;
	if(!empty($resultat)){
		$story_page = $resultat[0]["story"];

		$fichier = file("../story_pages/$story_page");
		$story = explode(" * ", $fichier[0]);
		$response1 = explode(" = ", $fichier[1]);
		$response2 = explode(" = ", $fichier[2]);
		$response3 = explode(" = ", $fichier[3]);

		$retour["story"] = $story[0];
		$retour["char1"] = $response1[0];
		$retour["char2"] = $response2[0];
		$retour["char3"] = $response3[0];
			
		$retour["response1"] = $response1[1];
		$retour["response2"] = $response2[1];
		$retour["response3"] = $response3[1];

		$bg = $resultat[0]["background"];
		$retour["background"] = "url(images/$bg)";

		$links_all = $resultat[0]["relation"];
		$links = explode(" - ", $links_all);
		$retour["link1"] = $links[0];
		$retour["link2"] = $links[1];
		$retour["link3"] = $links[2];
		$retour["erreur"] = false;
	}//fin du empty resultat


} //fin if get



echo json_encode($retour);
?>