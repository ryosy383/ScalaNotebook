<?php
	$code = $_POST['code'];

	$locale = 'ja_JP.utf8';
	setlocale(LC_ALL, $locale);
	putenv('LC_ALL='.$locale);
	
	$fp = fopen('code.scala', 'w');
	fwrite($fp, $code);
	fclose($fp);

	shell_exec('echo -n > out.txt');
	shell_exec('rm *.class');
	shell_exec('scalac code.scala');
	shell_exec('scala DisplayFeed 1>out.txt 2>&1');
	
	$result =  file_get_contents('out.txt');
	
	require 'index.php';
?>

