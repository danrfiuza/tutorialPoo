<?php
require_once 'Cesta.php';
require_once 'Produto.php';
require_once 'Fornecedor.php';

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

$mCesta = new Cesta();

$mCesta->adicionaItem($mProduto);
$mCesta->exibeLista();
