<?
include 'functions.php';

$misIngredientes = listar_ingredientes(1);
	
	foreach ($misIngredientes as $value) {
		echo $value['id'].' - '.$value['nombre'].'<br>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Comida</title>
</head>
<body>
	<div>

	</div>
</body>
</html>