<?php

/**
 * Proximo exercicio será criar metodo comer (com gosto de comida)
 */

//Incluindo classes necessarias para a aplicação funcionar
require_once 'model/Gato.php';
require_once 'model/Cachorro.php';
require_once 'model/Pato.php';
require_once 'model/Ave.php';

$gato = new Gato(Animal::SEXO_MASCULINO,'Melôcôtô');

$gato1 = new Gato(Animal::SEXO_FEMININO, 'Bilica');

$pato = new Pato(Animal::SEXO_MASCULINO, 'Nagasaki');

$cachorro = new Cachorro(Animal::SEXO_FEMININO, 'Tecca');
$cachorro->reagir($gato);
$cachorro->comer('carne');

//Animal::SEXO_MASCULINO -> chamando a constante sexo masculino
$cachorro1 = new Cachorro(Animal::SEXO_MASCULINO, 'Pitoco');
