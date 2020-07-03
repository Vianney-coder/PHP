<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ceci est un entrainement aux variables PHP</title>
</head>
<body>

<p style="color:red">Nous allons nous </br> entraîner un petit peu. </p>
	

	<?php

	//ceci est un entrainement aux variables//

	/* on en profite pour s'entrainer 
	à faire des commentaires sur plusieurs lignes */

	//Une variable commence toujours par $ //

	$Quantité = 10;
	$Prix = 3.5;

	// à noter que, comme toujours en PHP, les variables se terminent par un point virgule sans espace // 

	$Total = $Quantité * $Prix;

	echo 'Cela coûte ' . $Total . ' euros !';

	// À noter à nouveau : pour afficher une apostrophe, la précéder d'un antislash // 

	?>
<p> Pour nous entrainer un peu plus, nous allons tenter d'insérer le texte en PHP dans une balise HTML. </br>

	<?php
	echo 'Vous trouvez ça cher ? C\'est pourtant simple, le prix unitaire est de ' . $Prix . ' euros et la quantité de produits est de ' . $Quantité . ' unités.';

	?>
</p>

<p>À noter qu'il est possible d'effectuer tout un tas d'opérations avec PHP, de la simple addition à la multiplication ou la division, toujours en utilisant les variables</p>

<p>Notons que notre nombre de base est 12. Nous allons lui faire faire des opérations avec le chiffre 5</p>
<ul> 
	<li>Les multiplications</li>
	<li>Les additions</li>
	<li>Les divisions</li>
	<li>le modulo, qui donne le reste d'une division</li>
</ul>

<?php

$Nombre = 12;
$multiplication = $Nombre * 5;
$addition = $Nombre + 5;
$division = $Nombre / 5;
$modulo = $Nombre % 5;


echo 'si je multiplie ' . $Nombre . ' par 5, alors le résultat est : ' . $multiplication . '. ';
echo 'Si j\'additionne ' . $Nombre . ' avec 5, cette fois le résultat est : ' . $addition . '. ';
echo 'Pour la division, le résultat est de : ' . $division . '. ';
echo 'Mais pour avoir le reste de la division entre 12 et 5, le modulo s\'impose : ' . $modulo . '. ';
?>
</body>
</html>