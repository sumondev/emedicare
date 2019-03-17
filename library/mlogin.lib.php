<?php
	
	include("connectdb.php");
	session_start();

	$obj = new Connection();

	$flag= 0;
	$info = NULL;
	
	@$email =  $_POST['email'];
	@$password  =  $_POST['password'];

	$sql = "SELECT * FROM mcenter";
	$result = $obj->cn->query($sql);


	while($row = $result->fetch_assoc())
	{
		if($email == $row['email'] && $password == $row['password']  )
		{
			

			$_SESSION['name'] = $row['name'];
			$_SESSION['mcenter_id'] = $row['mcenter_id'];
			$flag = 1;
			
			header('Location: home');
			
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