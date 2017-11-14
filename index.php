 <!-- connot connect to database -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RBK-Final-Task-PHP</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<center>
	<h1>
	Welcom to your Photo Cloud website
			JOIN US AND SIGN UP 
	</h1>
</center>
	<div>
	<center>
        <form method="POST" action = "signup.php" >
              Username:<input autocomplete='off' type="text" name="username">
              Password:<input autocomplete='off' type="password" name="password">
              <br><br>
              <button type="submit" name="submitSignUp"
			  
			  value= "submitSignUp">submit/signUpa</button>
        </form>
	<br><br>
 Or if you have account you can <a href="./signin.php">Sign In</a>
	 </center>
	</div>
</body>
</html> 