<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background-color: plum">
	<center><?php

		if (isset($_GET['submit'])){
			$name 	 = $_GET['name'];
			$gender  = $_GET['gender'];
			$age 	 = $_GET['age'];
			$city 	 = $_GET['city'];
			$message = $_GET['message'];

			echo "Request received from $name, $gender, your are $age years old! City: $city. Your message $message";
		}

	?>
	<form action="" method="GET">
		<p>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="gender">Gender:</label>
			<input type="text" name="gender" id="gender">
		</p>
		<p>
			<label for="age">Age:</label>
			<input type="number" name="age" min="1" id="age">
		</p>
		<p>
			<label for="city">City:</label>
			<input type="text" name="city" id="city">
		</p>
		<p>
			<label for="message">Message:</label>
			<p>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</p>
		</p>
		<p><input type="submit" name="submit" value="Submit"></p>
	</form>
</center>
</body>
</html>