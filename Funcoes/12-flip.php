<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# array flip ( string $key )

$f3->set('vetor', array(
	'foo1'=>'bar1',
	'foo2'=>'bar2',
	'foo3'=>'bar3',
));
echo "<pre>Antes do flip:<br>";
var_export($f3->get('vetor'));
echo "</pre>";
$f3->flip('vetor');
echo "<pre>Depois  do flip <br>";
var_export($f3->get('vetor'));
echo "</pre>";

/*Antes do flip:
array (
  'foo1' => 'bar1',
  'foo2' => 'bar2',
  'foo3' => 'bar3',
)

Depois  do flip 
array (
  'bar1' => 'foo1',
  'bar2' => 'foo2',
  'bar3' => 'foo3',
)*/