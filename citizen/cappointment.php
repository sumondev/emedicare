<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>


</head>
<body>


<?php
	
	include("../library/connectdb.php");
	include("citizen.php");
	$run = new connection();

	// Capturing doctor id

	$id = $_GET['id'];

	$time  = array(
					"10001015","10151030","10301045","10451100","11001115","11151130","11301145","11451200",  
					"04000415","04154030","04300445","04450500","05000515","05150530","05300545","05450600",
					"08000815","08150830","08300845","08450900","09000915","09150930","09300945","09451000"
				);
	$status= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);


	// Using session for global variable usage

	// session_start();
	$_SESSION["dr_id"] = $id;

	$query = 'SELECT * FROM doctor WHERE doctor_id = '.$id;
	
	$doctor = $run->cn->query($query);




	echo '

		<div class="col-md-4 col-md-offset-3">
			<div class="panel panel-default">

				<div class="panel-heading text-center doctitle">
					<h4>Appoinment</h4>
				</div>
			
			 </div>
		</div>
	 ';



	 echo '

		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-body doctitle">
					<div  class="col-md-5 text-right">
						<h4>Pick up your date :</h4>
					</div>

					<form action="" method="post">

						<div class="col-md-3">

						<select class="form-control" name="date">

							
							<option>'.date("Y-m-d",strtotime("+1 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+2 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+3 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+4 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+5 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+6 day")).'</option>
							

						</select>

						</div>
						<div  class="col-md-2 text-center">
							<button class="btn btn-primary" type="submit" name="submit">Show Schedule</button>
						</div>

					</form>

				</div>			
			 </div>

		</div>
	 ';

	 // echo "Today is " . date("d/m/Y",strtotime("+1 day")) . "<br>";


	// while($row = $doctor->fetch_assoc())
	// {
	// }



	 // Button for booking


	if(isset($_POST['submit'])){
		$selected_date = $_POST['date'];

		$_SESSION['date'] = $selected_date;
		
		// Storing Selected Value In Variable
		// echo "You have selected : " .$selected_date."<br>";  // Displaying Selected Value


		// Take the date as string
		
		// Need more parameter to select exact booked seat

		$status = 'SELECT * FROM schedule WHERE date(bookdate) = "'.$selected_date.'" AND doctor_id= '.$id ;
		$current_status = $run->cn->query($status);


		

		 while($row = $current_status->fetch_assoc())
		{
			$i=0;

			while($i<24)
			{
				if($time[$i] == $row['booktime'])
				{
					$status[$i] = 1;

				}

				$i++;
				
			}

			// echo $row['time']."<br>";

			

	 	}

	 	// slot start

	 	echo "<div class='col-md-10'>";

		 echo '

		<div class="col-md-4">
			
			<div class="panel panel-default">

				<div class="panel-heading doctitle">
					<div  class="text-center">
						Morning
					</div>							
				 </div>


				<div class="panel-body text-center">
					
					<div class="col-md-6">

						<div class=" text-primary">Time</div>

						<hr>

						<div><a type="button" href="confirm/10001015" class="btn btn-primary m"> 10:00 AM - 10:15 AM </a></div>

						<div><a type="button" href="confirm/10151030" class="btn btn-primary m"> 10:15 AM - 10:30 AM </a></div>

						<div><a type="button" href="confirm/10301045" class="btn btn-primary m"> 10:30 AM - 10:45 AM </a></div>

						<div><a type="button" href="confirm/10451100" class="btn btn-primary m"> 10:45 AM - 11:00 AM </a></div>

						<div><a type="button" href="confirm/11001115" class="btn btn-primary m"> 11:00 AM - 11:15 AM </a></div>

						<div><a type="button" href="confirm/11151130" class="btn btn-primary m"> 11:15 AM - 11:30 AM </a></div>

						<div><a type="button" href="confirm/11301145" class="btn btn-primary m"> 11:30 AM - 11:45 AM </a></div>

						<div><a type="button" href="confirm/11451200" class="btn btn-primary m"> 11:45 AM - 12:00 PM </a></div>
						
						

					</div>


					<div class="col-md-6">

						<div class=" text-primary">Status</div>

						<hr>

						<div><button type="button" class="btn btn-success m">'; if($status[0]==1){echo "Booked";}else echo "Active"; echo'</button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[1]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[2]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[3]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[4]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[5]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[6]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[7]==1){echo "Booked";}else echo "Active"; echo' </button></div>
						
						

					</div>
					
				</div>			
			 </div>

		</div>
	 ';



	 // ------------------------Afternoon--------------------

	 echo '

		<div class="col-md-4">
			
			<div class="panel panel-default">

				<div class="panel-heading doctitle">
					<div  class="text-center">
						Afternoon
					</div>							
				 </div>


				<div class="panel-body text-center">
					
					<div class="col-md-6">

						<div class=" text-primary">Time</div>

						<hr>

						<div><a type="button" href="confirm/04000415" class="btn btn-primary m"> 04:00 PM - 04:15 PM </a></div>

						<div><a type="button" href="confirm/04154030" class="btn btn-primary m"> 04:15 PM - 04:30 PM </a></div>

						<div><a type="button" href="confirm/04300445" class="btn btn-primary m"> 04:30 PM - 04:45 PM </a></div>

						<div><a type="button" href="confirm/04450500" class="btn btn-primary m"> 04:45 PM - 05:00 PM </a></div>

						<div><a type="button" href="confirm/05000515" class="btn btn-primary m"> 05:00 PM - 05:15 PM </a></div>

						<div><a type="button" href="confirm/05150530" class="btn btn-primary m"> 05:15 PM - 05:30 PM </a></div>

						<div><a type="button" href="confirm/05300545" class="btn btn-primary m"> 05:30 PM - 05:45 PM </a></div>

						<div><a type="button" href="confirm/05450600" class="btn btn-primary m"> 05:45 PM - 06:00 PM </a></div>
						
						

					</div>


					<div class="col-md-6">

						<div class=" text-primary">Status</div>

						<hr>

						<div><button  type="button" class="btn btn-success m">'; if($status[8]==1){echo "Booked";}else echo "Active"; echo'</button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[9]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[10]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[11]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[12]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[13]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[14]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[15]==1){echo "Booked";}else echo "Active"; echo' </button></div>
						
						

					</div>
					
				</div>			
			 </div>

		</div>
	 ';


	 // -----------------------Night--------------------

	 echo '

		<div class="col-md-4">
			
			<div class="panel panel-default">

				<div class="panel-heading doctitle">
					<div  class="text-center">
						Night
					</div>							
				 </div>


				<div class="panel-body text-center">
					
					<div class="col-md-6">

						<div class=" text-primary">Time</div>

						<hr>

						<div><a type="button" href="confirm/08000815" class="btn btn-primary m"> 08:00 PM - 08:15 PM </a></div>

						<div><a type="button" href="confirm/08150830" class="btn btn-primary m"> 08:15 PM - 08:30 PM </a></div>

						<div><a type="button" href="confirm/08300845" class="btn btn-primary m"> 08:30 PM - 08:45 PM </a></div>

						<div><a type="button" href="confirm/08450900" class="btn btn-primary m"> 08:45 PM - 09:00 PM </a></div>

						<div><a type="button" href="confirm/09000915" class="btn btn-primary m"> 09:00 PM - 09:15 PM </a></div>

						<div><a type="button" href="confirm/09150930" class="btn btn-primary m"> 09:15 PM - 09:30 PM </a></div>

						<div><a type="button" href="confirm/09300945" class="btn btn-primary m"> 09:30 PM - 09:45 PM </a></div>

						<div><a type="button" href="confirm/09451000" class="btn btn-primary m"> 09:45 PM - 10:00 PM </a></div>
						
						

					</div>


					<div class="col-md-6">

						<div class=" text-primary">Status</div>

						<hr>

						<div><button type="button" class="btn btn-success m">'; if($status[16]==1){echo "Booked";}else echo "Active"; echo'</button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[17]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[18]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[19]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[20]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[21]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[22]==1){echo "Booked";}else echo "Active"; echo' </button></div>

						<div><button type="button" class="btn btn-success m"> '; if($status[23]==1){echo "Booked";}else echo "Active"; echo' </button></div>
						
						

					</div>
					
				</div>			
			 </div>

		</div>
	 ';


echo "</div>";

	 	// slot end
	}




?>

</body>
</html>