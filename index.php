<html>
<head>
	<title></title>
</head>
<body>
	<form method = "POST" action = "destino.php">
		<input type = "text" name="mensaje"><br>
		<input type = "submit"> <br>
	</form>

</body>
</html>

<?php

	//echo "Hola PHP <br>";
	
	echo "Voy a mostrar la variable REQUEST <br>";
	var_dump($_REQUEST);
	echo "<br>";
	

	echo "Voy a mostrar la variable GET <br>";
	var_dump($_GET);
	echo "<br>";

	echo "Voy a mostrar la variable POST <br>";
	var_dump($_POST);
	echo "<br>";

	echo "<br>";

	if (isset($_POST ['mensaje'])) 
	{
		echo $_POST ['mensaje'];
	}else
	{
		echo "Primer Ingreso";
	}
	
?>

