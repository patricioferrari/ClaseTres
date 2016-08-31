<?php
	//var_dump($_REQUEST);

	if (strlen($_POST['mensaje']) > 5) 
	{
		include "mayoracinco.php";	
	}else
	{
		include "menoracinco.php";
	}
?> 