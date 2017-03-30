<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# mixed copy ( string $src, string $dst )
$f3->set('foo','123');
$f3->set('bar','Barbar');
$bar = $f3->copy('foo','bar'); // bar = '123'

$bar = 456;
$f3->set('foo','789');

var_export($f3->get('bar')); // '123'
var_export($f3->get('foo')); // '789'