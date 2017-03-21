<?php
include_once 'Produto.php';
include_once 'Fornecedor.php';


$mFornecedor = new Fornecedor();
$mFornecedor->codigo      = 23;
$mFornecedor->razaoSocial = 'This Biscuits';
$mFornecedor->endereco    = 'Rua dos bobos número zero';
$mFornecedor->cidade      = 'Wonderland';

$mProduto = new Produto();
$mProduto->codigo     = 343;
$mProduto->descricao  = 'testes';
$mProduto->preco      = 2.40;
$mProduto->quantidade = 3;
$mProduto->fornecedor = $mFornecedor;

//imprimir fornecedor
print 'Produto'.PHP_EOL;
print 'Código:    '.$mProduto->codigo.PHP_EOL;
print 'Descrição  '.$mProduto->descricao.PHP_EOL;
print 'Fornecedor '.$mProduto->fornecedor->razaoSocial.PHP_EOL;
