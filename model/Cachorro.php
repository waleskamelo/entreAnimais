<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
	public function emitirSom()
	{
		echo 'O cachorro faz, Au Au! <br>';
	}

	public function reagir(Animal $animal)
	{
		switch (true) {
		 	case $animal instanceof Pato:
		 		echo $this->nome . ' correu atras de ' . $animal->getNome() . '</br>';
		 		break;
			case $animal instanceof Gato:
		 		echo $this->nome . ' quer brincar com ' . $animal->getNome() . '</br>';
		 		break;
		 	case $animal instanceof Cachorro:
		 		if($this->sexo == $animal->getSexo()){
		 			echo $this->nome . ' começou a latir para ' . $animal->getNome() . '</br>';
		 		} else {
		 			$this->acasalar($animal);
		 		}
		}
	}

	public function comer(Animal $animal)
	{
		if($this->gosto == $animal->getGosto()){
			echo $this->nome . ' tem preferencia por ' . $animal->getGosto();
		} else {
			echo ' isso não é carne </br>';
		}
	}
}
