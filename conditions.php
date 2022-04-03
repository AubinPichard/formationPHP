<?php

// $action = (int)readline('Entrez votre action: (1: attaquer, 2: défendre, 3: passer mon tour)' );
$heure = (int)readline('Entrez une heure: ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera fermé';
}



/* 
if ($action === 1) {
    echo 'J\'attaque';
} elseif ($action === 2) {
    echo 'Je défend';
} elseif ($action === 3) {
    echo 'Je ne fais rien';
} else {
    echo 'Commande inconnue';
} 
*/
/* 
switch ($action) {
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je défend';
        break;
    case 3:
        echo 'Je ne fais rien';
        break;
    default:
        echo 'Commande inconnue';
} 
*/


?>