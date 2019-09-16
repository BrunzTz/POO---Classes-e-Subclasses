<?php 
require_once 'ServicosClass.php';
require_once 'InternetClass.php';
require_once 'TelefoniaClass.php';
require_once 'TvClass.php';

class Internet extends Servicos {
	private $descricao;
	private $banda;
	private $download;
	private $quantidadeEmail;

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getBanda(){
		return $this->banda;
	}

	public function setBanda($banda){
		$this->banda = $banda;
	}

	public function getDownload(){
		return $this->download;
	}

	public function setDownload($download){
		$this->download = $download;
	}

	public function getQuantidadeEmail(){
		return $this->quantidadeEmail;
	}

	public function setQuantidadeEmail($quantidadeEmail){
		$this->quantidadeEmail = $quantidadeEmail;
	}
}

?>