<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# mixed unshift ( string $key, string $val )

$f3->set('frutas',array(
	'cemente'=>'Maçã',
	'11'=> 'Bananas',
	'6'=> 'Kiwi',
	'branca' => 'Pera'
));

$f3->shift('frutas');
echo "<pre>";
var_export($f3->get('frutas'));
echo "</pre>";

/*array (
  0 => 'Bananas',
  1 => 'Kiwi',
  'branca' => 'Pera',
)*/