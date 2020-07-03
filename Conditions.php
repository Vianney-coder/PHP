<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Travaillons les conditions</title>
</head>
<body>
<h1>Construction d'une condition avec If else</h1>

<?php

$age = 15;

if ($age <= 12) 
{
	echo "salut gamin ! <br />";
	$autorisation_entrer = "Oui";
}
else {
	echo "Ceci est un site pour les enfants, au revoir ! <br />";
	$autorisation_entrer = "Non";
}

echo "Avez-vous eu l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>

<h1>Nous allons maintenant travailler les booléens, avec if, else if, et else, et les conditions multiples avec AND et OR</h1>

<p style="color: blue; font-weight: bold;">Dans notre cas, la personne parle anglais et a 15 ans. Si elle a 14 ans ou plus, et qu'elle parle anglais, le message de bienvenue s'affichera en anglais. Si elle parle français, le message de bienvenue s'affichera en Français. Si elle ne remplit pas la condition d'âge, un message de refus apparaitra</p>
<?php
$langue = "Anglais";

if ($age >= 14 AND $langue == "Anglais" ) {
	$autorisation_entrer = true;
	echo "Hi, you're allowed to enter my website. <br />";	
}

elseif ($age >= 14 AND $langue == "Français") {
	$autorisation_entrer = true;
	echo "Salut, tu as le droit d'entrer dans mon site web. <br />";
}

else {
	$autorisation_entrer = false;
	echo "Désolé, tu n'as pas l'âge requis pour entrer. <br />";
}

?>

<p style="color: red; font-weight: bold;">Nous avons inséré deux conditions booléennes dans notre if else : Soit l'autorisation d'entrer est vraie, dans le cas où la personne remplit la condition d'âge, soit elle est fausse. Nous allons maintenant tester le if avec pour condition la variable autorisation_entrer. Si elle est vrai, un message s'affiche, si elle est fausse, un autre s'affichera</p>

<?php
if ($autorisation_entrer) {
	echo "<strong>Tu as eu le droit d'entrer </strong>";
} else {
	echo "tu n'as pas eu le droit d'entrer";
}
?>

<p style="font-weight: bold; color: green;">Nous allons nous entrainer avec la condition switch</p>

<?php
switch ($autorisation_entrer) {
	case true:
		echo "tu as bien eu l'autorisation d'entrer";
		break;
	
	default:
		echo "eh ben non, pas d'autorisation pour toi";
		break;
}
?>

<p style="color: orange; font-weight: bold;">J'ai testé dans cette fonction switch si la variable autorisation_entrer était vraie ou fausse. Switch peut servir à tester de nombreux cas, comme des âges</p>

<?php
switch ($age) {
	case 1:
		echo "Gros bébé, tu ne devrais même pas être là !";
		break;
	case 2:
		echo "Toujours un gros bébé.";
		break;
	case 3:
		echo "Encore un gros bébé";
		break;
	case 4:
		echo "Ca commence à s'améliorer";
		break;
	case 5:
		echo "bientôt le CP !";
		break;
	case 6:
		echo "on commence à devenir grand !";
		break;
	case 7:
		echo "L'âge de sagesse !";
		break;
	case 8:
		echo "Alors le CE2, ca se passe comment ?";
		break;
	case 9:
		echo "Tu as l'âge de pratiquer un vrai sport maintenant";
		break;
	case 10:
		echo "Oula, attention, l'année prochaine les choses sérieuses commencent !";
		break;
	case 11:
		echo "Il est comment ton nouveau collège ?";
		break;
	case 12:
		echo "On est bien d'accord que la 5e c'est la répétition de la 6e ?";
		break;
	case 13:
		echo "Ah, l'adolescence, les crises, la chambre dégueu... ";
		break;
	case 14:
		echo "Le brevet c'est tranquille, tu vas voir !";
		break;
	case 15:
		echo "J'espère que tu vas choisir la SES, les maths c'est surcôté !";
		break;
	default:
		echo "J'avais la flemme de faire un message au-delà de 15 ans.";
		break;
}
?>

<h1>Nous allons essayer un truc super, les ternaires. Ils permettent, comme nous l'avons fait avant sans le savoir, de tester la valeur d'une variable, puis d'affecter une valeur à une variable selon si la condition testée est vraie ou fausse</h1>

<?php
$majeur = ($age >= 18) ? true : false;

if (! $majeur) {
	echo "tu n'es pas majeur !";
	# code...
}
else
	echo "tu es bien majeur !";
?>


</body>
</html>