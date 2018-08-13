<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
	protected $gosto = ['peixe', 'racao', 'carne'];

	public function emitirSom()
	{
		echo 'O cachorro faz, Au Au! <br>';
	}

	public function reagir(Animal $animal)
	{
		// reflection mostra tudo o que tem dentro da classe, metodos, nome, etc...
		$reflection = new ReflectionClass($animal);

		//exemplo de como mostrar os metodos utilizando o reflection
		//o '<pre>' é para garantir que todos os espaços do codigo permaneceram, deixando mais legivel.
			/*echo '<pre>';
			print_r($reflecion->getMethods());
			echo '</pre>';
			exit;*/

		//instanceof serve para verificar se a variavel é um objeto desta determinada instância
		switch (true) {
		 	case $animal instanceof Pato:
		        echo $this->nome . ' correu atras do ' . $reflection->getName() .' </br>';
		 		break;
			case $animal instanceof Gato:
		 		echo $this->nome . ' quer brincar com o ' . $reflection->getName() . '</br>';
		 		break;
		 	case $animal instanceof Cachorro:
		 		if($this->sexo == $animal->getSexo()){
		 			echo $this->nome . ' começou a latir para ' . $reflection->getName() . '</br>';
		 		} else {
		 			$this->acasalar($animal);
		 		}
		}
	}

}
