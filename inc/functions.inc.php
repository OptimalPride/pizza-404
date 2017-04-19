<?php 

$page_id = 1;

if($_GET){
	$page_id = $_GET["page_id"];
}

function debug($arg){
	echo "<pre>";
	print_r($arg);
	echo "</pre>";
}

$resultat = $pdo -> query("SELECT * FROM game WHERE id_page = $page_id");
$resultat = $resultat -> fetchAll(PDO::FETCH_ASSOC);

if(!empty($resultat)){
$story_page = $resultat[0]["story"];

$fichier = file("story_pages/$story_page");
$story = explode(" * ", $fichier[0]);
$response1 = explode(" = ", $fichier[1]);
$response2 = explode(" = ", $fichier[2]);
$response3 = explode(" = ", $fichier[3]);

$story = $story[0];
$char1 = $response1[0];
$char2 = $response2[0];
$char3 = $response3[0];
	
$choice1 = $response1[1];
$choice2 = $response2[1];
$choice3 = $response3[1];

$bg = $resultat[0]["background"];
$background = "style='background-image: url(images/$bg);'";

$links_all = $resultat[0]["relation"];
$links = explode(" - ", $links_all);
$link1 = $links[0];
$link2 = $links[1];
$link3 = $links[2];

}//fin du empty resultat

else{
	$page_id = 1;
	header("location:index.php");
}

?>