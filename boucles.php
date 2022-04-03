<?php 

$creneaux = [];

while(true) {
    $debut = (int)readline('Heure d\'ouverture: ');
    $fin = (int)readline('Heure de fin: ');

    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez vous enregistrer un nouveau créneau (o/n): ');
        if ($action === 'n') {
            break;
        }
    }
}

$heure = readline("A qu'elle heure voulez vous visiter le magasin ? ");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé, le magasin sera fermé :(';
}

/*
$notes = [];
while (true) {
    $action = readline('Entrer une nouvelle note (ou \'fin\' pour terminer la saisie): ');
    if ($action === 'fin') {
        break;
    } else {
        $notes[] = (int)$action;
    }
}

foreach ($notes as $note) {
    echo "- $note \n";
}
*/

/*
$notes = [10, 15, 16];
$eleves = [
    'cm2' => ['Jean', 'Jane'],
    'cm1' => ['Marc', 'Aubin', 'Conrentin']
];

//Pour chaque

foreach ($notes as $note) {
    echo "- $note \n";
}

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}
*/

/*
for ($i = 0; $i < 10; $i++) {
    echo "- $i \n";
}
*/

/*
$chiffre = null;
while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez une valeur: ');
}
echo 'Bravo vous avez gagné !';
*/
?>