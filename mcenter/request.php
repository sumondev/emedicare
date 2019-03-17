<?php
	
	include("../library/connectdb.php");
	include ("mcenter.php");

	$run = new connection();
	$query = "SELECT * FROM mcenter_schedule";
	$mcenter = $run->cn->query($query);

	echo "<div class='panel panel-default'>";

		echo "<div class='panel-heading text-center doctitle'>";
			echo "<h4>Patient's Request</h4>";
		echo "</div>";
	
	echo "</div>";

	

	echo '

		<div class="col-md-10">
			<div class="row">';

			
			while($row = $mcenter->fetch_assoc())
			{
					echo '
						<div class="col-md-4">
							<div class="panel panel-default">

								<div class="panel-heading doctitle text-center">

										Sumon

								</div>
								<div class="panel-body ">

								<div class="text-center">
									<img class="img-responsive img-rounded center-block" src="../img/citizen/profile.jpg"  width="50%"/>
								</div>

								<hr/>

									<div class="col-md-6">
										ID : '.$row['patient_id'].'<hr>
										
									</div>


									<div class="col-md-6">
										Date :'.$row['service_date'].'<hr>
										

									</div>
									
								</div>
								
							</div>

							<div class="text-center">
								<a class="btn btn-info" href="mrequest/'.$row['mcenter_id'].'">Approve</a>
							</div>
							
						</div>

					';

			}
				

	echo '
			</div>
		</div>


	';




?>

