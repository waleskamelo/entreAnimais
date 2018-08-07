<?php
abstract class Animal
{
	//propriedades(atibutos)
	public $patas;

	public $rabo;

	public $sexo;

	protected $nome;

	protected $gosto = array('ração' , 'carne' , 'peixe' , 'milho');

	abstract public function emitirSom();

	abstract public function reagir(Animal $animal);

	public function comer()
	{
		echo "está comendo </br>";
	}

	//andar é uma função comum a todos os animais, por isso a forma de como anda esta especificada na classe pai, as demais vão herdar
	public function andar()
	{
		echo "O	animal esta andando </br>";
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}

	public function acasalar(Animal $animal)
	{
		echo $this->nome . ' esta acasalando com '. $animal->getNome();
	}

}
