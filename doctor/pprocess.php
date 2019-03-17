<base href="http://localhost/project/doctor/serve">


<?php

include ("doctor.php");
include("../library/connectdb.php");
$run = new connection();




	
if(isset($_POST['submit']))
{

		$name = $_FILES['fileUpload']['name'];
		$type = $_FILES['fileUpload']['type'];
		$tmp_name = $_FILES['fileUpload']['tmp_name'];
		$pdf_url = "http://localhost/project/doctor/upload/".$name;
		$location = "upload/";

		echo $pdf_url;

		$c_id =  $_SESSION['current_pid'];
		$dr_id = $_SESSION['dtr_id'];
		$current_date = date("Y-m-d");
		$booktime = $_SESSION['time'];
		

		if(isset($name))
		{
			if(!empty($name))
			{
				move_uploaded_file($tmp_name, $location.$name);
				$query = "INSERT INTO patient_history (citizen_id, doctor_id, history, service_date , booktime) VALUES ('$c_id', '$dr_id','$pdf_url', '$current_date', '$booktime')";
				$run->cn->query($query);

				$smsg = "Uploaded Successfully";

				echo $smsg;
			
			}
		}

		else
			echo "Name is not set";
}

?>