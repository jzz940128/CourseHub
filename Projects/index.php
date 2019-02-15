<!-->
*sign up page
*a sample page for user create an account
*calling the signup.php to connect with sqlite database
<-->
<!Doctype html>
<html>
<head>
	<title>
		sign up page
	</title>
</head>
<body>
	<center> <h1> Become a Member in CourseHub Right Now!</h1> </center>	
	<center>
		<form action = "signup.php" method = "POST">
			Account Name:&nbsp<input type="text", name="in_account"><br><br>
			
			Username:&nbsp &nbsp &nbsp &nbsp &nbsp<input type="text", name="in_username"><br><br>
			
			Password:&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text", name="in_password"><br><br>
			
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
			
			<button type="submit", name="submit"> submit </button>
		</form>
</center>
</body>	
</html>
