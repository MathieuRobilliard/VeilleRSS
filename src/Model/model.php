<?php

	try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=bd_veillerss;charset=utf8', 'root', '',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

?>