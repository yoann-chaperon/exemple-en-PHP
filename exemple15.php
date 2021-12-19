<?php

// Utilisation de la structure for pour parcourir un tableau

// Initialisation du tableau.

$couleurs = array('bleu','blanc','rouge');

$nombre = 3;

// Boucle utilisant un indice $i qui démarre à 0 ($i = 0)

// qui est incrémenté d'une unité à chaque itération ($i++) ;

// la boucle se poursuit tant que l'indice est inférieur au

// nombre d'éléments présents dans le tableau ($i < $nombre). 
for ($i=0; $i <$nombre ; $i++) { 
    echo "$couleurs[$i]</br>";
}
?>