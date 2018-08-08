<?php
abstract class Animal
{
	CONST SEXO_FEMININO = 'F';

	CONST SEXO_MASCULINO = 'M';

	//propriedades(atibutos)
	protected $patas;

	protected $rabo;

	protected $sexo;

	protected $nome;

	protected $gosto;

	abstract public function emitirSom();

	abstract public function reagir(Animal $animal);

	public function comer(Animal $animal)
	{
		echo "está comendo </br>";
	}

	//andar é uma função comum a todos os animais, por isso a forma de como anda esta especificada na classe pai, as demais vão herdar
	public function andar()
	{
		echo "O	animal esta andando </br>";
	}

	public function getGosto()
	{
		return $this->gosto;
	}

	public function setGosto($gosto)
	{
		$this->gosto = $gosto;
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
		if($sexo!='M' && $sexo=!'F'){
			throw new Exception('Esta opção não é válida')
		}
	}

	public function acasalar(Animal $animal)
	{
		echo $this->nome . ' esta acasalando com '. $animal->getNome();
	}

}
