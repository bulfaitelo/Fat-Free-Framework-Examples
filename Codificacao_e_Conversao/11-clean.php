<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string clean ( mixed $var [, string $tags = NULL ] )

$text = "O <u>rato<u> do <b>Rei</b> de Roma Fez <i>alguma</i> <script> alert('Que não Lembro') </script> "; // O rato do Rei de Roma Fez alguma alert('Que não Lembro')
//echo $text; // texto com alert.

echo $f3->clean($text); // removendo HTML tags
echo "<br>";
echo $f3->clean($text, 'i,b'); // O rato do <b>Rei</b> de Roma Fez <i>alguma</i>  alert('Que não Lembro')