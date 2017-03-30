<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string snakecase ( string $str )
echo "<pre>";
echo $strSemUnderline = "stringSemUnderline"; //stringSemUnderline
echo "</pre><pre>";
echo $f3->snakecase($strSemUnderline); //string_sem_underline
echo "</pre>";