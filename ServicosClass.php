<?php 

class Servicos {
	private $empresa;
	private $enderecoCompleto;
	private $telefone;
	private $email;
	private $preco;

	public function getEmpresa() {
		return $this->empresa;
	}

	public function setEmpresa($empresa) {
		$this->empresa = $empresa;
	}

	public function getEnderecoCompleto() {
		return $this->enderecoCompleto;
	}

	public function setEnderecoCompleto($enderecoCompleto) {
		$this->enderecoCompleto = $enderecoCompleto;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}
}

?>