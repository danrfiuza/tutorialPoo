<?php
include_once 'classes/Preferencias.php';

$sp1 = Preferencias::getInstance();
print $sp1->getData('timezone').PHP_EOL;
print $sp1->getData('dbDriver').PHP_EOL;
