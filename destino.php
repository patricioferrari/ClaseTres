<?php
	var_dump($_REQUEST);

	if (strlen($_POST['mensaje']) > 5) 
	{
		include "mayoracinco.html";	
	}else
	{
		include "menoracinco.html";
	}
?>