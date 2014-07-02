<?php
	$code = $_POST['code'];
	$fp = fopen('code.scala', 'w');
	fwrite($fp, $code);
	fclose($fp);
      shell_exec('scala code.scala > out.txt');
	
	$result =  file_get_contents('out.txt');
	
	require 'index.php';
?>

