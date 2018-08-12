<?php

/**
 * Proximo exercicio será criar metodo comer (com gosto de comida)
 */

//Incluindo classes necessarias para a aplicação funcionar
require_once 'model/Gato.php';
require_once 'model/Cachorro.php';
require_once 'model/Pato.php';
require_once 'model/Ave.php';

$gato = new Gato();
$gato->setNome('Melôcôtô');
$gato->setSexo('Macho');

$gato1 = new Gato();
$gato1->setNome('Bilica');
$gato1->setSexo('Macho');
$gato1->setSexo('Fêmea');

$pato = new Pato();
$pato->setNome('Nagasaki');

$cachorro = new Cachorro();
$cachorro->setNome('Tecca');
$cachorro->setSexo(Animal::SEXO_FEMININO);

$cachorro1 = new Cachorro();
$cachorro1->setNome('Pitoco');
//chamando constante sexo masculino
$cachorro1->setSexo(Animal::SEXO_MASCULINO);
$cachorro1->setGosto('ração');

$cachorro->reagir($gato);

//temos um bug, estou passando carne e ele esta dizendo que nao eh carne...
//tenta resolver agora...massa, manda bala eh contigo...valeu!
$cachorro->comer('carne');
