<?php
require_once 'Ave.php';
require_once 'Cachorro.php';
require_once 'Gato.php';

class Pato extends Ave
{

	public function emitirSom()
	{
		echo 'O pato faz, kuen kuen!! <br>';
	}

	public function reagir(Animal $animal)
	{
		if ($animal instanceof Cachorro) {
			echo $this->nome .' se aproximou de ' . $animal->getNome();
		} else {
			echo $this->getNome() . ' começou a voar </br>';
		}
	}

}
