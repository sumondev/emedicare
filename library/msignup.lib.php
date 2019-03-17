

<?php
	
        include("../library/connectdb.php");

		@$name = $_POST['name'];

		@$mcenter_id=$_POST['id'];
		
		@$email   = $_POST['email'];

		@$password=$_POST['password'];

		@$contact = $_POST['contact'];


		@$address=$_POST['address'];

		@$country=$_POST['country'];


		
	
		if(isset($_POST['submit']))

		{

			$sql = "INSERT INTO mcenter (name,mcenter_id,email,password,contact,address,country)  VALUES ('$name','$mcenter_id','$email','$password','$contact','$address','$country')";

			$obj = new Connection();
			$obj->cn->query($sql);
			
			header('Location: login');

		}
	
	
?>


