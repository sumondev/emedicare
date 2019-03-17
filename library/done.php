<?php

	include("../library/connectdb.php");
	$max = 10;
	$run = new connection();
	$doc ='';
	$citizen='';
	// $timestamp = date('Y-m-d');
	
	
	 if (isset($_POST['doctor_id'])) {
		$doc = $_POST['doctor_id'];
		$citizen = $_POST['citizen_id'];
	}

	$insert ="INSERT INTO schedule(doctor_id,citizen_id,slot_1_patient) VALUES ('$doc','$citizen',1)";
	$get = 'SELECT slot_1_patient FROM schedule where doctor_id = '.$doc;
	
	$patient = $run->cn->query($insert);
	$doctor = $run->cn->query($get);

// 	$i=0;

// 	while($x = $doctor->fetch_assoc())
// 	{
// 		$i++;
// 	}

// 	$Available_pos = $max-$i;

// echo '
	
// 	<div class="panel panel-default">

// 		<div class="panel-body text-center">

// 			<div class="col-md-5 text-primary">
// 				<h4 >Appointed patient : '.$i.'</h4>
// 			</div>

// 			<div class="col-md-5 text-success">
// 				<h4 >Available position : '.$Available_pos.'</h4>
// 			</div>
			
// 			<div class="col-md-2 text-success">
// 				<button class="btn btn-warning" id="apply" value="'.$Available_pos.'" type="button">Apply for appoinment</button>
// 			</div>
// 		</div>
	
// 	</div>
	
// ';


?>