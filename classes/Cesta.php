<?php
class Cesta
{
	private $itens;

	//Adiciona itens na cesta
	public function adicionaItem(Produto $item)
	{
		$this->itens[] = $item;
	}

	//exibe na tela de produtos
	public function exibeLista()
	{
		foreach($this->itens as $item){
			$item->imprimeEtiqueta();
		}
	}

	//Calcula o valor total da cesta
	public function calculaTotal()
	{
		foreach($this->itens as $item){
			$total += $item->preco;
		}
	}
}
