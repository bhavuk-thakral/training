<!DOCTYPE html>

<html>
<head>
  <title>login form</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div id="frm">
<form action="process.php" method="POST">

<center>
<h1>LOGIN FORM</h1></center>
   <p>
    <label>Username:</label>
    <input type="text" id="user" name="user"/>
	</p>
	
	<p>
    <label>Password:</label>
    <input type="password" id="pass" name="pass"/>
	</p>
	
	<div class="form-group">
    <label>
      <input type="checkbox"  name="remember"> Remember me &nbsp &nbsp
    </label><button type="submit" class="btn btn-danger">Login</button>
  </div>
</form>
</div>
</body>
</html>