<?php
	
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "test";
	
	$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
	
	//inserting data
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$age = $_POST['age'];
		
		$sql = "INSERT INTO test_table(name, age) VALUES ('$name', '$age');";
		
		mysqli_query($conn, $sql);
		echo("success");
	}
?>