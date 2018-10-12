<!DOCTYPE html>
<html>
<head>
	<title>User Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>  
		login
	</h2>
</div>
<form method="post" action="login.php">
	<div class="input-group">
		<label>username</label>
		<input type="text" name="username">
	</div>
	 
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">login</button></div>
		<p>
			Not yet a member? <a href="register.php">sign up</a>
		</p>
</form>
</body>
</html>