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
	shell_exec('scalac code.scala 1>>out.txt 2>&1');
	shell_exec("echo '出力結果：' >> out.txt");
	shell_exec('scala DisplayFeed 1>>out.txt 2>&1');

	$result =  file_get_contents('out.txt');
	//公開サーバーに置く際は、実行後にout.txtをクリアすべきである
	//shell_exec('echo -n > out.txt');

	echo $result;
?>

