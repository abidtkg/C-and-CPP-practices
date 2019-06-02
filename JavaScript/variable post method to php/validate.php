<?php 
	$users = json_decode($_POST['users']);
	$row1 = $users[0];
	$name = $row1->name;
	
	print_r($name);
?>