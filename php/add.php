<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<div class="container">
	<div class="main">
	<h2>Select the course you want:</h2>
	<form action="checkbox.php" method="post"> Checkbox form to get the values
	<label class="heading"></label><br/><br/>
	<input type="checkbox" name="check_list[]" value="Btech"><label>Btech</label><br/>
	<input type="checkbox" name="check_list[]" value="Data Support"><label>Data Support</label><br/>
	<input type="checkbox" name="check_list[]" value="Online Marketing"><label>Online Marketing</label><br/>
	<input type="checkbox" name="check_list[]" value="Web Development"><label>Web Development</label><br/>
	<input type="checkbox" name="check_list[]" value="Mtech"><label>Mtech</label><br/><br/>
	<input type="submit" name="submit" Value="Submit"/> On submitting the form"
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			
			<tr>
				<td>College</td>
				<td><input type="text" name="College"></td>
			</tr>
			
			<tr>
				<td>Phone</td>
				<td><input type="text" name="Phone"></td>
			</tr>

			<tr>
			<td>
			<label for ="student" name="Gender">Gender</label>
			<input type="radio" name="Gender" tabindex="" value="Male">Male 
			<input type="radio" name="Gender" tabindex="" value="Female">Female
			</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
		</form>
	<?php

	if(isset($_POST['Submit'])) {
		$Name = $_POST['Name'];
		$College = $_POST['College'];
		$Phone = $_POST['Phone'];
		$Gender = $_POST['Gender'];

		
		include_once("config.php");

		
		$result = mysqli_query($mysqli, "INSERT INTO student(Name,College,Phone,Gender) VALUES('$Name','$College','$Phone','$Gender')");

		echo "User added successfully. <a href='index.php'>View student</a>";
	}
	?>
</body>
</html>