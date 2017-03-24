<?php
// FRAMEWORK F3
$f3 = require('../../lib/base.php');

// 01-Hello World

	$f3->route('GET /',
	    function() {
	        echo 'Hello, world!';
	    }
	);
	$f3->run();

