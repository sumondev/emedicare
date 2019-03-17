

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="sign_in">

	<div class="jumbotron col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4">

		<form class="form-horizontal" method="post" action="lprocess">

			<div class="sign">
				Sign In<hr>	
			</div>

			<div class="form-group">
				<div class="col-md-12">
				
						<input class="form-control" type="email" name="email" placeholder="Email" required="">

				</div>
			</div>

			<div class="form-group">
				
				<div class="col-md-12">

					<input class="form-control" type="password" name="password" placeholder="Password" required="">
				
				</div>
			</div>

			<input class="form-control col-md-12 col-sm-12 col-xs-12" type="submit" name="submit" value="Log In">

			<div class="forgot_password">
				<a href="signup">Sign Up !</a> 
			</div>

			
		</form>

		
	</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

</body>
</html>