<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

// Habilitando o CACHE
$f3->set('CACHE',TRUE);

# lógica:
# bool devoid ( string $key )

$f3->set('foo',''); // null
$f3->set('bar',array()); // null
$f3->set('baz',array(),10); // em chache porem null

var_dump($f3->devoid('foo')); // true
var_dump($f3->devoid('bar')); // true
var_dump($f3->devoid('baz')); // true
var_dump($f3->devoid('bazzz')); // true
