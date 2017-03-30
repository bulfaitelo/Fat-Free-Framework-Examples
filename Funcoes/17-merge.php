<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# array merge ( string $key, array $src )

$f3->set('vetor', array('azul', 'verde'));

$bar = $f3->merge('vetor', array('amarelo', 'vermelho'));

echo "<pre>";
var_export($bar);
echo "</pre>";

/*array (
  0 => 'azul',
  1 => 'verde',
  2 => 'amarelo',
  3 => 'vermelho',
)*/