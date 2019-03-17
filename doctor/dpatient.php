<?php


	include ("doctor.php");
	include("../library/connectdb.php");
	$run = new connection();



	// echo '

	// 	<div class="col-md-10">
	// 		<div class="panel panel-default">
		
	// 			<div class="panel-heading text-center overview">
	// 				<h4>My Patient</h4>
	// 			</div>
		
	// 		</div>
	// 	</div>

	// ';

	echo '

		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-body doctitle">
					<div  class="col-md-5 text-right">
						<h4>Patients by date :</h4>
					</div>

					<form action="" method="post">

						<div class="col-md-3">

						<select class="form-control" name="date">

							<option>'.date("Y-m-d").'</option>
							<option>'.date("Y-m-d",strtotime("+1 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+2 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+3 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+4 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+5 day")).'</option>
							<option>'.date("Y-m-d",strtotime("+6 day")).'</option>
							

						</select>

						</div>
						<div  class="col-md-2 text-center">
							<button class="btn btn-success" type="submit" name="submit">Patients</button>
						</div>

					</form>

				</div>			
			 </div>

		</div>
	 ';

	 if(isset($_POST['submit'])){
		$selected_date = $_POST['date'];

		$_SESSION['date'] = $selected_date;

		$dr_id	= $_SESSION['dtr_id'];
		// echo $dr_id;
		
		// Need dr_id, date, time, patient_id


		// Morning slot

	$morning_patients = 'SELECT * FROM citizen,schedule WHERE date(bookdate) = "'.$selected_date.'" AND doctor_id= '.$dr_id.' AND booktime BETWEEN "10001015" AND"11451200" AND schedule.citizen_id = citizen.medical_id';
	$patient1 = $run->cn->query($morning_patients);


		

		echo "<div class='col-md-10'>";
		
		//For scroll: style="overflow-y: scroll; height:700px;" use this in a div 

		echo '
			<div class="col-md-4">
				<div class="panel panel-default">

					<div class="panel-heading doctitle">
						<div  class="text-center">
							Morning
						</div>							
				 	</div>

				</div>';

				// div for scrolling
				// echo '<div style="overflow-y: scroll; height:700px;">';

				while($row = $patient1->fetch_assoc())
				{
						echo '

								<div class="col-md-12 no-margin">
									<div class="panel panel-default">

										<div class="panel-body">

											<div class="col-md-9"> 
													
												
													<div class="col-md-6">

														Name : '.$row['first_name'].'<hr/>
														ID: '.$row['citizen_id'].'<hr/>
												 
													</div>

													<div class="col-md-6">													
														
														Reason of appointment: <hr/>'.$row['booktime'].'
														
													</div>

													
											</div>


											<div class="col-md-3"> 
													<div class="panel panel-default img-padding">

														<div class="panel-body img-padding">
																												
															<div> 
																	<img src="../img/doctor/doc.jpg" width="100%" height="120px">
															</div>


														</div>
													
													</div>

													<div class="text-center"><a class="btn btn-primary" href="prescription/'.$row['citizen_id'].'/'.$row['booktime'].'">Take a look</a></div>

											</div>


										</div>
									
									</div>
								</div>

						';

				
			
				}

				// col-md-4 div end
				echo "</div>";	
			// Scroll div end
				// echo '</div>';


				//Morning slot end 


				// Afternoon slot

				$afternoon_patients = 'SELECT * FROM citizen,schedule WHERE date(bookdate) = "'.$selected_date.'" AND doctor_id= '.$dr_id.' AND booktime BETWEEN "04000415" AND"05450600" AND schedule.citizen_id = citizen.medical_id';
				$patient2 = $run->cn->query($afternoon_patients);


		

		

		echo '
			<div class="col-md-4">
				<div class="panel panel-default">

					<div class="panel-heading doctitle">
						<div  class="text-center">
							Afternoon
						</div>							
				 	</div>

				</div>';

				while($row = $patient2->fetch_assoc())
				{
						echo '

								<div class="col-md-12 no-margin">
									<div class="panel panel-default">

										<div class="panel-body">

											<div class="col-md-9"> 
													
												
													<div class="col-md-6">

														Name : '.$row['first_name'].'<hr/>
														ID: ngng'.$row['citizen_id'].'<hr/>
												 
													</div>

													<div class="col-md-6">													
														
														Reason of appointment: <hr/>'.$row['booktime'].'
														
													</div>

													
											</div>


											<div class="col-md-3"> 
													<div class="panel panel-default img-padding">

														<div class="panel-body img-padding">
																												
															<div> 
																	<img src="../img/doctor/doc.jpg" width="100%" height="120px">
															</div>


														</div>
													
													</div>

													<div class="text-center"  >
														<a class="btn btn-primary" href="prescription/'.$row['citizen_id'].'">Take a look</a>
													</div>

											</div>


										</div>
									
									</div>
								</div>

							';

				
			
							}

							echo "</div>";


							// Afternoon slot end



						// Night slot

				$night_patients = 'SELECT * FROM citizen,schedule WHERE date(bookdate) = "'.$selected_date.'" AND doctor_id= '.$dr_id.' AND booktime BETWEEN "08000815" AND"09451000" AND schedule.citizen_id = citizen.medical_id';
				$patient3 = $run->cn->query($night_patients);


		

		

		echo '
			<div class="col-md-4">
				<div class="panel panel-default">

					<div class="panel-heading doctitle">
						<div  class="text-center">
							Night
						</div>							
				 	</div>

				</div>';

				while($row = $patient3->fetch_assoc())
				{
						echo '

								<div class="col-md-12 no-margin">
									<div class="panel panel-default">

										<div class="panel-body">

											<div class="col-md-9"> 
													
												
													<div class="col-md-6">

														Name : '.$row['first_name'].'<hr/>
														ID: '.$row['citizen_id'].'<hr/>
												 
													</div>

													<div class="col-md-6">													
														
														Reason of appointment: <hr/>'.$row['booktime'].'
														
													</div>

													
											</div>


											<div class="col-md-3"> 
													<div class="panel panel-default img-padding">

														<div class="panel-body img-padding">
																												
															<div> 
																	<img src="../img/doctor/doc.jpg" width="100%" height="120px">
															</div>


														</div>
													
													</div>

													<div class="text-center"><a class="btn btn-primary" href="prescription/'.$row['citizen_id'].'">Take a look</a></div>

											</div>


										</div>
									
									</div>
								</div>

							';

				
			
							}

							echo "</div>";


							// Night slot end	

	 }


	 // Retriving patients

	


				

	

?>