

<!-- base makes css/img worked  -->
<base href="http://localhost/project/citizen/confirm">

<?php

//  need 4 parameter to confirm appoinment



include("../library/connectdb.php");
include("citizen.php");
$run = new connection();

$flag = 1;

$doctor_id  = $_SESSION["dr_id"];

$citizen_id = $_SESSION["c_id"];

$date 		= $_SESSION['date'];

$time 		= $_GET['time'];

// echo $time;
// echo "<br>".$doctor_id;
// echo "<br>".$citizen_id;
// echo "<br>".$_SESSION['date'] ;

// Check booked or not before submission
// Important: need a space before between ' & AND
// Important: doc id and citizen id should be integer

$check = 'SELECT * FROM schedule WHERE date(bookdate) = "'.$date.'" AND doctor_id= '.$doctor_id.' AND citizen_id= '.$citizen_id.' AND booktime = "'.$time.'"';
$checking_booked_seat = $run->cn->query($check);

while($row = $checking_booked_seat->fetch_assoc())
	{
		$flag = 0;
	}


if($flag == 0){
	// go to hell/ seat booked already
	echo "Already appointed sorry. Try another one";
}
elseif ($flag == 1) {



	// //Symptoms

	echo '


		<form method="post" action="">

			<div class="col-md-10">
				<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">

				<div class="panel-heading text-center doctitle">
					Reason of appoinment
				</div>

				<div class="panel-body ">

					<textarea required class="form-control reason" name="Reason"></textarea>
					
				</div>
			</div>
			</div>

			<div></div>


			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">

					<div class="panel-heading text-center doctitle">
						Payment
					</div>

					<div class="panel-body text-center">

						Fee : 500 tk
						
					</div>
				</div>
			</div>
			</div>

			<div class="col-md-10">
				<div class="col-md-2 col-md-offset-5">
					<div class="panel panel-default">

						<div class="panel-body text-center">

							<input type="submit" name="submit" value="Done" class="btn btn-success"/> 
							
						</div>
					</div>
				</div>
			</div>

		</form>

		


	';

	// Before payment

		// Have to add payment procedure

	// After payment
		// $sql = " INSERT INTO schedule (doctor_id,citizen_id,bookdate,booktime) VALUES ('$doctor_id','$citizen_id','$date','$time') ";
		// $run->cn->query($sql);

	if(isset($_POST['submit']))

	{

		$reason = $_POST['Reason'];

		$sql = " INSERT INTO schedule (doctor_id,citizen_id,bookdate,booktime,reson) VALUES ('$doctor_id','$citizen_id','$date','$time','$reason') ";
		$run->cn->query($sql);
		echo '

			<div class="col-md-10 ">
				<div class="col-md-2 col-md-offset-5">
					<div class="panel panel-default">

						<div class="panel-body text-center text-warning">

							Appoinment is confirmed
							
						</div>
					</div>
				</div>
			</div>


		';
		
	}

	 
}



?>
