<?php
$xml = simplexml_load_file('http://www.asiutn.com.ar/sysacad/paises.xml');
// print_r($xml);
foreach($xml->Children() as $elemento){
	print $elemento->nombre.PHP_EOL;
}
