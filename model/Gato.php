<?php
require_once 'Mamifero.php';
require_once 'Ave.php';
require_once 'Cachorro.php';

class Gato extends Mamifero
{
	public function emitirSom()
	{
		echo 'O gato faz, miiiaaaauu! <br>';
	}

	/*public function comer(Ave $ave)
	{
		echo $this->getNome() . ' esta comendo uma ave: ' . $ave->getNome();
	}*/

	public function reagir(Animal $animal)
	{
		switch (true) {
			case $animal instanceof Cachorro:
				echo $this->nome . ' correu com medo de ' . $animal->getNome() . '</br>';
				break;
			case $animal instanceof Pato:
				echo $this->nome . ' quer comer ' . $animal->getNome() . '</br>';
				break;
			case $animal instanceof Gato:
				if ($this->sexo == $animal->getSexo()) {
					echo $this->nome . ' começou a brigar com ' . $animal->getNome() . '</br>';
				} else {
					$this->acasalar($animal);
				}
				break;
		}

	}

}
