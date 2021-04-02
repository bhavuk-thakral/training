<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$Name=$_POST['Name'];
	$Phone=$_POST['Phone'];
	$College=$_POST['College'];
	$Gender=$_POST['Gender'];
	$result = mysqli_query($mysqli, "UPDATE student SET Name='$Name',College='$College',Phone='$Phone',Gender='$Gender' WHERE id=$id");
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id=$id");

while($student_data = mysqli_fetch_array($result))
{
	$Name = $student_data['Name'];
	$College=$student_data['College'];
	$Phone = $student_data['Phone'];
    $Gender = $student_data['Gender'];
}
?>

<html>
<head>
	<title>Edit student Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_student" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr>
				<td>College</td>
				<td><input type="text" name="College" value="<?php echo $College;?>"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="Phone" value="<?php echo $Phone;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		<tr>
			<td><label for ="student" name="Gender">Gender</label></td>
			<input type="radio" name="Gender" tabindex="" value="Male" <?php if ($Gender=="Male" ) echo "checked";?> >Male 
			<input type="radio" name="Gender" tabindex="" value="Female" <?php if ($Gender=="Female" ) echo "checked";?> >Female
			</tr>
			<tr>
		</table>
	</form>
</body>
</html>