<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string camelcase ( string $str )
echo "<pre>";
echo $str_com_underline = "string_underline"; //string_underline
echo "</pre><pre>";
echo $f3->camelcase($str_com_underline); //stringUnderline
echo "</pre>";