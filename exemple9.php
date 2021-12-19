<?php 
// Initialisation d'une varaible.
$nom ='';
//Affichage d'un message dépendant de la valeur de $nom.
echo 'bonjour '.(($nom=='')?'inconnu' :$nom).' ! <br />';

echo 'bonjour '.($nom?:'inconnu').' ! <br />';

//Affectation d'une valeur à la variable $nom.
$nom =' Yoann';
//Nouvelle tentative.
echo 'Bonjour '.(($nom=='')?'inconnu':$nom).' ! <br />';

echo 'bonjour '.($nom?:'inconnu').' ! <br />';
?>
<?php
//structure if /elseif /else

$nom = 'Yoann';
$age = 18;
$sexe = 'homme';

if($nom == NULL) {
    echo"Bonjour inconnu ! </br>";
}elseif ($age == NULL){
    echo "Bonjour $nom ! Je ne connais pas votre âge.</br>";
}else {
    echo "Bonjour $sexe et $nom ! vous avez $age ans.</br>";
}
?>