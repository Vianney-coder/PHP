<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Les tableaux en PHP</title>
</head>
<body>
<h1>Les tableaux numérotés</h1>

<?php

$prenoms = array('Timéo', 'Enzo', 'Téotiméo', 'Boadicée', 'Rihanna');
?>

<?php

echo $prenoms[4];

?>

<h1>Les tableaux associatifs</h1>

<?php

$coordonnees = array(
	'prénom' => 'Jonathan', 
	'nom' => 'Dupont',
	'adresse' => '3 rue Jonathan Dupont',
	'ville' => 'Jonathan City DC');
?>
<?php
echo $coordonnees['ville'];
?>

<h1>Insérer une boucle pour afficher les données d'un tableau</h1>

<?php

for ($numero = 0; $numero <= 4 ; $numero++) 
{ 
	echo $prenoms[$numero] . '<br />'; 
}
?>

<h1>Même chose avec la boucle FOREACH, spécialisée dans les tableaux</h1>

<?php

foreach ($prenoms as $element) {
	echo $element . '<br />';
}
?>

<h1>On avait remarqué que For ne permettait pas de parcourir les tableaux associatifs, chose que FOREACH sait faire cepandant</h1>

<?php

foreach ($coordonnees as $element) {
	echo $element . '<br />';
}

?>

<h1>C'est super, mais avec cela nous ne récupérons que la valeur de la variable, alors qu'il nous faudrait également la clé</h1>

<?php
foreach ($coordonnees as $key => $element) {
	echo '[' . $key . '] vaut ' . $element . '<br />';
}
?>

<h1>Enfin, à des objectifs de debogage, on peut utiliser print_r</h1>

<p style="color: red;">À noter cependant que "array" ne s'affiche pas bien en HTML. Pour l'affichage, il va falloir se servir de la balise "pre"</p>

<?php

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

?>

</body>
</html>