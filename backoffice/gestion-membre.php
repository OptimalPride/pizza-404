<?php  

require_once("../inc/init.inc.php");

if (!userAdmin()) {
	header("location:profil.php");
}

require_once("../inc/header.inc.php");

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
</tr>
<?php for ($i=0; $i <count($membre) ; $i++) : ?>
<tr>
	<?php foreach ($membre[$i] as $key => $value) : ?>
	<td><?= $value; ?></td>
	<?php endforeach; ?>
</tr>
<?php endfor; ?>
</table>
