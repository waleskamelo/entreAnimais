<?php
abstract class Animal
{
	//contantes, para receber o que for colocado dentro de cada uma, independente de "F ou M"
	CONST SEXO_FEMININO = 'F';

	CONST SEXO_MASCULINO = 'M';

	//propriedades(atibutos)
	protected $patas;

	protected $rabo;

	protected $sexo;

	protected $nome;

	protected $gosto;

	//o construtor leva em seus parametros, as variaveis obrigatorias, as que o objeto precisa para existir
	//não deixando de ser necessario os sets nas propriedades que não são fixas.
	public function __construct($sexo, $nome)
	{
		$this->sexo = $sexo;
		$this->nome = $nome;
	}

	abstract public function emitirSom();

	abstract public function reagir(Animal $animal);

	public function comer($comida)
	{
		//in_array procura um valor dentro de um array
		if (in_array($comida, $this->gosto)) {
			echo $this->nome . ' gosta muito desse alimento!';
		} else {
			echo $this->nome . ' não gosta muito desse alimento :/ </br>';
		}
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
		// o [] acrescenta um item no final do array
		$this->gosto[] = $gosto;
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

}
