<?php 
require_once 'ServicosClass.php';
require_once 'InternetClass.php';
require_once 'TelefoniaClass.php';
require_once 'TvClass.php';

class Tv extends Telefonia {
	private $operadoraTv;
	private $nomePacote;
	private $canais;

	public function getOperadoraTv(){
		return $this->operadoraTv;
	}

	public function setOperadoraTv($operadoraTv){
		$this->operadoraTv = $operadoraTv;
	}

	public function getNomePacote(){
		return $this->nomePacote;
	}

	public function setNomePacote($nomePacote){
		$this->nomePacote = $nomePacote;
	}

	public function getCanais(){
		return $this->canais;
	}

	public function setCanais($canais){
		$this->canais = $canais;
	}
}

class Pacote extends Tv{
	
}


?>