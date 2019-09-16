<?php 
require_once 'ServicosClass.php';
require_once 'InternetClass.php';
require_once 'TelefoniaClass.php';
require_once 'TvClass.php';

class Telefonia extends Internet{
	private $operadoraTel;
	private $secretaria;
	private $codigoOperadoraTel;

	public function getOperadoraTel(){
		return $this->operadoraTel;
	}

	public function setOperadoraTel($operadoraTel){
		$this->operadoraTel = $operadoraTel;
	}

	public function getSecretaria(){
		return $this->secretaria;
	}

	public function setSecretaria($secretaria){
		$this->secretaria = $secretaria;
	}

	public function getCodigoOperadoraTel(){
		return $this->codigoOperadoraTel;
	}

	public function setCodigoOperadoraTel($codigoOperadoraTel){
		$this->codigoOperadoraTel = $codigoOperadoraTel;
	}
}

?>