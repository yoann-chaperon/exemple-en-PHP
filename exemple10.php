<?php
//un peu d'aléatoire pour définir les variables $nom et $âge.
$nom = rand(0,1)?'Yoann' :NULL;
$âge = rand(0,1)?rand(7,77):NUll;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>aléatoire pour définir les variables $nom et $âge</title>
    <style>
    .ko {font-weight: bold; color: red;}
    .ok {font-weight: bold; color: green;}
    </style>
</head>
<body>
    <div>
        <?php if ($nom == NULL) { // condition PHP ?>

            Bonjour inconnu !<br /><!--CodeHTML-->
        <?php } elseif ($âge == NULL) { // suite de la condition ?>

            Je connais votre <span class="ok">nom</span>. </br><!-- code html-->
            mais pas votre <span class="ko">âge</span> . </br>
        <?php } else { // suite de la condition PHP ?>

            Je connais votre <span class="ok">nom</span><!-- Code HTML-->
            et votre <span class="ko">âge</span>,
        mais je dirai rien !</br>
        <?php } // fin de la condition PHP ?>
 
    </div>
</body>
</html>