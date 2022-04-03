<?php

$classe = [
    [
        'nom' => 'Dupond', 
        'prenom' => 'Marc', 
        'notes' => [10, 20, 15]
    ],
    [
        'nom' => 'Pichard', 
        'prenom' => 'Aubin', 
        'notes' => [12, 15, 17]
    ]
];

$notes = [10, 20, 10, 9, 8];

$classe[1]['notes'][] = 16;

echo $notes[3] . "\n";

echo $classe[1]['prenom'] . ' ' . $classe[1]['nom'] . "\n";

print_r($classe[1]['notes']);

?>