<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string alias ( string $name [, array|string $params = array() ] )

$f3->route('GET @complex:/resize/@format/*/sep/*','App->nowhere');
$f3->alias('complex','format=20x20,2=foo/bar,3=baz.gif');
$f3->alias('complex',array('format'=>'20x20',2=>'foo/bar',3=>'baz.gif'));
// Ambos os exemplos retornariam '/resize/20x20/foo/bar/sep/baz.gif'