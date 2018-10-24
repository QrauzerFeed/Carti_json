<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? 
	error_reporting(E_ALL);
	$fileName = 'carti.json';
	if(!empty($_POST['titlu']) && !empty($_POST['anul'])){
		$fileData = file_get_contents($fileName);
		$carti = json_decode($fileData, true);
		$newElement = [
			"anul" => trim($_POST['anul']),
			"titlu" => trim($_POST['titlu']),
			"pag" => trim($_POST['pag']),
			"autori" => trim($_POST['autori']),
			"id" => 299
		];
		$carti[] = $newElement;
		file_put_contents($fileName, json_encode($carti));
	}
	?>	

	<form method="post">
		Anul <input type="number" name="anul"><br>
		Titlu <input type="text" name="titlu"><br>
		Pagini <input type="number" name="pag"><br>
		Autori <input type="text" name="autori"><br>
		<input type="submit" value="Add"><br>
	</form>

	<button><a href="http://crcars/">Show Lista</a></button>

</body>
</html>