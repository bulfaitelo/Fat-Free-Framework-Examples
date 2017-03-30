<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# mixed pop ( string $key )

$f3->set('frutas', array(
	'Tomate', // tomate e fruta u.u
	'banana', 
	'maçã'
));

$f3->pop('frutas');
echo "<pre>";
var_export($f3->get('frutas'));
echo "</pre>";

/*array (
  0 => 'Tomate',
  1 => 'banana',
)*/