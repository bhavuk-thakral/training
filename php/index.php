<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM student ORDER BY id DESC");
echo mysqli_error($mysqli);
?>

<html>
<head>
    <title>Homepage</title>

	<div style="width:600px;">
	<div class="bg-color"
		style="background-color:lightblue;
		height: 100vh">
		<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"></a></div>
		<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
		</div>
</head>

<body>
<center>
<h1>Student Details</h1></center>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>
    <tr>
        <th>Name</th> <th>College</th> <th>Phone</th> <th>Gender</th> <th>EDIT DELETE</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$user_data['Name']."</td>";
        echo "<td>".$user_data['College']."</td>";
        echo "<td>".$user_data['Phone']."</td>";
		echo "<td>".$user_data['Gender']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>