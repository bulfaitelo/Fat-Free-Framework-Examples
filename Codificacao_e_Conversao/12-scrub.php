<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string scrub ( mixed &$var [, string $tags = NULL ] )

$text = "Um <b>elefante</b> incomoda <b>Muita</b> <u>gente</u>, <i>dois</i>....";

$textScoobyDoo = $f3->scrub($text, 'b,u');

echo $text; // Um <b>elefante</b> incomoda <b>Muita</b> <u>gente</u>, dois....