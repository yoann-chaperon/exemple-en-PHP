<?php
// initialiser deux variables.
$nom ='Yoann';
$longueur = strlen($nom);// strlen fonction PHP qui donne la longueur de la chaîne de caractéres ($nom yoann = 5 lettres)

//initialiser un indice.
$indice = 0 ;

//tant que l'indice est inférieur à la longueur de la chaîne.
while ($indice < $longueur) {
    //afficher le caractère correspond à l'indice suivi d'un point.
    echo "$nom[$indice]."; // la chaîne est vu comme un tableau d'éléments
    //incrémenter l'indice
    $indice++;
}