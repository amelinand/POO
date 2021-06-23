<?php

include './classes/Voiture.php';
// En temps normale on ecrit:
// Couleur
// Nombre de roues
// Marque

// $voiture1 = [
//     'couleur' => 'rouge',
//     'nb_roues' => 4,
//     'marque' => 'Citroen'
// ];

// $voiture2 = [
//     'couleur' => 'bleu',
//     'nb_roues' => 4,
//     'marque' => 'Renault'
// ];

//var_dump($voiture1['nb_roues']);
// la POO a pour bute de pré construire une base 

$voiture = new Voiture ('jaune', 100);
$voiture2 = new Voiture ('bleu', 80);
 
$voiture2->avance();
$voiture2->avance();
$voiture2->avance();

$voiture2->prendreEssence($voiture);

$voiture2->nb_roues -= 1;
var_dump($voiture, $voiture2);//var_dump($voiture->couleur); pour recuperer la valeur couleur