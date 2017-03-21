<?php
class Fornecedor
{
	private $codigo;
	private $razaoSocial;
	private $endereco;
	private $cidade;

	public function __set($atrib, $value){
		$this->$atrib = $value;
	}

	public function __get($atrib){
		return $this->$atrib;
	}
}
