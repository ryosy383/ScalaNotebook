<!DOCTYPE html>
<html>
<head>
	<title>CodeIQ「ScalaでXML解析」コード実行ツール</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./codemirror-4.3/doc/docs.css">
	<link rel="stylesheet" href="./codemirror-4.3/lib/codemirror.css">
	<script src="./codemirror-4.3/lib/codemirror.js"></script>
	<script src="./codemirror-4.3/mode/javascript/javascript.js"></script>
	<script src="./codemirror-4.3/addon/selection/active-line.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<style type="text/css">
		.CodeMirror {border-top: 2px solid black; border-bottom: 2px solid black;}
	</style>

</head>
<body>
	<form action="compile.php" method="post">
		<h2>CodeIQ「ScalaでXML解析」コード実行ツール</h2>
		ソースを記述して「コードを実行する」ボタンを押すと、出力結果が下のテキストエリアに表示されます。
		<textarea id="code" name="code"><?php if ( isset($code) ) { echo $code; } ?></textarea>
		<script>
			var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
			  mode: "application/javascript",
			  styleActiveLine: true,
			  lineNumbers: true,
			  lineWrapping: true
			});
		</script>
		<div style="text-align:center;margin: 1em 0 1em 0;">
			<input id="run" type="submit" value="コードを実行" />
		</div>
	</form>

	出力結果:
	<textarea id="result" style="height:200px; width:100%; border-top: 2px solid black; border-bottom: 2px solid black" readonly><?php if ( isset($result) ) { echo $result; } ?></textarea>
</body>
</html>
