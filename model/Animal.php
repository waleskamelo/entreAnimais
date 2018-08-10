<?php
abstract class Animal
{
	//contantes, para receber o que for colocado dentro de cada uma, independente de ser igual a "F ou M"
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
		if ($sexo!= self::SEXO_FEMININO && $sexo=! self::SEXO_MASCULINO) {
			throw new Exception('Esta opção não é válida');
		}
	}

	public function acasalar(Animal $animal)
	{
		echo $this->nome . ' esta acasalando com '. $animal->getNome();
	}

	public function getClassName() 
	{
		return __CLASS__;
	}

}
