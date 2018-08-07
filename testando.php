<?php

/**
 * Proximo exercicio será criar metodo comer (com gosto de comida)
 */

//Incluindo classes necessarias para a aplicação funcionar
require_once 'model/Gato.php';
require_once 'model/Cachorro.php';
require_once 'model/Pato.php';
require_once 'model/Ave.php';

//$gato = new Gato();
//$gato->setNome('Melôcôtô');
//$gato->setSexo('Macho');

//$gato1 = new Gato();
//$gato1->setNome('Bilica');
// $gato1->setSexo('Macho');
//$gato1->setSexo('Fêmea');

//$pato = new Pato();
//$pato->setNome('Nagasaki');

$cachorro = new Cachorro();
$cachorro->setNome('Tecca');
$cachorro->setSexo('Fêmea');

$cachorro1 = new Cachorro();
$cachorro1->setNome('Pitoco');
$cachorro1->setSexo('Macho');

$cachorro->reagir($cachorro);

//$gato->comer($pato);

// $pato->reagir($gato);

// $cachorro->reagir($pato);

// $cachorro->reagir($gato);

// $gato->reagir($cachorro);

// $gato->reagir($pato);

// $gato->reagir($gato1);

// $gato1->acasalar($gato);

//$gato->andar();
//
//$pato->voar();

// $cachorro->amamentar();

$cachorro->gosto('ração');
