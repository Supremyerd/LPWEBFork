<?php

class Cliente {
	private int $id;
	private string $nome;
	private string $email;
	private string $fone;
	private date $dataCadastro;
	
	function Cliente() {
		$this->id = 0;
		$this->nome = '';
		$this->email = '';
		$this->fone ='';
		$this->dataCadastro = DateTime();
	}
	function Cliente(int $id, string $nome, string $email, string $fone, string $dataCadastro) {
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->fone = $fone;
		$this->dataCadastro = $dataCadastro;
	}

	function getId() {
		return $this->id;
	}
	function setId(int $id) {
		$this->id = $id;
	}

	function getName() {
		return $this->nome;
	}
	function setName(string $nome) {
		$this->nome = $nome;
	}
	
	function getEmail() {
		return $this->email;
	}
	function setEmail(string $email) {
		$this->email = $email;
	}

	function getFone() {
		return $this->fone;
	}
	function setFone(string $fone) {
		$this->fone = $fone;
	}

	function getDataCadastro() {
		return $this->dataCadastro;
	}
	function setDataCadastro(string $dataCadastro) {
		$this->dataCadastro = $dataCadastro;
	}

}