<!DOCTYPE html>
<html>
<head>
	<title>Send js variable to php by post method</title>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<form>
		<input type="text" id="name" placeholder="name">
		<input type="text" id="age" placeholder="age">
		<input type="button" value="submit" onclick="post()">		
	</form>
	<div id="result">
		
	</div>
	<script type="text/javascript">
		// function post() {
		// 	var name = $('#name').val();
		// 	var age = $('#age').val();

		// 	$.post('validate.php', {postname:name,postage:age},
		// 		function(data){
		// 			$('#result').html(data);

		// 		});
		// }


		//creating empty array
		var user = [];

		//creating a user arrey empty object list
		var user1 = {}
		var user2 = {}

		//enteing the object data
		user1.id = 1;
		user1.fristName = "Abid";
		user1.lsatName = "Hasan";
		user1.phone = "01915664090";
		//pushing this object to user array
		user.push();

		//user2 object data
		user2.id = 2;
		user2.fristName = "fristName";
		user2.lsatName = "lsatName";
		user2.phone = "0015";
		//pushing this object to user array
		user.push();

		console.log(user.user1);

	</script>
</body>
</html>