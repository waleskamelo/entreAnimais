<?php
require_once 'Animal.php';
require_once 'Cachorro.php';

abstract class Ave extends Animal
{
	public $pena;
	public $bico;

	public function bicar()
	{
		echo "O pato bica a comida <br>";
	}

	public function voar()
	{
		echo "O pato está voando <br>";
	}

}
