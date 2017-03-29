<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# array hive ()
printf ("A Busy Hive: <pre>%s</pre>", var_export( $f3->hive(), true ) );
