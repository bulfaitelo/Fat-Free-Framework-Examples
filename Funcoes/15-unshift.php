<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# mixed unshift ( string $key, string $val )

$f3->set('frutas', array(
	'Tomate', // tomate e fruta u.u
	'banana', 
	'maçã'
));

$f3->unshift('frutas', 'Laranja');
echo "<pre>";
var_export($f3->get('frutas'));
echo "</pre>";

/*array (
  0 => 'Laranja',
  1 => 'Tomate',
  2 => 'banana',
  3 => 'maçã',
)*/