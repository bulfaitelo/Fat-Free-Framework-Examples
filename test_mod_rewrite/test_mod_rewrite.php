<?php
if(!function_exists('apache_get_modules') ){ phpinfo(); exit; }
	$res = 'Módulo não disponível';
if(in_array('mod_rewrite',apache_get_modules())) 
	$res = 'Módulo disponível';
?>
<html>
	<head>
		<title>Verificando disponibilidade do mod_rewrite!</title>
	</head>
	<body>
		<p><?php echo apache_get_version(),"</p><p>mod_rewrite $res"; ?></p>
	</body>
</html>