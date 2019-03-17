<?php
	
        include("../library/connectdb.php");

		@$first_name = $_POST['firstname'];
		@$last_name = $_POST['lastname'];
		@$email   = $_POST['email'];
		@$mobile = $_POST['mobile'];
		@$address=$_POST['address'];
		@$national_id = $_POST['nationalid'];
		@$blood_group = $_POST['bloodgroup'];
		@$religion   = $_POST['religion'];
		@$nationality = $_POST['nationality'];
		@$password=$_POST['password'];
		@$medical_id=$_POST['medicalid'];
		@$gender=$_POST['gender'];
		@$age=$_POST['age'];

	
		if(isset($_POST['submit']))

		{
	
			$sql = "INSERT INTO citizen (medical_id,first_name,last_name,email,mobile,address,national_id,blood_group,religion,nationality,password,gender,age) VALUES ('$medical_id','$first_name','$last_name','$email','$mobile','$address','$national_id','$blood_group','$religion','$nationality','$password','$gender','$age')";

			$obj = new Connection();
			$obj->cn->query($sql);

		}

		if(isset($_POST['submit']))
		{
			
			header('Location: login');	
		}
		
	
?>

