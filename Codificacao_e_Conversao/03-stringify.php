<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string stringify ( mixed $arg [, array $stack = NULL ] )

$elementos = array('agua', 'terra', 'vento', 'fogo');
$fireworks = array($elementos, shuffle($elementos), array_flip($elementos));
echo "<pre>";
echo ($f3->csv($fireworks)); //['agua','terra','vento','fogo'],true,['vento'=>0,'fogo'=>1,'terra'=>2,'agua'=>3]
echo "</pre>";
$carro = new stdClass();
$carro->cor = 'verde';
$carro->posicao = array('35.360496', '138.727798');
echo "<pre>";
echo $f3->stringify($carro); //stdClass::__set_state(['cor'=>'verde','posicao'=>['35.360496','138.727798']])
echo "</pre>";