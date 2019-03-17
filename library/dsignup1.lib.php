<?php
	
        include("../library/connectdb.php");

		@$first_name = $_POST['firstname'];
		@$last_name = $_POST['lastname'];
		@$email   = $_POST['email'];
		@$password=$_POST['password'];
		@$confirm_password=$_POST['confirm_password'];
		@$reg_id=$_POST['govt_reg_no'];
		@$age=$_POST['age'];
		@$mobile = $_POST['mobile'];
		@$habit = $_POST['habit'];

		@$address=$_POST['address'];
		@$national_id = $_POST['nationalid'];
		@$blood_group = $_POST['bloodgroup'];
		@$gender=$_POST['gender'];
		@$religion   = $_POST['religion'];
		@$nationality = $_POST['nationality'];
		@$degree=$_POST['degree'];
		@$speciality=$_POST['speciality'];
		@$description=$_POST['description'];

	
		if(isset($_POST['first_submit']))

		{
	
			$sql = "INSERT INTO doctor (first_name,last_name,email,password,govt_reg_no,degree,specialist,gender,religion,blood_group,address,mobile,national_id,nationality,description,habit,age) VALUES ('$first_name','$last_name','$email','$password','$reg_id','$degree','$speciality','$gender','$religion','$blood_group','$address','$mobile','$national_id','$nationality','$description','$habit','$age')";

			$obj = new Connection();
			$obj->cn->query($sql);

		}

		if(isset($_POST['first_submit']))
		{
			
			header('Location: create_schedule');	
		}
		
	
?>

