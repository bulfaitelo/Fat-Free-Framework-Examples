<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string csv ( array $args )

$elementos = array('agua', 'terra', 'vento', 'fogo');
echo "<pre>";
echo ($f3->csv($elementos)); 
echo "</pre>";

