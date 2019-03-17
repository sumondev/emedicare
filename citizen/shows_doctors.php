
	<?php
	
	include("../library/connectdb.php");
	include ("../citizen/citizen.php");

	$run = new connection();
	$query = "SELECT * FROM doctor";
	$doctor = $run->cn->query($query);

	echo "<div class='panel panel-default'>";

		echo "<div class='panel-heading text-center doctitle'>";
			echo "<h4>Doctors</h4>";
		echo "</div>";
	
	echo "</div>";


	$i=0;
	while($row = $doctor->fetch_assoc())
	{
			echo "<div class='col-md-10 font'>";

					echo "<div class='panel panel-default'>";

			echo '
					<div class="panel-heading doctitle text-center">
						Dr. '.$row['first_name']." ".$row['last_name'].'

					</div>


			';

				echo "<div class='panel-body '>";


					
					
					// Left div

					echo "<div class='col-md-9'> ";


							// Top view

							

							

							// Top view end


							echo "<div class='col-md-6'>";

								
								// echo "Name : ".$row['first_name']."<hr/>";
								
								echo "Degree : ".$row['degree']."<hr/>";
								echo "Specialist : ".$row['specialist']."<hr/>";
								echo "Address : ".$row['address']."<hr/>";
							 

							echo "</div>";

							echo "<div class='col-md-6'>";

								// echo "".$row['college']."</br></br>";
								// echo "".$row['medical_center']."</br></br>";
								// echo "".$row['registration_id']."</br></br>";

								echo "Gender : ".$row['gender']."<hr>";
								echo "Description"."<hr/>";
								echo "<div class='text-justify'>".$row['description']."</div>";

								

							echo "</div>";

							
					echo "</div>";

					// Right div

					echo "<div class='col-md-3'> ";
							echo "<div class='panel panel-default img-padding'>";

								echo "<div class='panel-body img-padding'>";
									
									
			

									echo "<div > ";
											echo "<img class='img-round' src='../img/doctor/doc.jpg'/ width='100%' height='120px'>";
									echo "</div>";





								echo "</div>";
							
							echo "</div>";

							echo "<div class='text-center'> <a class='btn btn-primary' href='".$row['doctor_id']."'> Make an appointment </a></div>";						

					echo "</div>";





				echo "</div>";
			
			echo "</div>";


				
			echo "</div>";

	}


?>
