<?php
	
	include("connectdb.php");
	session_start();

	$obj = new Connection();

	$flag= 0;
	$info = NULL;
	
	@$email =  $_POST['email'];
	@$password  =  $_POST['password'];

	$sql = "SELECT * FROM citizen";
	$result = $obj->cn->query($sql);


	while($row = $result->fetch_assoc())
	{
		if($email == $row['email'] && $password == $row['password']  )
		{
			
			// for one step back in htaccess using ../
			header('Location: home');


			$_SESSION['email'] = $email;
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['c_id'] = $row['medical_id'];

			$flag = 1;
			
			
		}
		


	}

	if(isset($_POST['submit']))
	{
		if($flag == 0)
		{
			header('Location: login');

		}
	}

?>