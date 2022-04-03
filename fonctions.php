<?php

$insultes = ['merde', 'con'];
$asterisque = [];
foreach ($insultes as $insulte) {
    $lettre = substr($insulte, 0, 1);
    $asterisque[] = $lettre . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);

/*
foreach($insultes as $insulte) {
    $taille = strlen($insulte);
    $replace = str_repeat('*', $taille);
    $phrase = str_replace($insulte, $replace, $phrase);
}
*/
echo $phrase . "\n";

$notes = [10, 20, 13];
array_push($notes, 16, 17);
$sum = array_sum($notes);
$count = count($notes);

echo "Vous avez " . round($sum / $count, 2) . " de moyenne ";

/*
$mot = readline('Veuillez entrer un mot: ');
$reverse = strtolower(strrev($mot));

if (strtolower($mot) === $reverse) {
    echo 'Ce mot est un palyndrome';
} else {
    echo 'Ce mot n\'est pas un palyndrome';
}
*/
?>