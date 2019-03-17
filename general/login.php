<?php

	session_start();

	include("../php/connectdb.php");
	$obj = new Connection();

	$flag= 0;
	$info = NULL;
	
	@$email =  $_POST['email'];
	@$password  =  $_POST['password'];

	$sql = "SELECT first_name,email,password FROM citizen";
	$result = $obj->cn->query($sql);


	while($row = $result->fetch_assoc())
	{
		if($email == $row['email'] && $password == $row['password']  )
		{
			header('Location: citizen.php?default');

			$_SESSION['email'] = $email;
			$_SESSION['first_name'] = $row['first_name'];

			$flag = 1;
			
			
		}
		


	}

	if(isset($_POST['forrmSubmit']))
	{
		if($flag == 0)
		{
			$info = "Wrong password or email.";

		}
	}

?>









<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div class="jumbotron col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4">

		<form class="form-horizontal" method="post" action="">

			<div class="sign">
				Sign In<hr>	
			</div>

			<div class="form-group">
				<div class="col-md-12">
				
						<input class="form-control" type="email" name="Email" placeholder="Email" required="">

				</div>
			</div>

			<div class="form-group">
				
				<div class="col-md-12">

					<input class="form-control" type="password" name="Password" placeholder="Password" required="">
				
				</div>
			</div>

			<input class="form-control col-md-12 col-sm-12 col-xs-12" type="submit" value="Log In">

			<div class="forgot_password">
				<a href="">Sign Up !</a> 
			</div>

			
		</form>

		
	</div>

</body>
</html>