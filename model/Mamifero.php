<?php
require_once 'Animal.php';

abstract class Mamifero extends Animal
{
	public $pelo;
	public $orelha;

	public function amamentar()
	{
		echo "O mamifero esta mamando <br>";
	}
}
