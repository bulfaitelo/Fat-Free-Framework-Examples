<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
#mixed get ( string $key [, string|array $args = NULL ] )

// Trabalhando com o get;

// Exmeplos variados de variaveis 
echo "<pre>";
$f3->set('myVar','Olá Mundo <br>');
echo "f3-> get('myVar'): ";
echo  $f3->get('myVar'); // imprime Olá Mundo

$local_var = $f3->get('myVar');
echo "\$local_var: ";
echo $local_var;
echo "<pre>";

$timestamp1=strtotime('28-03-2017');
$timestamp2=strtotime('29-03-2017');
$timestamp3=strtotime('01-04-2017');

echo "<pre>";
$f3->set('var1','Data Atual: {0,date} - Hora Atual: {0,time} <br>');
echo "<b>\$f3->set('var1','Data Atual: {0,date} - Hora Atual: {0,time}: <br>');</b>";
echo $f3->get('var1', time()); // Forma abreviada de $f3->format($f3->get('var1'),time());
echo "<br><br>";

$f3->set('var2','Saída: {0,date} - Chegada: {1, date} e uma outra data qualquer {2, date} <br>');
echo "<b>\$f3->set('var2','Saída: {0,date} - Chegada: {1, date} e uma outra data qualquer {2, date}'); <br></b>";
echo $f3->get('var2', array($timestamp1, $timestamp2, $timestamp3)); // Forma abreviada de $f3->format($f3->get('var2'),$timestamp1,$timestamp2);
echo "<br><b>Forma abreviada de \$f3->format($f3->get('var2'),\$timestamp1,\$timestamp2, \$timestamp3);</b><br>";
echo $f3->format($f3->get('var2'),$timestamp1,$timestamp2, $timestamp3);

// Vetores:

$f3->set('myarray',
	array(
		0=> 'valor_0',
		1=> 'valor_1',
		'baz'=> 112233,
		'foo'=> 'eu to com fome!',
		'bar'=> 7.55,
		)
	);
echo "<pre>";
echo "<b> <br>\$f3->get('myarray[0]'): </b>";
echo $f3->get('myarray[0]'); // value_0
echo "<b> <br>\$f3->get('myarray.1'): </b>";
echo $f3->get('myarray.1'); // value_1
echo "<b> <br>\$f3->get('myarray.bar'): </b>";
echo $f3->get('myarray.bar'); // 123
echo "<b> <br>\$f3->get('myarray[\"foo\"]'): </b>";
echo $f3->get('myarray["foo"]'); // we like candy
echo "<b> <br>\$f3->get('myarray[baz]'): </b>";
echo $f3->get('myarray[baz]'); // 4.56, notice alternate use of single, double and no quotes
echo "<b> <br>\$f3->myarray['foo']: </b>";
echo $f3->myarray['foo']; 
echo "<b> <br>\$f3['myarray']['baz']: </b>";
echo $f3['myarray']['baz'];

