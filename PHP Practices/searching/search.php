<?php
	session_start();
?>

<?php
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "test";
	
	$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
	
	/*inserting data
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$age = $_POST['age'];
		
		$sql = "INSERT INTO test_table(name, age) VALUES ('$name', '$age');";
		
		mysqli_query($conn, $sql);
		echo("success");
	}
	*/

	
	if(isset($_POST['submit'])){
		$searchData = $_POST['name'];
		//diplay the sented data to php
		echo("You are searching for ");
		echo($searchData);
		echo("<br >");
		
		//$name = mysqli_real_escape_string($conn, $_POST['name']);
		
		$sql = "SELECT * FROM `test_table` WHERE `name` LIKE '%". $searchData ."%';";
		
		$result = mysqli_query($conn, $sql);
		
		$num_rows = mysqli_num_rows($result);
		
		$resultCheck = mysqli_fetch_assoc($result);

		echo($resultCheck['name']);
		
		
		echo(" we found ". $num_rows ." result");
	?>
		
		<?php while($row = mysqli_fetch_array($result)):?>
		 <h1><?php echo $row ['name']; ?></h1> <br >
		 <h2><?php echo $row ['age']; ?></h2>
		 
		 <?php endwhile; ?>
	<?php
		
	}else{
		header("Location: findout.html?error");
		exit();
	}
?>