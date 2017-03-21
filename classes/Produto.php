<?php
class Produto
{
	private $codigo;
	private $descricao;
	private $preco;
	private $quantidade;
	private $fornecedor;

	public function __set($atrib, $value){
		$this->$atrib = $value;
	}

	public function __get($atrib){
		return $this->$atrib;
	}

	public function imprimeEtiqueta()
	{
		print 'Código:    '.$this->codigo.PHP_EOL;
		print 'Descrição: '.$this->descricao.PHP_EOL;
		print 'Fornecedor: '.$this->fornecedor->codigo.PHP_EOL;
	}
}
