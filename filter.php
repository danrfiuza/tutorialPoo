<?php
include_once 'app.ado/TExpression.php';
include_once 'app.ado/TFilter.php';

$filter1 = new TFilter('data','=','2017-22-03');
print $filter1->dump().PHP_EOL;

$filter2 = new TFilter('salario','>',3000);
print $filter2->dump().PHP_EOL;

$filter3 = new TFilter('sexo','IN',array('M','F'));
print $filter3->dump().PHP_EOL;

$filter4 = new TFilter('contrato','IS NOT',NULL);
print $filter4->dump().PHP_EOL;

$filter5 = new TFilter('ativo','=',TRUE);
print $filter5->dump().PHP_EOL;
