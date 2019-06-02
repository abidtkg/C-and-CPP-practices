<!DOCTYPE html>
<html>
<head>
	<title>Send js variable to php by post method</title>
	
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<form>
		<input type="text" id="name" placeholder="Username">
		<input type="text" id="age" placeholder="Password">
		<input type="button" value="submit" onclick="send()">		
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
		//var user = [];

		//creating a user arrey empty object list
		function send(){
			var users = []
			var user = {}
			var userdata = {}

			//enteing the object data
			user.id = 1;
			user.name = document.getElementById("name").value;
			user.age = document.getElementById("age").value;
			user.phone = '01915664090';
			users.push(user);

			userdata.time = "25 May 2019";
			userdata.ip = "192.168.0.1";
			users.push(userdata);


			$.ajax({
				url: 'validate.php',
				method: 'post',
				data:{users: JSON.stringify(users)},
				success: function(res){
				 	console.log(res)
				 }
			});
		}

	</script>
</body>
</html>