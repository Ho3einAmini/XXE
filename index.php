<?php

	$XMLData = file_get_contents('php://input');
	
	$data = simplexml_load_string($XMLData, null, LIBXML_NOENT) or die("Error:: can not create object");
	
	var_dump($data);
?>