<?php

$f3 = require('lib/base.php');

$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
$f3->run();