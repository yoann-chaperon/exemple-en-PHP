<?php
$nom = rand(0,1)?'Yoann':NULL;

switch ($nom) {
    case NULL:
        echo 'Bonjour inconnu !',
            'Je vais vous appeler Yoann.</br>';
        $nom = 'Yoann';
    break;

    case 'Yoann':
        echo "Bonjour Maître $nom !</br>";
    break;
    
    default:
        echo "Bonjour élève $nom !</br>";
    break;
}