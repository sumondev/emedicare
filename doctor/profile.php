
<?php
	
	include("../library/connectdb.php");
	include 'doctor.php';
	$run = new Connection();
	$query = 'SELECT * FROM doctor where email="'.$_SESSION['demail'].'"';
	$citizen = $run->cn->query($query);

	while($row = $citizen->fetch_assoc())
	{
		echo "<div class='col-md-10'>";

			echo '

				<div class="panel panel-default">
					<div class="panel-body">

						<div class="col-md-4 ">

			  			<div class="row">
			  				<img class="img-rounded img-profile" src="../img/doctor/doc.jpg">
			  				<div>&nbsp;</div>
			  			</div>
			  			
			  			<div class="row">
			  				<h4 class="text-success"><span class="glyphicon glyphicon-user"></span> Basic info<hr></h4>
			  						  			
			  			</div>
			  			
			  			<div class="row">
			  				<h4>First Name</h4>
			  				<h5 class="text-muted container"> '.$row['first_name'].'</h5>
			  				<div>&nbsp;</div>
			  			</div>

			  			<div class="row">
			  				<h4>Last Name </h4>
			  				<p><h5 class="text-muted container">'.$row['last_name'].' </h5></p>
			  				<div>&nbsp;</div>
			  			</div>

			  			<div class="row">
			  				<h4>About me </h4>
			  				<p><h5 class="text-muted container">'.$row['first_name'].'</h5></p>
			  				<div>&nbsp;</div>
			  			</div>

			  			

			  		</div>

		  		

			  		<div class="col-md-1"></div>
				  		
				  	

				  	<div class="col-md-3">
				  			<div class="row">
				  				<h4 class="text-success"><span class="glyphicon glyphicon-user"></span> General Information</h4>
				  				<hr>
				  			</div>
				  			<div class="row">
				  				<h4>Blood group </h4>
				  				<p><h5 class="text-muted container"> '.$row['blood_group'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Medical id </h4>
				  				<p><h5 class="text-muted container"> '.$row['doctor_id'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div> 

				  			<div class="row">
				  				<h4>National id</h4>
				  				<p><h5 class="text-muted container"> '.$row['national_id'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Nationality</h4>
				  				<p><h5 class="text-muted container"> '.$row['nationality'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Religion</h4>
				  				<p><h5 class="text-muted container"> '.$row['religion'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Gender</h4>
				  				<p><h5 class="text-muted container"> '.$row['gender'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Age</h4>
				  				<p><h5 class="text-muted container"> '.$row['age'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>
				  			

				  
			  
				  	</div> 

				  	<div class="col-md-1"> </div>

				  	<div class="col-md-3">
				  		<div class="row">
				  				<h4 class="text-success"><span class="glyphicon glyphicon-user"></span> Contact information </h4>
				  				<hr>
				  			</div>

				  			<div class="row">
				  				<h4>Email </h4>
				  				<p><h5 class="text-muted container"> '.$row['email'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Mobile no </h4>
				  				<p><h5 class="text-muted container"> '.$row['mobile'].'</h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  			<div class="row">
				  				<h4>Address </h4>
				  				<p><h5 class="text-muted container"> '.$row['address'].' </h5></p>
				  				<div>&nbsp;</div>
				  			</div>

				  	</div>


					</div>
				</div>


			';


		echo "</div>";
	}


?>