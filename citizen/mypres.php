<?php

include 'citizen.php';
include("../library/connectdb.php");
$run = new connection();



?>

<div class="col-md-10">
	<div class="panel panel-default">

		<div class="panel-heading text-center doctitle">
			My prescriptions
		</div>

		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped text-center">
					<tr>
						<th class="col-md-4 text-center ">Doctor's Name</th>
						<th class="col-md-4 text-center">Date</th>
						<th class="col-md-4 text-center">File</th>
						
					</tr>


					
						<?php

							$sql =  'SELECT * FROM patient_history,doctor WHERE patient_history.doctor_id=doctor.doctor_id AND patient_history.citizen_id="'.$_SESSION['c_id'].'"';
							$data = $run->cn->query($sql);

							while ($row = $data->fetch_assoc()) {
								echo '
									<tr>
										<td>'.$row['first_name'].'</td>
										<td>'.$row['service_date'].'</td>
										<td>Prescription.pdf</td>
										

									</tr>

								';
							}

						?>
					</
				</table>
				
			</div>
		</div>
		
	</div>
</div>