<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$college=$_POST['college'];
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$college=$user_data['email'];
	$phone = $user_data['mobile'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>College</td>
				<td><input type="text" name="college" value=<?php echo $college;?>></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value=<?php echo $phone;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		<tr>
	   <td><label for ="student" class="form label">Gender</label></td>
       <td><input type="checkbox"></td>
       <td><label class="form-check-label" for="exampleCheck1">Male</label></td>
       <td><input type="checkbox"></td>
       <td><label class="form-check-label" for="exampleCheck1">Female</label></td>
	</tr>
		</table>
	</form>
</body>
</html>