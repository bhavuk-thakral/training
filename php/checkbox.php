<html>
<head>
<a href="edit.php">Check Box</a>
</head>
<body>
<div class="container">
<div class="main">
<h2>Select the course you want:</h2><hr/>
<form action="checkbox.php" method="post"> \checkbox form to get the values
<label class="heading"></label><br/><br/>
<input type="checkbox" name="check_list[]" value="Btech"><label>Btech</label><br/>
<input type="checkbox" name="check_list[]" value="Data Support"><label>Data Support</label><br/>
<input type="checkbox" name="check_list[]" value="Online Marketing"><label>Online Marketing</label><br/>
<input type="checkbox" name="check_list[]" value="Web Development"><label>Web Development</label><br/>
<input type="checkbox" name="check_list[]" value="Mtech"><label>Mtech</label><br/><br/>
<input type="submit" name="submit" Value="Submit"/> \On submitting the form,user will be redirected to "chckbox.php"
<br/><br/>
</form>
</div>
<br/>
</div>
</body>

</html>