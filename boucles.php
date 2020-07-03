<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Les boucles en PHP</title>
</head>
<body>
<h1>Nous allons d'abord travailler la fonction while</h1>

<?php

$nombre_lignes = 0;

while ($nombre_lignes <= 10) {
	echo 'je répète le nombre de lignes ' . $nombre_lignes . ' fois. <br />';
	$nombre_lignes++;
} // À noter ici que j'ai galéré 10 minutes parce que j'avais juste oublié cette accolade. Donc : ne plus oublier l'accolade. 
?>

<h1>L'instruction for</h1>

<p style="font-weight: bold;">l'instruction que nous allons utiliser pourrait se traduire de la manière suivante : </p>
<p style="font-weight: bold;">Pour la variable $nombre_lignes étant égale à 1, et tant qu'elle reste inférieure ou égale à 10 alors qu'elle s'incrémente de 1 à chaque boucle, on devra écrire "je suis la ligne numéro ..."</p>

<?php
for ($nombre_lignes = 1; $nombre_lignes<=10; $nombre_lignes++){
	echo 'je suis la ligne numéro ' . $nombre_lignes . '. <br />';
}

?>


</body>

</html>