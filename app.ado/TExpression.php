<?php
//Classe abstrata do query builder
abstract class TExpression
{
	const AND_OPERATOR = 'AND';
	const OR_OPERATOR = 'OR';

	abstract public function dump();
}
