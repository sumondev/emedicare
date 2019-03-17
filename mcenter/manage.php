<?php
	
	include("../library/connectdb.php");
	include ("mcenter.php");

	$run = new connection();
	$query = "SELECT * FROM mcenter_schedule";
	$mcenter = $run->cn->query($query);
?>

	

<div class="col-md-10">
	<div class="panel panel-default">
	  	<div class="panel-heading doctitle text-center">Price Management</div>
	  	
	  	<div class="panel-body">
	  		<div class="col-md-6">

	  					<!-- Left part -->

						<div class="panel panel-default">
						  	<div class="panel-heading doctitle text-center">Current Test's Prices</div>
						  	
						  	<div class="panel-body">
						  		<div class="col-md-6">

						  				<h4 class="text-info text-center">Tests Name</h4><hr>

						  				<div class="text-center">
						  					
						  					Abdominal MRI
							  				<hr>
											Abdominal Tap
											<hr>
											Abdominal Ultrasound
											<hr>
											Abdominal X-ray
											<hr>
											ABO Blood Typing
											<hr>
											Acoustic Reflex Test
											<hr>
											ACTH  Test
											<hr>
											ACTH Suppression Test

						  				</div>

										
										

						  			
						  		</div>

						  		<div class="col-md-6">
						  			<h4 class="text-info text-center">Tests Price</h4><hr>

							  			<div class="text-center">
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				<hr>
							  				500 Tk.
							  				
							  			</div>
						  			
						  		</div>

						  	</div>
						</div>
						<!-- Left part end -->
			  			
	  		</div>

	  		<div class="col-md-6">
	  				<!-- Left part -->

						<div class="panel panel-default">
						  	<div class="panel-heading doctitle text-center">Update Test's Prices </div>
						  	
						  	<div class="panel-body">
						  		<div class="col-md-6">
						  			<h4 class="text-info text-center">Tests Name</h4><hr>
						  			<div class="text-center">
						  					
						  					Abdominal MRI
							  				<hr>
											Abdominal Tap
											<hr>
											Abdominal Ultrasound
											<hr>
											Abdominal X-ray
											<hr>
											ABO Blood Typing
											<hr>
											Acoustic Reflex Test
											<hr>
											ACTH  Test
											<hr>
											ACTH Suppression Test

						  				</div>
						  			
						  		</div>

						  		<div class="col-md-6">
						  				<h4 class="text-info text-center">Tests Price</h4><hr>

						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				<input type="text" class="form-control price-input" name="" placeholder="New price" /> 
						  				

						  			
						  		</div>

						  	</div>
						</div>
				<!-- Left part end -->

	  			
	  		</div>

	  	</div>
	</div>
</div>


	




