<?php

require 'app/Autoloader.php';
Autoloader::register();


$v1 = new Nourritures('Viande', 50, "Frigo");
$h1 = new Nourritures('Foin', 500, "Entrepot 1");
$i1 = new Nourritures('Criquet', 50, "Ailleurs");

$carnivore = new CategorieAnimaux("Carnivore", $v1);
$herbivore = new CategorieAnimaux("herbivore", $h1);
$insectivore = new CategorieAnimaux("Insectivore", $i1);

$ani1 = new Animaux("Leo", "lion", 16, $carnivore);
$ani2 = new Animaux("Wolf", "loup", 16, $carnivore);
$ani3 = new Animaux("Dolly", "mouton", 16, $herbivore);
$ani4 = new Animaux("Piupiu", "mesange", 16, $insectivore);





$manu = new Soigneur("Manu", "LePreu", "oui", $carnivore);
$fleur = new Soigneur("Fleur", "Bleue", "Non", $herbivore);

$manu->nourrir($ani1, 40);
$manu->nourrir($ani2, 16);