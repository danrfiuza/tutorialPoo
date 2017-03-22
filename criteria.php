<?php
include_once 'app.ado/TExpression.php';
include_once 'app.ado/TCriteria.php';
include_once 'app.ado/TFilter.php';

//Exempo de critério com operador lógico OR
//a idade deve ser menor que 16 ou maior que 60
$criteria = new TCriteria();
$criteria->add(new TFilter('idade','<',16),TExpression::OR_OPERATOR);
$criteria->add(new TFilter('idade','>',60),TExpression::OR_OPERATOR);
$criteria->add(new TFilter('nome','=','Daniel'),TExpression::AND_OPERATOR);
print $criteria->dump().PHP_EOL;
