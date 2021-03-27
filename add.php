<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>College</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
			<td><label for ="student" class="form label">Gender</label></td>
			<td><input type="checkbox">
			<label class="form-check-label" for="exampleCheck1">Male</label>
			<input type="checkbox">
			<label class="form-check-label" for="exampleCheck1">Female</label></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$college = $_POST['college'];
		$phone = $_POST['phone'];

		
		include_once("config.php");

		
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>