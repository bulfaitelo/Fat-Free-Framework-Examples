<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# NULL parse ( string $str )

// $f3->parse('framework=f3, fome=alta, pizza=portuguesa');
// var_dump($f3->get('PARAMS.framework'));
$f3->set('DEBUG', 3);
$f3->parse('framework=f3 , speed=fast , features=full');
echo $f3->get('PARAMS.framework');  // 'f3'
echo $f3->get('PARAMS.speed');      // 'fast'

var_dump($f3->get('PARAMS'));
