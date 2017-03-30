<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# array split ( string $str [, $noempty = TRUE ] )

$dados = 'valor1, valor2 ; valor3 | valor4';

echo "<pre>";
var_export($f3->split($dados));
echo "</pre>";

/*array (
  0 => 'valor1',
  1 => 'valor2',
  2 => 'valor3',
  3 => 'valor4',
)*/